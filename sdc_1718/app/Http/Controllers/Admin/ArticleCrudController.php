<?php

namespace App\Http\Controllers\Admin;

use App\ArticleTemplates;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;

class ArticleCrudController extends CrudController
{
	use ArticleTemplates;

    public function __construct()
    {
        parent::__construct();

		$modelClass = config('backpack.pagemanager.page_model_class', 'App\Models\Article');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel($modelClass);
        $this->crud->setModel("App\Models\Article");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article');
        $this->crud->setEntityNameStrings('article', 'articles');

		/*
        |--------------------------------------------------------------------------
        | COLUMNS
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn([
                                'name' => 'date',
                                'label' => 'Date',
                                'type' => 'date',
        ]);
		$this->crud->addColumn([
                                'name' => 'status',
                                'label' => 'Status',
        ]);
		$this->crud->addColumn([
                                'name' => 'slug',
                                'label' => 'Slugs',
        ]);
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Title',
        ]);
        $this->crud->addColumn([
                                'name' => 'featured',
                                'label' => 'Featured',
                                'type' => 'check',
        ]);
		$this->crud->addColumn([
                                'label' => 'Categories',
                                'type' => 'select_multiple',
                                'name' => 'categories',
                                'entity' => 'categories',
                                'attribute' => 'name',
                                'model' => "App\Models\Category",
        ]);
		$this->crud->addColumn([
                                'label' => 'Tags',
                                'type' => 'select_multiple',
                                'name' => 'tags',
                                'entity' => 'tags',
                                'attribute' => 'name',
                                'model' => "App\Models\Tag",
        ]);
		$this->crud->addColumn([
                                'name' => 'template',
								'label' => 'Template',
                                'type' => 'article_template',
        ]);

 		/*
        |--------------------------------------------------------------------------
        | FIELDS
        |--------------------------------------------------------------------------
        */

		// In ArticleManager,
        // - default fields, that all templates are using, are set using $this->addDefaultArticleFields();
        // - template-specific fields are set per-template, in the ArticleTemplates trait;

        // $this->crud->enableAjaxTable();
    }

	// -----------------------------------------------
    // Overwrites of CrudController
    // -----------------------------------------------

    // Overwrites the CrudController create() method to add template usage.
    public function create($template = false)
    {
        $this->addDefaultArticleFields($template);
        $this->useTemplate($template);

        return parent::create();
    }

    // Overwrites the CrudController store() method to add template usage.
    public function store(StoreRequest $request)
    {
        $this->addDefaultArticleFields(\Request::input('template'));
        $this->useTemplate(\Request::input('template'));

        return parent::storeCrud();
    }

    // Overwrites the CrudController edit() method to add template usage.
    public function edit($id, $template = false)
    {
        // if the template in the GET parameter is missing, figure it out from the db
        if ($template == false) {
            $model = $this->crud->model;
            $this->data['entry'] = $model::findOrFail($id);
            $template = $this->data['entry']->template;
        }

        $this->addDefaultArticleFields($template);
        $this->useTemplate($template);

        return parent::edit($id);
    }

    // Overwrites the CrudController update() method to add template usage.
    public function update(UpdateRequest $request)
    {
        $this->addDefaultArticleFields(\Request::input('template'));
        $this->useTemplate(\Request::input('template'));

        return parent::updateCrud();
    }

    // -----------------------------------------------
    // Methods that are particular to the ArticleManager.
    // -----------------------------------------------

    /**
     * Populate the create/update forms with basic fields, that all pages need.
     *
     * @param string $template The name of the template that should be used in the current form.
     */
    public function addDefaultArticleFields($template = false)
    {
		$this->crud->addField([
								'name' => 'template',
								'label' => 'Template',
								'type' => 'select_page_template',
								'options' => $this->getTemplatesArray(),
								'value' => $template,
								'allows_null' => false,
		]);
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'hint' => 'Will be automatically generated from your title, if left empty.',
                                // 'disabled' => 'disabled'
        ]);
		$this->crud->addField([    // TEXT
                                'name' => 'title',
                                'label' => 'Title',
                                'type' => 'text',
                                'placeholder' => 'Your title here',
        ]);

        $this->crud->addField([    // TEXT
                                'name' => 'date',
                                'label' => 'Date',
                                'type' => 'date',
                                'value' => date('Y-m-d'),
        ], 'create');
        $this->crud->addField([    // TEXT
                                'name' => 'date',
                                'label' => 'Date',
                                'type' => 'date',
        ], 'update');
        $this->crud->addField([    // Image
                                'name' => 'image',
                                'label' => 'Image',
                                'type' => 'browse',
        ]);
        $this->crud->addField([    // SELECT
                                'label' => 'Categories',
                                'type' => 'select2_multiple',
                                'name' => 'categories',
                                'entity' => 'categories',
                                'attribute' => 'name',
                                'model' => "App\Models\Category",
								'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
                                'label' => 'Tags',
                                'type' => 'select2_multiple',
                                'name' => 'tags', // the method that defines the relationship in your Model
                                'entity' => 'tags', // the method that defines the relationship in your Model
                                'attribute' => 'name', // foreign key attribute that is shown to user
                                'model' => "App\Models\Tag", // foreign key model
                                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
        $this->crud->addField([    // ENUM
                                'name' => 'status',
                                'label' => 'Status',
                                'type' => 'enum',
        ]);
        $this->crud->addField([    // CHECKBOX
                                'name' => 'featured',
                                'label' => 'Featured item',
                                'type' => 'checkbox',
        ]);
		$this->crud->addField([    // WYSIWYG
								'name' => 'content',
								'label' => 'Content',
								'type' => 'ckeditor',
								'placeholder' => 'Your textarea text here',
		]);
    }

    /**
     * Add the fields defined for a specific template.
     *
     * @param  string $template_name The name of the template that should be used in the current form.
     */
    public function useTemplate($template_name = false)
    {
        $templates = $this->getTemplates();

        // set the default template
        if ($template_name == false) {
            $template_name = $templates[0]->name;
        }

        // actually use the template
        if ($template_name) {
            $this->{$template_name}();
        }
    }

    /**
     * Get all defined templates.
     */
    public function getTemplates()
    {
        $templates_array = [];

        $templates_trait = new \ReflectionClass('App\ArticleTemplates');
        $templates = $templates_trait->getMethods();

        if (! count($templates)) {
            abort('403', 'No templates have been found.');
        }

        return $templates;
    }

    /**
     * Get all defined template as an array.
     *
     * Used to populate the template dropdown in the create/update forms.
     */
    public function getTemplatesArray()
    {
        $templates = $this->getTemplates();

        foreach ($templates as $template) {
            $templates_array[$template->name] = $this->crud->makeLabel($template->name);
        }

        return $templates_array;
    }
}
