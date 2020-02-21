<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    {{--                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
                    {{--                        <span class="glyphicon glyphicon-user userName" aria-hidden="true" style="font-size: 20px"> {{ Auth::user()->name }}</span>--}}
                    {{--                        <span class=" fa fa-angle-down"></span>--}}
                    <a class="dropdown-item" href="http://localhost/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    {{--                    </a>--}}
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            <a href="javascript:">
                                <a data-toggle="modal"
                                   data-target=".bs-example-modal-lg-setting"> Setting
                                </a>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            {{--            <div class="modal fade bs-example-modal-lg-setting" tabindex="-1" role="dialog" aria-hidden="true">--}}
            {{--                <div class="modal-dialog modal-lg">--}}
            {{--                    <div class="modal-content">--}}
            {{--                        <div class="modal-header">--}}
            {{--                            <button type="button" class="close" data-dismiss="modal"><span--}}
            {{--                                    aria-hidden="true">×</span>--}}
            {{--                            </button>--}}
            {{--                            <h4 class="modal-title" id="myModalLabel">Setting</h4>--}}
            {{--                        </div>--}}
            {{--                        <div class="modal-body">--}}
            {{--                            <form class="form-horizontal form-label-left" id="settingUserForm">--}}
            {{--                                @csrf--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>--}}
            {{--                                    <div class="col-md-9 col-sm-9 col-xs-12">--}}
            {{--                                        <input type="text" class="form-control"--}}
            {{--                                               placeholder="Name of new category" name="name" id="input-name-setting-form" value="{{ Auth::user()->name }}">--}}
            {{--                                        <p class="error" style="color: red" id="error-name-setting-form"></p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>--}}
            {{--                                    <div class="col-md-9 col-sm-9 col-xs-12">--}}
            {{--                                        <input type="text" class="form-control"--}}
            {{--                                               placeholder="email of new category" name="email" id="input-email-setting-form" value="{{ Auth::user()->email }}">--}}
            {{--                                        <p class="error" style="color: red" id="error-email-setting-form"></p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label--}}
            {{--                                        class="control-label col-md-3 col-sm-3 col-xs-12">Old password</label>--}}
            {{--                                    <div class="col-md-9 col-sm-9 col-xs-12">--}}
            {{--                                                    <input type="password" class="form-control" rows="3"--}}
            {{--                                                              name="oldPassword" id="input-oldPassword-setting-form">--}}
            {{--                                        <p class="error" style="color: red" id="error-oldPassword-setting-form"></p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label--}}
            {{--                                        class="control-label col-md-3 col-sm-3 col-xs-12">New password</label>--}}
            {{--                                    <div class="col-md-9 col-sm-9 col-xs-12">--}}
            {{--                                        <input type="password" class="form-control" rows="3"--}}
            {{--                                               name="newPassword" id="input-newPassword-setting-form">--}}
            {{--                                        <p class="error" style="color: red" id="error-newPassword-setting-form"></p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label--}}
            {{--                                        class="control-label col-md-3 col-sm-3 col-xs-12">Confirm new password</label>--}}
            {{--                                    <div class="col-md-9 col-sm-9 col-xs-12">--}}
            {{--                                        <input type="password" class="form-control" rows="3"--}}
            {{--                                               name="newPassword_confirmation" id="input-newPassword_confirmation-setting-form">--}}
            {{--                                        <p class="error" style="color: red" id="error-newPassword_confirmation-setting-form"></p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="modal-footer">--}}
            {{--                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">--}}
            {{--                                        <button type="button" class="btn btn-primary" data-dismiss="modal">--}}
            {{--                                            Cancel--}}
            {{--                                        </button>--}}
            {{--                                        <button type="reset" class="btn btn-primary">Reset</button>--}}
            {{--                                        <button type="button" class="btn btn-success" id="updateUser">--}}
            {{--                                            Submit--}}
            {{--                                        </button>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </form>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </nav>
    </div>
</div>
