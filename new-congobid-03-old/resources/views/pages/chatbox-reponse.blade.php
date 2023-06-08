@extends('layouts.app-chatbox')
@section('content')
<div class="block-page">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="content-chatbox">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card card-chat">
                        <div class="content-chat d-flex">
                            <div class="avatar">
                                <img src="{{asset('images/bg3.jpg')}}" alt="">
                            </div>
                            <div class="content-name">
                                <div class="d-flex align-items-center mt-2 mb-2">
                                    <h5>Caleb Kudesisa</h5>
                                    <span class="date">Il y a 3min</span>
                                </div>
                                <div class="message">
                                    <p class="mb-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil distinctio alias, assumenda ex molestiae facilis quisquam ea pariatur velit natus aspernatur quasi dicta temporibus modi odit. Architecto id alias eligendi!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="block-response ps-5">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="card card-chat">
                                    <div class="content-chat d-flex">
                                        <div class="avatar">
                                            <img src="{{asset('images/bg3.jpg')}}" alt="">
                                        </div>
                                        <div class="content-name">
                                            <div class="d-flex align-items-center mt-2 mb-2">
                                                <h5>Caleb Kudesisa</h5>
                                                <span class="date">Il y a 3min</span>
                                            </div>
                                            <div class="message">
                                                <p class="mb-2">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil distinctio alias, assumenda ex molestiae facilis quisquam ea pariatur velit natus aspernatur quasi dicta temporibus modi odit. Architecto id alias eligendi!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-chat">
                                    <div class="content-chat d-flex">
                                        <div class="avatar">
                                            <img src="{{asset('images/bg3.jpg')}}" alt="">
                                        </div>
                                        <div class="content-name">
                                            <div class="d-flex align-items-center mt-2 mb-2">
                                                <h5>Caleb Kudesisa</h5>
                                                <span class="date">Il y a 3min</span>
                                            </div>
                                            <div class="message">
                                                <p class="mb-2">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil distinctio alias, assumenda ex molestiae facilis quisquam ea pariatur velit natus aspernatur quasi dicta temporibus modi odit. Architecto id alias eligendi!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </div>
          <div class="writing-block-chat fixed-bottom">
            <div class="content-writing d-flex align-items-center">
                <div class="avatar">
                    <img src="{{asset('images/bg3.jpg')}}" alt="">
                </div>
                <div class="block-textarea">
                    <textarea name="message" id="message" cols="30" rows="2" class="form-control" placeholder="Tapez du texte"></textarea>
                </div>
                <button class="btn btn-send">
                    <i class="fi fi-rr-paper-plane"></i>
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
