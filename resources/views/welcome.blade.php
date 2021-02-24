@extends('template')
@section('content')
    <div class="container">
        @include('components/banner')

        {{--Login Area--}}
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header" style="text-align:center">
                    তথ্য প্রদান করতে সাইন ইন করুন
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="login" method="post" class="form-group">
                        {{ csrf_field()}}
                        <input type="text" name="eiin" class="form-control mt-2" placeholder="EIIN" />
                        <input type="password"  name="password" class="form-control mt-2" placeholder="Password" />
                        <input class="form-control mt-2 btn-success" type="submit" value="Log In" />
                    </form>
                </div>
            </div>
        </div>

        @include('components/footer')

    </div>
@endsection
