@extends('layouts.main-layout')
@section('title')
	Modification d'un menu
@endsection

@section('autres_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  
@endsection

@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Modification menu</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br />
      <div class="col-md-2">
        @if($menu->image)
        <img src="{{ asset('documents/'.$menu->image) }}" alt="image de presentation" width="100%">
        @else
        <span class="text-info">Aucune image    </span>
        @endif
    </div>

      <form data-parsley-validate class="form-horizontal form-label-left col-md-10" method="POST" action="{{ route('menu.update',$menu->id) }}" enctype="multipart/form-data" >

      @csrf
      @method('PUT')

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Titre</label>
          <div class="col-md-8 col-sm-8 ">
          <input type="text" name="titre" id="first-name" required="required" class="form-control {{ $errors->has('titre') ? ' is-invalid' : '' }}" value="{{ old('titre')??$menu->titre }}" autofocus autocomplete="off">
          @if ($errors->has('titre'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('titre') }}</strong>
                      </span>
                  @endif
          </div>
        </div>

        
        <div class="form-group item">
          <label class="col-form-label col-md-3 col-sm-3 label-align">Type menu</label>
          <div class="col-md-8 col-sm-8 ">
            <select class="select2_single form-control" tabindex="-1" name="type_menu_id">
                <option value="">Sélectionner un type </option>
              @foreach ($type_menus as $type_menu)
                <option value="{{$type_menu->id}}"

                    @if ($type_menu->id == $menu->type_menu_id)
                    selected
                    @endif  > {{$type_menu->type}}  </option>
              @endforeach   
            </select>
          </div>
        </div>

         {{-- <div class="item form-group">
            <div class="col-md-6 col-sm-8 mx-auto mt-2">
                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm mx-auto" data-toggle="modal" data-target="#exampleModalCenter">
                 Supprimer les styles du texte
                </button>
            </div>
        </div> --}}

                
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Petite description</label>
          <div class="col-md-8 col-sm-8 ">
          <textarea name="description" class="form-control  {{ $errors->has('description') ? ' is-invalid' : '' }}" cols="30" rows="5"  
            >{{ old('description')??$menu->description }}</textarea>
          @if ($errors->has('description'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('description') }}</strong>
                      </span>
                  @endif
          </div>
        </div>


        <div class="item form-group">
               <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Image de présentation</label>
              <div class="col-md-8 col-sm-8 ">
                  <div class="custom-file">
                      <input type="file" name="image"  class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}" id="validatedCustomFile" value="{{old('image')}}" >
                      <label class="custom-file-label" for="validatedCustomFile">Choisissez une image representatrice...</label>
                      @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
        </div>


        
        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-8 col-sm-8 offset-md-3">
            <button type="submit" class=" btn-sm btn-block btn-success">Enregistrer</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</div>

 
@endsection

@section('autres_scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
 <script src="{{ asset('template/vendors/summernote/lang/summernote-fr-FR.js') }}"></script>
 <script src="{{ asset('template/vendors/summernote/initialisation.js') }}"></script>
@endsection 