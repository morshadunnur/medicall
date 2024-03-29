<section id="main-content" class="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><i class="icon_map"></i> Hospital/Chamber</th>
                            <th><i class="icon_calendar"></i> Day</th>
                            <th><i class="icon_clock"></i> From</th>
                            <th><i class="icon_clock"></i> To</th>
                            <th><i class="icon_calendar"></i> Appointment Limit</th>
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @foreach($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->hospital->name }}</td>
                            <td>{{ $schedule->day }}</td>
                            <td>{{ $schedule->time_from }}</td>
                            <td>{{ $schedule->time_to }}</td>
                            <td>{{ $schedule->max_limit }}</td>
                            <td>
                                <div class="btn-group">
                                    {{--<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>--}}
                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
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
<!--main content end-->