<?php

namespace App\Http\Controllers\Backend;

use App\Models\DataPenduduk;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class DataPenduduksController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->menu = 'Data Penduduk';
        $this->route = $this->routes['backend'] . 'data_penduduk';
        $this->slug = $this->slugs['backend'] . 'data_penduduk';
        $this->view = $this->views['backend'] . 'data_penduduk';
        $this->breadcrumb = '<li><a href="' . route($this->route . '.index') . '">' . $this->menu . '</a></li>';
        #share parameters
        $this->share();
        # init model
        $this->model = new DataPenduduk;
        $this->roleModel = new Role;
    }

    /**
     * Display a listing of the resource
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $breadcrumb = $this->breadcrumbs($this->breadcrumb . '<li class="active">' . trans('label.view') . '</li>');
            return view($this->view . '.index', compact('breadcrumb'));
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function datatables()
    {
        try {
            $data = numrows($this->model->sql()->get());
            return Datatables::of($data)
                ->addColumn('action', function ($data) {
                    $action = null;
                    if (check_access('detail', $this->slug)) {
                        // $action .= '<a data-href="'.route($this->route.'.detail', encodeids($data->id)).'" class="btn btn-xs btn-success btn-modal-action" title="'.trans('label.detail').'" data-title="'.trans('form.detail', ['menu' => $this->menu]).'" data-icon="fa fa-search fa-fw" data-background="modal-primary">'.trans('icon.detail').'</a>';
                    }
                    if (check_access('update', $this->slug)) {
                        //$action .= '<a href="'.route($this->routes['backend'].'profile.index', ['id' => encodeids($data->id)]).'" class="btn btn-xs btn-primary" title="'.trans('label.edit').'">'.trans('icon.edit').'</a>';
                    }
                    if (check_access('activate', $this->slug) && $data->active_id == 0) {
                        //$action .= '<a data-href="'.route($this->route.'.activate.get', encodeids($data->id)).'" class="btn btn-xs btn-success btn-modal-action" title="'.trans('label.activate').'" data-title="'.trans('form.activate', ['menu' => $this->menu]).'" data-icon="fa fa-check fa-fw" data-background="modal-success">'.trans('icon.activate').'</a>';
                    }
                    if (check_access('deactivate', $this->slug) && $data->active_id == 1) {
                        //$action .= '<a data-href="'.route($this->route.'.deactivate.get', encodeids($data->id)).'" class="btn btn-xs btn-danger btn-modal-action" title="'.trans('label.deactivate').'" data-title="'.trans('form.deactivate', ['menu' => $this->menu]).'" data-icon="fa fa-ban fa-fw" data-background="modal-danger">'.trans('icon.deactivate').'</a>';
                    }
                    return $action;
                })
                ->make(true);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function create()
    {
        try {
            return view($this->view . '.form.create');
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'nik' => 'required|max:255'
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route($this->route . '.create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $this->model;
            $data->nik = $request->nik;
            $data->nama = $request->nama;
            $data->no_kk = $request->no_kk;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->pekerjaan = $request->pekerjaan;
            $data->alamat = $request->alamat;
            $data->tempat_lahir=$request->tempat_lahir;
            $data->save();

            action_message('create', $this->menu);
            return json_encode(['redirect' => route($this->route . '.index')]);
        } catch (\Exception $e) {
            Log::error($e);
            abort(500);
        }
    }
}
