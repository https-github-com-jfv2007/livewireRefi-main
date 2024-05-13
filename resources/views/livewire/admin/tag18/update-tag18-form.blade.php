<div>
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1 class="m-0 text-dark">Appointments</h1> -->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="">Appointments</a></li>
                            <li class="breadcrumb-item active">Create</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form wire:submit.prevent="updateTag" autocomplete="off">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add New Appointment</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="tag">Tag</label>
                                                <input type="text" wire:model.defer="state.tag"
                                                    class="form-control @error('tag') is-invalid @enderror"
                                                    id="tag" aria-describedby="tagHelp"
                                                    placeholder="Introducir nombre del Tag">
                                                @error('tag')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="descripcion">Descripcion</label>
                                                <input type="text" wire:model.defer="state.descripcion"
                                                    class="form-control @error('descripcion') is-invalid @enderror"
                                                    id="descripcion" aria-describedby="descripcionHelp"
                                                    placeholder="Introducir descripcion">
                                                @error('descripcion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="operacion">Operacion</label>
                                                <input type="text"wire:model.defer="state.operacion"
                                                    class="form-control @error('operacion') is-invalid @enderror"
                                                    id="operacion" aria-describedby="operacionHelp">
                                                @error('operacion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="ubicacion">Ubicacion</label>
                                                <input type="text" wire:model.defer="state.ubicacion"
                                                    class="form-control @error('ubicacion') is-invalid @enderror"
                                                    id="ubicacion" aria-describedby="ubicacionHelp">
                                                @error('ubicacion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> {{-- col-md-12 --}}

                                        <div class="form-group col-md-6">
                                            {{-- <div liwire:ignore> --}}
                                            <label for="centro">Centros</label>
                                            <select wire:model="selectedCentro" id="id_centro"
                                                class="form-control select2 @error('selectedCentro') is-invalid @enderror">
                                                @foreach ($centros as $centro)
                                                    <option value="{{ $centro->id }}">{{ $centro->nombre_centro }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('selectedCentro')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            {{-- </div> --}}
                                        </div> {{-- form-group col-md-6 --}}

                                        <div class="form-group col-md-6">
                                        <div liwire:ignore>
                                                <label for="planta">Plantas</label>
                                                <select wire:model.defer="selectedPlanta" id="state_id"
                                                    class="form-control @error('selectedPlanta') is-invalid @enderror">
                                                    {{-- @if ($centros->count() == 0)
                                                            <option value="">Debe seleccionar un pais antes</option>
                                                        @endif --}}
                                                    @foreach ($plantas as $planta)
                                                        <option value="{{ $planta->id }}">{{ $planta->nombre_planta }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('selectedPlanta')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                        </div> {{-- "col-md-6" --}}


                                        <div class="col-md-6">
                                            <div liwire:ignore>
                                                <label for="" class="text-sm">Categoria</label>
                                                <select wire:model.defer="selectedCategoria" id="id_categoria"
                                                    class="form-control @error('selectedCategoria') is-invalid @enderror">
                                                    <option value="">Seleccionar la categoria</option>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}">
                                                            {{ $categoria->descripcion_c }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('selectedCategoria')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> {{-- "col-md-6" --}}


                                        <div class="col-md-6">
                                            {{-- <div liwire:ignore> --}}
                                            <label for="" class="text-sm">Seccion</label>
                                            <select wire:model.defer="selectedSeccion" id="id_seccion"
                                                class="form-control @error('selectedSeccion') is-invalid @enderror">
                                                <option value="">Seleccionar la seccion</option>
                                                @foreach ($seccions as $seccion)
                                                    <option value="{{ $seccion->id }}">
                                                        {{ $seccion->descripcion_s }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('selectedSeccion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            {{-- </div> --}}
                                        </div> {{-- "col-md-6" --}}

                                        <div class="col-md-6">
                                            <div liwire:ignore>
                                                <label for="" class="text-sm">Status</label>
                                                <select wire:model.defer="selectedStatus" id="id_status"
                                                    class="form-control @error('selectedStatus') is-invalid @enderror">
                                                    <option value="">Seleccionar el Status</option>
                                                    @foreach ($status as $statu)
                                                        <option value="{{ $statu->id }}">{{ $statu->desc_status }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('selectedStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> {{-- "col-md-6" --}}


                                        <div class="form-group">
                                            <label for="customFile">Profile Photo</label>

                                            <div class="custom-file">
                                                <input wire:model="foto1" type="file" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    @if ($foto1)
                                                        {{ $foto1->getClientOriginalName() }} {{-- aqui enseña  el nombre --}}
                                                    @else
                                                        {{ $foto }}
                                                        {{--  "{{ asset('storage') }}/{{$old_image}}" --}}
                                                    @endif
                                                </label>
                                                {{--  <input type="hidden" wire:model='old_image' name="" id=""> --}}
                                            </div>
                                            @if ($foto1)
                                                <img src="{{ $foto1->temporaryUrl() }}"
                                                    class="img d-block mt-2 w-100 rounded">
                                            @else
                                                <img
                                                    src="{{ Storage::url('images/planta/' . $foto) }}"class="img d-block mt-2 w-100 rounded">
                                            @endif

                                            {{--  @if ($foto1)
                                                <img src="{{ $foto1->temporaryUrl() }}"class="img d-block mt-2 w-100 rounded">
                                            @endif  --}}

                                        </div> {{-- form-group --}}



                                    </div> {{-- "row" --}}
                                </div> {{-- "card-body" --}}

                                <div class="card-footer">
                                    <a href="{{ route('admin.tag18s') }}">
                                        <button type="button" class="btn btn-secondary"><i
                                                class="fa fa-times mr-1"></i>
                                            Cancel
                                        </button>
                                    </a>
                                    <button id="submit" type="submit" class="btn btn-primary"><i
                                            class="fa fa-save mr-1"></i> Save</button>
                                </div>
                            </div> {{-- "card" --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- aqui va lo que falta --}}
        @push('js')
            <script>
                /*   document.addEventListener('livewire:load', function() {
                                $("#id_centro").select2();
                                $('#id_centro').on('change', function(e) {
                                    var countryId = $('#id_centro').select2("val");
                                    @this.set('selectedCentro', id_centro);

                                });
                            }); */

                $(document).ready(function() {
                            $('.select2').select2()
                            $('.select2').on('change', function() {
                                @this.set('selectedCentro', $(this).val())
                            })
            </script>
        @endpush
    </div>
</div>
