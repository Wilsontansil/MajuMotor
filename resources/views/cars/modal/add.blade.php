<div class="modal fade" id="addcars-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Cars</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('car.create') }}" method="POST">
                @csrf
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="carname">Car Code</label>

                        <input type="text" name="carcode" id="carcode" class="form-control" placeholder="Car Code" required>
                    </div>

                    <div class="mt-4">
                        <label for="carname">Car Name</label>

                        <input type="text" name="carname" id="carname" class="form-control" placeholder="Car Name" required>
                    </div>

                    <div class="mt-4">
                        <label for="carname">Car Brand</label>

                        <select name="carbrand" id="carbrand" class="form-control">
                            <option value="Toyota">Toyota</option>
                            <option value="Honda">Honda</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Daihatsu">Daihatsu</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Isuzu">Isuzu</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                            <option value="BMW">BMW</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Audi">Audi</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="KIA">KIA</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Ford">Ford</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Jaguar">Jaguar</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="Porsche">Porsche</option>
                            <option value="MINI">MINI</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Lamborghini">Lamborghini</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label for="carname">Car Type</label>

                        <select name="cartype" id="cartype" class="form-control">
                            <option value="SUV">SUV</option>
                            <option value="MPV">MPV</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Convertible">Convertible</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Truck">Truck</option>
                            <option value="Van">Van</option>
                            <option value="Wagon">Wagon</option>
                            <option value="Crossover">Crossover</option>
                            <option value="Luxury">Luxury</option>
                            <option value="Sports Car">Sports Car</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Electric">Electric</option>
                        </select>
                    </div>
                        
                </div>
                <div class="modal-footer">
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function addcars() {
            $('#addcars-modal').modal('show');
        }
    </script>
@endpush