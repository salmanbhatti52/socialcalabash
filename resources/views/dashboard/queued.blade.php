@extends('dashboard.layouts.app')

@section('title', 'Queued - Dashboard')

@section('body')
    <!-- sidebar and main-content section starts -->
    <div class="sidebar-main-content">

        @include('dashboard.sidebars.publish-sidebar')

        <div class="publish main channels">
            <div class="main-header">
                <div class="main-header-btns">
                    <form action="">
                        <input type="checkbox" name="check">
                    </form>
                    <a href="#"><img src="{{ asset('dashboard/img/delete.png') }}" alt="Delete Icon"/></a>
                    <a href="#"><img src="{{ asset('dashboard/img/calendar-day.png') }}" alt="Calender Icon"></a>
                </div>
                <ul>
                    <li><a href="#">filter by user</a></li>
                    <li><a href="#">filter by channel</a></li>
                    <li><a href="#">filter by organization</a></li>
                </ul>
                <div class="main-header-btn-group">
                    <button class="active">scheduled</button>
                    <button>queued</button>
                    <button>sent</button>
                    <button>overview</button>
                </div>
            </div>
            <div class="main-content">





                <div style="overflow: auto;">
                    <table class="">
                        <tbody id="page_list">

                            @if (session()->has('accessTokenError'))
                                <tr>
                                    <td colspan="3" style="text-align: center;color: red;">
                                        {{ session()->get('accessTokenError') }}
                                    </td>
                                </tr>
                                <script>
                                document.addEventListener("DOMContentLoaded", (event) => {
                                    toastr.error("{{ session()->get('accessTokenError') }}")
                                });
                                </script>
                            @endif

                            @foreach ($errors->all() as $error)
                                <tr>
                                    <td colspan="3" style="text-align: center;color: green;">
                                        {{ $error }}
                                    </td>
                                </tr>
                            @endforeach



                            @if ($social_posts->count() == 0)
                            <div class="main-content-head">
                                <p>We have shared all of your posts from this queue</p>
                            </div>
                            <div class="main-content-desc">
                                <p>Go to <a href="{{ route('user.channels') }}" style="color:#06ab2c; text-decoration:underline"><b>Channels</b></a> and Use the Compose button to quickly to add more posts in this queue.</p>
                            </div>
                            <div class="main-content-img">
                                <img src="{{ asset('dashboard/img/queued-img.png') }}" alt="Queued Image"/>
                            </div>
                            @else
                                @foreach ($social_posts as $key => $post)
                                    <tr style="border-bottom: 1px solid #707070;">
                                        <td style="border: none;">
                                            <form action="">
                                                <input type="checkbox" />
                                            </form>
                                        </td>
                                        <td class="image-text" style="padding-left:22px; border: none; align-items: center">
                                            <div class="image" style="position: relative">
                                                @php
                                                    $imageName = null;
                                                    $account_name = null;
                                                    if ($post['account_type'] === 'fb_page') {
                                                        $imageName = 'facebook-rect.png';
                                                        $account_name = 'Facebook page';
                                                    }
                                                    
                                                    if ($post['account_type'] === 'fb_group') {
                                                        $imageName = 'facebook-rect.png';
                                                        $account_name = 'Facebook group';
                                                    }
                                                    
                                                    if ($post['account_type'] === 'instagram') {
                                                        $imageName = 'bxl-instagram-alt.png';
                                                        $account_name = 'Instagram account';
                                                    }
                                                    
                                                    if ($post['account_type'] === 'linkedin') {
                                                        $imageName = 'linkedin-square.png';
                                                        $account_name = 'Linkedin account';
                                                    }
                                                    
                                                    if ($post['account_type'] === 'twitter') {
                                                        $imageName = 'twitter-box.png';
                                                        $account_name = 'Twitter account';
                                                    }
                                                    if ($post['account_type'] === 'pinterest') {
                                                        $imageName = 'pinterest.png';
                                                        $account_name = 'Pinterest account';
                                                    }
                                                    
                                                @endphp
                                                <img src="{{ asset('dashboard/img/' . $imageName) }}" alt="Fb Icon" />
                                                <img style="position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                            width: 18px;
                                                                                                                                                                                                                                                                                                                                                                                                                            right: -3px;
                                                                                                                                                                                                                                                                                                                                                                                                                            bottom: -1px;
                                                                                                                                                                                                                                                                                                                                                                                                                            border-radius: 10px;"
                                                    src="{{ $post['image'] }}" />
                                            </div>
                                            <div class="text">
                                                <div class="heading">
                                                    <p>{{ $post['account_name'] }}</p>
                                                </div>
                                                <div class="page-name">
                                                    <p>{{ $post['message'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="border: none;">
                                          <span style="color: #c97a03"><b>Pending</b></span>
                                        </td>
                                        <td class="text-right" style="border: none">
                                            <div style="display: flex">
                                              <a href="#"><img src="{{ asset('dashboard/img/edit-icon.png') }}"
                                                      alt="Edit Icon"></a>
                                              <a href="#"><img src="{{ asset('dashboard/img/delete-icon.png') }}"
                                                      alt="Delete Icon"></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            {{-- End --}}
                            
                        </tbody>
                    </table>
                </div>








            </div>
        </div>
    </div>
    <!-- sidebar and main-content section ends -->

@endsection
