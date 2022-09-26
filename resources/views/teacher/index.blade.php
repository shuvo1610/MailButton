<div class="main-content" style="min-height: 482px;">
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Information</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripe">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Phone</td>
                                    <td>Address</td>
                                </tr>
                                </thead>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher['id']}}</td>
                                    <td>{{ $teacher['name'] }}</td>
                                    <td>{{ $teacher['phone'] }}</td>
                                    <td>{{ $teacher['address'] }}</td>
                                </tr>
                                @endforeach
                            </table><br>
                            <a href="{{route('teacher.registration')}}" class="button" type="button" style="background-color:#4CAF50;display:inline-block;padding: 10px 25px;color:white;text-decoration:none;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


