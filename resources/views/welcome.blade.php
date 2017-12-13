@extends("layout")
@section("content")




                <div class="container">
                        <div class="row">
                            <div class ="col-md-12">
                                <br>
                                <!-------------This is for the main page--------------------->
                                <h1>Welcome To TaskMaster!!!!</h1>

                            </div>
                        </div>
                       <div class ="row">

                           <div class ="col-md-4">

                               <h1>It's Free!!!</h1>
                               <p>
                                   There is no paying for anything. This task application was done using laravel on a virtual machine.
                                   Feel Free to register for an account.</p>
                               <p> New user? <a href="{{ route('register') }}">Register Here!</a></p>
                               <p>  Returning user? <a href="{{ route('login') }}">Click here.</a></p>

                               </p>
                           </div>
                           <div class ="col-md-4">

                               <h1>Lorem Impsum</h1>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                           </div>
                           <div class ="col-md-4">

                               <h1>Lorem Impsum</h1>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                           </div>
                       </div>

                </div>


@endsection





