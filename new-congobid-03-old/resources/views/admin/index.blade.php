@extends('admin.layouts.master')

@section('css')
<style>
    .row .col-12 .card.card-dash-md .block-circles {
  position: relative;
  width: 120px;
  height: 120px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  margin-right: 10px;
  border-radius: 100%;
}

 .row .col-12 .card.card-dash-md .block-circles .circle {
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: relative;
  z-index: 1;
  -webkit-box-shadow: 0 5px 10px rgba(139, 154, 160, 0.041);
          box-shadow: 0 5px 10px rgba(139, 154, 160, 0.041);
  border-radius: 100%;
}

 .row .col-12 .card.card-dash-md .block-circles .circle:nth-child(2) {
    position: absolute;
    width: 76%;
    height: 76%;
}

 .row .col-12 .card.card-dash-md .block-circles .circle:nth-child(2) .circle-white {
    width: 80%;
    height: 80%;
}

 .row .col-12 .card.card-dash-md .block-circles .circle::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background: conic-gradient(var(--bgFond) 100%, white 0%);
    z-index: -2;
}

 .row .col-12 .card.card-dash-md .block-circles .circle .circle-move {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 100%;
    z-index: -1;
}

 .row .col-12 .card.card-dash-md .block-circles .circle .circle-white {
    position: absolute;
    width: 86%;
    height: 86%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 100%;
    font-size: 20px;
    color: var(--blackColor);
    font-weight: 600;
    background: #fff;
}

.table-responsive .table tr td .badge {
    padding: 3px 7px;
    border-radius: 50px;
    font-weight: 600;
}

.table-responsive .table tr td .badge.normal {
  color: #16b085;
  background: #e6f4f1;
}

.table-responsive .table tr td .badge.warning {
    color: #ffb701;
    background: #fffee2;
}
.table-responsive .table tr td .badge.urgent {
    background: #f7d6d6;
    color: #ee0909;
}


</style>
@endsection

@section('body')

    @include('admin.layouts.partials.body.body-index')

@endsection

@section('javascript')
@endsection
