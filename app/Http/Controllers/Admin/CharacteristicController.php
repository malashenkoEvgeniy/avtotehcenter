<?php

namespace App\Http\Controllers\Admin;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharacteristicController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function edit($id)
    {
        $model = Characteristic::find($id);
        return view('admin.characteristic.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'lifting_force' => 'required|integer|',
        ], ['lifting_force.required'=>'Поле "Подъёмная сила" обязательно к заполнению',
            'lifting_force.integer'=>'Поле "Подъёмная сила" должно быть числом',
        ]);
        $model = Characteristic::where('id', $id)->first();


        $model->update(['lifting_force' => $request['lifting_force']]);

        $reqTranslation = request()->except('_token','_method', 'lifting_force');
        $this->updateTranslation($model, $reqTranslation);
        return redirect()->route('characteristic.edit', ['id'=>$id])->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
