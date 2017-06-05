<?php

namespace App;

trait ArticleTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Article Templates for Backpack\ArticleManager
    |--------------------------------------------------------------------------
    |
    | Each article template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and ArticleManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard article fields:
    | - select template
    | - article name (only seen by admins)
    | - article title
    | - article slug
    */

	private function json_sdc_2016()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Personalização</h2><hr>',
        ]);
		$this->crud->addField([
            'name' => 'json_titulo',
            'label' => 'Título Personalizado',
            'fake' => true,
            'store_in' => 'extras',
        ]);
		$this->crud->addField([
            'name' => 'json_texto',
            'label' => 'Texto Reduzido Personalizado',
            'fake' => true,
            'store_in' => 'extras',
        ]);
		$this->crud->addField([
            'name' => 'json_texto_social',
            'label' => 'Texto Facebook Personalizado',
            'fake' => true,
            'store_in' => 'extras',
        ]);
		$this->crud->addField([
            'name' => 'json_imagem',
            'label' => 'Imagem Personalizado',
			'type' => 'browse',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'json_conteudo',
            'type' => 'textarea',
            'label' => 'Conteúdo Personalizado',
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

    private function services()
    {
        $this->crud->addField([   // CustomHTML
                        'name' => 'metas_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_title',
                        'label' => 'Meta Title',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_description',
                        'label' => 'Meta Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_keywords',
                        'type' => 'textarea',
                        'label' => 'Meta Keywords',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
    }

	private function about_us()
    {
        $this->crud->addField([   // CustomHTML
                        'name' => 'metas_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_description',
                        'label' => 'Meta Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_keywords',
                        'type' => 'textarea',
                        'label' => 'Meta Keywords',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
    }
}
