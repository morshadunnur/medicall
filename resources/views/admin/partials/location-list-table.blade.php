<section id="main-content" class="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-6">
                <section class="panel">

                    <header>
                        <h2 class="text-center">Division</h2>
                    </header>

                                <div class="btn-group">
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal_add_division"> Add Division<i class="icon_plus_alt2"></i></a>
                                    <a class="btn btn-warning" href="#"> Edit Division<i class="icon_pencil-edit"></i></a>
                                    <a class="btn btn-danger" href="#"> Delete Devision<i class="icon_close"></i></a>
                                </div>

                    <table class="table table-striped table-advance table-hover table-responsive">
                        <tbody>
                        <tr>
                            <th><i class="icon_book"></i>Division Name</th>
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @foreach($divisions as $division)
                        <tr>
                            <td>{{ $division->name }}</td>
                            <td>
                                <div class="btn-group">
                                    {{--<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>--}}
                                    <a class="btn btn-primary" href="#"><i class="icon_pencil-edit"></i></a>
                                    {{--<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>--}}
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>


            <div class="col-lg-6">
                <section class="panel">

                    <header>
                        <h2 class="text-center">Districts</h2>
                    </header>

                    <div class="btn-group">
                        <a class="btn btn-primary"  data-toggle="modal" data-target="#modal_add_district"> Add Districts<i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-warning" href="#"> Edit Districts<i class="icon_pencil-edit"></i></a>
                        <a class="btn btn-danger" href="#"> Delete Districts<i class="icon_close"></i></a>
                    </div>

                    <table class="table table-striped table-advance table-hover table-responsive">
                        <tbody>
                        <tr>
                            <th><i class="icon_book"></i>District Name</th>
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @foreach($districts as $district)
                        <tr>
                            <td>{{ $district->name }}</td>
                            <td>
                                <div class="btn-group">
                                    {{--<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>--}}
                                    <a class="btn btn-primary" href="#"><i class="icon_pencil-edit"></i></a>
                                    {{--<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>--}}
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>