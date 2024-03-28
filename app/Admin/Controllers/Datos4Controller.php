<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Datos4;
use App\Models\Datos4View;


class Datos4Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Datos4';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Datos4View());

        $grid->column('id', __('Id'));
        $grid->column('result_vulnerability', __('Result Vulnerability'));
        $grid->column('result_risk', __('Result Risk'));
        $grid->column('result_functionality', __('Result Functionality'));
        $grid->column('id_v1', __('Id V1'));
        $grid->column('id_v2', __('Id V2'));
        $grid->column('id_v3', __('Id V3'));
        $grid->column('id_v4', __('Id V4'));
        $grid->column('id_v5', __('Id V5'));
        $grid->column('id_v6', __('Id V6'));
        $grid->column('id_v7', __('Id V7'));
        $grid->column('id_v8', __('Id V8'));
        $grid->column('id_v9', __('Id V9'));
        $grid->column('id_v10', __('Id V10'));
        $grid->column('id_v11', __('Id V11'));
        $grid->column('id_v12', __('Id V12'));
        $grid->column('id_v13', __('Id V13'));
        $grid->column('id_v14', __('Id V14'));
        $grid->column('id_v15', __('Id V15'));
        $grid->column('id_v16', __('Id V16'));
        $grid->column('id_v17', __('Id V17'));
        $grid->column('id_v18', __('Id V18'));
        $grid->column('id_v19', __('Id V19'));
        $grid->column('id_v20', __('Id V20'));
        $grid->column('id_v21', __('Id V21'));
         
        $grid->column('coordenadas', __('Coordenadas'));

        //$grid->map('coordenadas', __('Coordenadas'))->display(function ($coordinates) {
            // Suponiendo que $coordinates es una cadena con el formato de geometría
        //     // Convertir el formato de geometría a un formato legible
        //     list($latitude, $longitude) = $this->parseCoordinates($coordinates);
        //     return "Latitud: $latitude, Longitud: $longitude";
        // });

        $grid->column('usuario', __('Usuario'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('descripcion', __('Descripcion'));
        $grid->column('fecha_registro', __('Fecha Registro'));
        $grid->column('latitud', __('Nombre'));
        $grid->column('longitud', __('Nombre'));


        return $grid;
    }


   public function parseCoordinates($coordinates)
    {
        // Suponiendo que $coordinates es una cadena con el formato de geometría
        // Parseamos la cadena y extraemos la latitud y longitud
        $hexString = ltrim(substr($coordinates, 8), '0'); // Eliminamos los primeros 8 caracteres y los 0 a la izquierda
        $binaryString = hex2bin($hexString);
        $parts = unpack('x/x/x/x/corder/Ltype/dlatitude/dlongitude', $binaryString);
        return [$parts['latitude'], $parts['longitude']];
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Datos4::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('result_vulnerability', __('Result Vulnerability'));
        $show->field('result_risk', __('Result Risk'));
        $show->field('result_functionality', __('Result Functionality'));
        $show->field('id_v1', __('Id V1'));
        $show->field('id_v2', __('Id V2'));
        $show->field('id_v3', __('Id V3'));
        $show->field('id_v4', __('Id V4'));
        $show->field('id_v5', __('Id V5'));
        $show->field('id_v6', __('Id V6'));
        $show->field('id_v7', __('Id V7'));
        $show->field('id_v8', __('Id V8'));
        $show->field('id_v9', __('Id V9'));
        $show->field('id_v10', __('Id V10'));
        $show->field('id_v11', __('Id V11'));
        $show->field('id_v12', __('Id V12'));
        $show->field('id_v13', __('Id V13'));
        $show->field('id_v14', __('Id V14'));
        $show->field('id_v15', __('Id V15'));
        $show->field('id_v16', __('Id V16'));
        $show->field('id_v17', __('Id V17'));
        $show->field('id_v18', __('Id V18'));
        $show->field('id_v19', __('Id V19'));
        $show->field('id_v20', __('Id V20'));
        $show->field('id_v21', __('Id V21'));
        $show->field('coordenadas', __('Coordenadas'));
        $show->field('usuario', __('Usuario'));
        $show->field('nombre', __('Nombre'));
        $show->field('descripcion', __('Descripcion'));
        $show->field('fecha_registro', __('Fecha Registro'));

        return $show;
    }



    /**
 * Make a form builder.
 *
 * @return Form
 */
protected function form()
{
    $form = new Form(new Datos4());

    $form->text('result_vulnerability', __('Result Vulnerability'));
    $form->text('result_risk', __('Result Risk'));
    $form->text('result_functionality', __('Result Functionality'));
    $form->text('id_v1', __('Id V1'));
    $form->text('id_v2', __('Id V2'));
    $form->text('id_v3', __('Id V3'));
    $form->text('id_v4', __('Id V4'));
    $form->text('id_v5', __('Id V5'));
    $form->text('id_v6', __('Id V6'));
    $form->text('id_v7', __('Id V7'));
    $form->text('id_v8', __('Id V8'));
    $form->text('id_v9', __('Id V9'));
    $form->text('id_v10', __('Id V10'));
    $form->text('id_v11', __('Id V11'));
    $form->text('id_v12', __('Id V12'));
    $form->text('id_v13', __('Id V13'));
    $form->text('id_v14', __('Id V14'));
    $form->text('id_v15', __('Id V15'));
    $form->text('id_v16', __('Id V16'));
    $form->text('id_v17', __('Id V17'));
    $form->text('id_v18', __('Id V18'));
    $form->text('id_v19', __('Id V19'));
    $form->text('id_v20', __('Id V20'));
    $form->text('id_v21', __('Id V21'));
    $form->text('coordenadas', __('Coordenadas'));
    $form->text('usuario', __('Usuario'));
    $form->text('nombre', __('Nombre'));
    $form->text('descripcion', __('Descripcion'));
    $form->datetime('fecha_registro', __('Fecha Registro'))->default(date('Y-m-d H:i:s'));

    return $form;
}


}