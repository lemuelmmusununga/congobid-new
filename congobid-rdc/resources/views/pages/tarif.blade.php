@extends('layouts.app')
@section('content')
@include('components.header')
<div class="content-block">
    <div class="banner-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Grille tarifaire</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content-bid">
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <td colspan="2"></td>
                                <th scope="col">SIMBA</th>
                                <th scope="col">BENDA</th>
                                <th scope="col">TURBO</th>
                                <th scope="col">BULLDOZER</th>
                                <th scope="col">BETON</th>
                                <th scope="col">SUKISA</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row" colspan="2">Souscription</th>
                                <td>0.330</td>
                                <td>4,879</td>
                                <td>5427</td>
                                <td>3.7</td>
                                <td>4222.6</td>
                              </tr>
                              <tr>
                                <th scope="row" colspan="2">Durée</th>
                                <td>0.330</td>
                                <td>4,879</td>
                                <td>5427</td>
                                <td>3.7</td>
                                <td>4222.6</td>
                              </tr>
                              <tr>
                                <th rowspan="3" scope="rowgroup" colspan="-3">Roi</th>
                                <th><img src="{{asset('images/couronne.png')}}" alt="" width="50"></th>
                                <td>1898</td>
                                <td>142,984</td>
                                <td>1326</td>
                                <td>23.1</td>
                                <td>9.9</td>
                              </tr>
                              <tr>
                                <th scope="rowgroup">Effet</th>
                                <td>86.8</td>
                                <td>51,118</td>
                                <td>1271</td>
                                <td>8.7</td>
                                <td>17.2</td>
                              </tr>
                              <tr>
                                <th >Déblocage</th>
                                <td>86.8</td>
                                <td>51,118</td>
                                <td>1271</td>
                                <td>8.7</td>
                                <td>17.2</td>
                              </tr>
                              <tr>
                                <th rowspan="3" scope="rowgroup" colspan="-2">Kasonda</th>
                                <th><img src="{{asset('images/foudre.png')}}" alt="" width="50"></th>
                                <td>1898</td>
                                <td>142,984</td>
                                <td>1326</td>
                                <td>23.1</td>
                                <td>9.9</td>
                              </tr>
                              <tr>
                                <th >Effet</th>
                                <td>86.8</td>
                                <td>51,118</td>
                                <td>1271</td>
                                <td>8.7</td>
                                <td>17.2</td>
                              </tr>
                              <tr>
                                <th >Déblocage</th>
                                <td>86.8</td>
                                <td>51,118</td>
                                <td>1271</td>
                                <td>8.7</td>
                                <td>17.2</td>
                              </tr>
                              <tr>
                                <th rowspan="2" scope="rowgroup" colspan="-2">Bouclier</th>
                                <th><img src="{{asset('images/bouclier.png')}}" alt="" width="50"></th>
                                <td>1898</td>
                                <td>142,984</td>
                                <td>1326</td>
                                <td>23.1</td>
                                <td>9.9</td>
                              </tr>
                              <tr>
                                <th >Effet</th>
                                <td>86.8</td>
                                <td>51,118</td>
                                <td>1271</td>
                                <td>8.7</td>
                                <td>17.2</td>
                              </tr>
                              <tr>
                                <th rowspan="2" scope="rowgroup" colspan="-2"></th>
                                <th >Achat clic</th>
                                <td>1898</td>
                                <td>142,984</td>
                                <td>1326</td>
                                <td>23.1</td>
                                <td>9.9</td>
                              </tr>
                              <tr>
                                <th >Bid bonus</th>
                                <td>86.8</td>
                                <td>51,118</td>
                                <td>1271</td>
                                <td>8.7</td>
                                <td>17.2</td>
                              </tr>
                              <tr>
                                <th rowspan="1" scope="rowgroup" colspan="-2">Mode autamatique</th>
                                <th >Géantes gazeuses</th>
                                <td>1898</td>
                                <td>142,984</td>
                                <td>1326</td>
                                <td>23.1</td>
                                <td>9.9</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
