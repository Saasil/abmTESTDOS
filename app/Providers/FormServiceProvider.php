<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Form::component('bsText', 'components.form.text', ['nombre', 'value' => null, 'attributes' => []]);
      Form::component('bsSubmit', 'components.form.submit', ['value' => 'Enviar', 'attributes' => []]);
      Form::component('hidden', 'components.form.hidden', ['nombre', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
