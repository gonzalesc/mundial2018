@extends('layouts.app')

@section('title','Fixture | Mundial 2018')
@section('body-class','home')

@section('content')

<div id="app">

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupa">Grupo A</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupa[1]['flag']" :alt="groupa[1]['country']" class="flag" />
                        @{{groupa[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupa'][1][1]" v-on:keyup="orderTable('groupa')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupa'][1][2]" v-on:keyup="orderTable('groupa')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupa[2]['flag']" :alt="groupa[2]['country']" class="flag" />
                        @{{groupa[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupa[3]['flag']" :alt="groupa[3]['country']" class="flag" />
                        @{{groupa[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupa'][2][3]" v-on:keyup="orderTable('groupa')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupa'][2][4]" v-on:keyup="orderTable('groupa')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupa[4]['flag']" :alt="groupa[4]['country']" class="flag" />
                        @{{groupa[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupa[1]['flag']" :alt="groupa[1]['country']" class="flag" />
                        @{{groupa[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupa'][3][1]" v-on:keyup="orderTable('groupa')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupa'][3][3]" v-on:keyup="orderTable('groupa')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupa[3]['flag']" :alt="groupa[3]['country']" class="flag" />
                        @{{groupa[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupa[2]['flag']" :alt="groupa[2]['country']" class="flag" />
                        @{{groupa[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupa'][4][2]" v-on:keyup="orderTable('groupa')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupa'][4][4]" v-on:keyup="orderTable('groupa')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupa[4]['flag']" :alt="groupa[4]['country']" class="flag" />
                        @{{groupa[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupa[1]['flag']" :alt="groupa[1]['country']" class="flag" />
                        @{{groupa[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupa'][5][1]" v-on:keyup="orderTable('groupa')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupa'][5][4]" v-on:keyup="orderTable('groupa')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupa[4]['flag']" :alt="groupa[4]['country']" class="flag" />
                        @{{groupa[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupa[2]['flag']" :alt="groupa[2]['country']" class="flag" />
                        @{{groupa[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupa'][6][2]" v-on:keyup="orderTable('groupa')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupa'][6][3]" v-on:keyup="orderTable('groupa')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupa[3]['flag']" :alt="groupa[3]['country']" class="flag" />
                        @{{groupa[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupa">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />

    <div class="text-center">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Mundial 2018 Fixture -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-4622287947957408"
             data-ad-slot="9327492626"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <div class="text-center d-block d-sm-none">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Fixture Mundial 2018 - Footer -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:320px;height:100px"
                 data-ad-client="ca-pub-4622287947957408"
                 data-ad-slot="6906834102"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <hr />

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupb">Grupo B</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupb[1]['flag']" :alt="groupb[1]['country']" class="flag" />
                        @{{groupb[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupb'][1][1]" v-on:keyup="orderTable('groupb')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupb'][1][2]" v-on:keyup="orderTable('groupb')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupb[2]['flag']" :alt="groupb[2]['country']" class="flag" />
                        @{{groupb[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupb[3]['flag']" :alt="groupb[3]['country']" class="flag" />
                        @{{groupb[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupb'][2][3]" v-on:keyup="orderTable('groupb')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupb'][2][4]" v-on:keyup="orderTable('groupb')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupb[4]['flag']" :alt="groupb[4]['country']" class="flag" />
                        @{{groupb[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupb[1]['flag']" :alt="groupb[1]['country']" class="flag" />
                        @{{groupb[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupb'][3][1]" v-on:keyup="orderTable('groupb')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupb'][3][3]" v-on:keyup="orderTable('groupb')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupb[3]['flag']" :alt="groupb[3]['country']" class="flag" />
                        @{{groupb[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupb[2]['flag']" :alt="groupb[2]['country']" class="flag" />
                        @{{groupb[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupb'][4][2]" v-on:keyup="orderTable('groupb')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupb'][4][4]" v-on:keyup="orderTable('groupb')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupb[4]['flag']" :alt="groupb[4]['country']" class="flag" />
                        @{{groupb[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupb[1]['flag']" :alt="groupb[1]['country']" class="flag" />
                        @{{groupb[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupb'][5][1]" v-on:keyup="orderTable('groupb')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupb'][5][4]" v-on:keyup="orderTable('groupb')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupb[4]['flag']" :alt="groupb[4]['country']" class="flag" />
                        @{{groupb[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupb[2]['flag']" :alt="groupb[2]['country']" class="flag" />
                        @{{groupb[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupb'][6][2]" v-on:keyup="orderTable('groupb')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupb'][6][3]" v-on:keyup="orderTable('groupb')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupb[3]['flag']" :alt="groupb[3]['country']" class="flag" />
                        @{{groupb[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupb">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupc">Grupo C</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupc[1]['flag']" :alt="groupc[1]['country']" class="flag" />
                        @{{groupc[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupc'][1][1]" v-on:keyup="orderTable('groupc')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupc'][1][2]" v-on:keyup="orderTable('groupc')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupc[2]['flag']" :alt="groupc[2]['country']" class="flag" />
                        @{{groupc[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupc[3]['flag']" :alt="groupc[3]['country']" class="flag" />
                        @{{groupc[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupc'][2][3]" v-on:keyup="orderTable('groupc')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupc'][2][4]" v-on:keyup="orderTable('groupc')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupc[4]['flag']" :alt="groupc[4]['country']" class="flag" />
                        @{{groupc[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupc[1]['flag']" :alt="groupc[1]['country']" class="flag" />
                        @{{groupc[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupc'][3][1]" v-on:keyup="orderTable('groupc')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupc'][3][3]" v-on:keyup="orderTable('groupc')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupc[3]['flag']" :alt="groupc[3]['country']" class="flag" />
                        @{{groupc[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupc[2]['flag']" :alt="groupc[2]['country']" class="flag" />
                        @{{groupc[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupc'][4][2]" v-on:keyup="orderTable('groupc')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupc'][4][4]" v-on:keyup="orderTable('groupc')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupc[4]['flag']" :alt="groupc[4]['country']" class="flag" />
                        @{{groupc[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupc[1]['flag']" :alt="groupc[1]['country']" class="flag" />
                        @{{groupc[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupc'][5][1]" v-on:keyup="orderTable('groupc')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupc'][5][4]" v-on:keyup="orderTable('groupc')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupc[4]['flag']" :alt="groupc[4]['country']" class="flag" />
                        @{{groupc[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupc[2]['flag']" :alt="groupc[2]['country']" class="flag" />
                        @{{groupc[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupc'][6][2]" v-on:keyup="orderTable('groupc')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupc'][6][3]" v-on:keyup="orderTable('groupc')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupc[3]['flag']" :alt="groupc[3]['country']" class="flag" />
                        @{{groupc[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupc">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />


    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupd">Grupo D</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupd[1]['flag']" :alt="groupd[1]['country']" class="flag" />
                        @{{groupd[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupd'][1][1]" v-on:keyup="orderTable('groupd')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupd'][1][2]" v-on:keyup="orderTable('groupd')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupd[2]['flag']" :alt="groupd[2]['country']" class="flag" />
                        @{{groupd[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupd[3]['flag']" :alt="groupd[3]['country']" class="flag" />
                        @{{groupd[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupd'][2][3]" v-on:keyup="orderTable('groupd')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupd'][2][4]" v-on:keyup="orderTable('groupd')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupd[4]['flag']" :alt="groupd[4]['country']" class="flag" />
                        @{{groupd[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupd[1]['flag']" :alt="groupd[1]['country']" class="flag" />
                        @{{groupd[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupd'][3][1]" v-on:keyup="orderTable('groupd')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupd'][3][3]" v-on:keyup="orderTable('groupd')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupd[3]['flag']" :alt="groupd[3]['country']" class="flag" />
                        @{{groupd[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupd[2]['flag']" :alt="groupd[2]['country']" class="flag" />
                        @{{groupd[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupd'][4][2]" v-on:keyup="orderTable('groupd')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupd'][4][4]" v-on:keyup="orderTable('groupd')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupd[4]['flag']" :alt="groupd[4]['country']" class="flag" />
                        @{{groupd[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupd[1]['flag']" :alt="groupd[1]['country']" class="flag" />
                        @{{groupd[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupd'][5][1]" v-on:keyup="orderTable('groupd')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupd'][5][4]" v-on:keyup="orderTable('groupd')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupd[4]['flag']" :alt="groupd[4]['country']" class="flag" />
                        @{{groupd[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupd[2]['flag']" :alt="groupd[2]['country']" class="flag" />
                        @{{groupd[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupd'][6][2]" v-on:keyup="orderTable('groupd')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupd'][6][3]" v-on:keyup="orderTable('groupd')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupd[3]['flag']" :alt="groupd[3]['country']" class="flag" />
                        @{{groupd[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupd">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupe">Grupo E</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupe[1]['flag']" :alt="groupe[1]['country']" class="flag" />
                        @{{groupe[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupe'][1][1]" v-on:keyup="orderTable('groupe')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupe'][1][2]" v-on:keyup="orderTable('groupe')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupe[2]['flag']" :alt="groupe[2]['country']" class="flag" />
                        @{{groupe[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupe[3]['flag']" :alt="groupe[3]['country']" class="flag" />
                        @{{groupe[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupe'][2][3]" v-on:keyup="orderTable('groupe')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupe'][2][4]" v-on:keyup="orderTable('groupe')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupe[4]['flag']" :alt="groupe[4]['country']" class="flag" />
                        @{{groupe[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupe[1]['flag']" :alt="groupe[1]['country']" class="flag" />
                        @{{groupe[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupe'][3][1]" v-on:keyup="orderTable('groupe')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupe'][3][3]" v-on:keyup="orderTable('groupe')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupe[3]['flag']" :alt="groupe[3]['country']" class="flag" />
                        @{{groupe[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupe[2]['flag']" :alt="groupe[2]['country']" class="flag" />
                        @{{groupe[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupe'][4][2]" v-on:keyup="orderTable('groupe')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupe'][4][4]" v-on:keyup="orderTable('groupe')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupe[4]['flag']" :alt="groupe[4]['country']" class="flag" />
                        @{{groupe[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupe[1]['flag']" :alt="groupe[1]['country']" class="flag" />
                        @{{groupe[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupe'][5][1]" v-on:keyup="orderTable('groupe')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupe'][5][4]" v-on:keyup="orderTable('groupe')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupe[4]['flag']" :alt="groupe[4]['country']" class="flag" />
                        @{{groupe[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupe[2]['flag']" :alt="groupe[2]['country']" class="flag" />
                        @{{groupe[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupe'][6][2]" v-on:keyup="orderTable('groupe')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupe'][6][3]" v-on:keyup="orderTable('groupe')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupe[3]['flag']" :alt="groupe[3]['country']" class="flag" />
                        @{{groupe[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupe">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupf">Grupo F</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupf[1]['flag']" :alt="groupf[1]['country']" class="flag" />
                        @{{groupf[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupf'][1][1]" v-on:keyup="orderTable('groupf')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupf'][1][2]" v-on:keyup="orderTable('groupf')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupf[2]['flag']" :alt="groupf[2]['country']" class="flag" />
                        @{{groupf[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupf[3]['flag']" :alt="groupf[3]['country']" class="flag" />
                        @{{groupf[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupf'][2][3]" v-on:keyup="orderTable('groupf')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupf'][2][4]" v-on:keyup="orderTable('groupf')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupf[4]['flag']" :alt="groupf[4]['country']" class="flag" />
                        @{{groupf[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupf[1]['flag']" :alt="groupf[1]['country']" class="flag" />
                        @{{groupf[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupf'][3][1]" v-on:keyup="orderTable('groupf')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupf'][3][3]" v-on:keyup="orderTable('groupf')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupf[3]['flag']" :alt="groupf[3]['country']" class="flag" />
                        @{{groupf[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupf[2]['flag']" :alt="groupf[2]['country']" class="flag" />
                        @{{groupf[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupf'][4][2]" v-on:keyup="orderTable('groupf')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupf'][4][4]" v-on:keyup="orderTable('groupf')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupf[4]['flag']" :alt="groupf[4]['country']" class="flag" />
                        @{{groupf[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupf[1]['flag']" :alt="groupf[1]['country']" class="flag" />
                        @{{groupf[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupf'][5][1]" v-on:keyup="orderTable('groupf')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupf'][5][4]" v-on:keyup="orderTable('groupf')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupf[4]['flag']" :alt="groupf[4]['country']" class="flag" />
                        @{{groupf[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupf[2]['flag']" :alt="groupf[2]['country']" class="flag" />
                        @{{groupf[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupf'][6][2]" v-on:keyup="orderTable('groupf')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupf'][6][3]" v-on:keyup="orderTable('groupf')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupf[3]['flag']" :alt="groupf[3]['country']" class="flag" />
                        @{{groupf[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupf">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_groupg">Grupo G</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="groupg[1]['flag']" :alt="groupg[1]['country']" class="flag" />
                        @{{groupg[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['groupg'][1][1]" v-on:keyup="orderTable('groupg')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['groupg'][1][2]" v-on:keyup="orderTable('groupg')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="groupg[2]['flag']" :alt="groupg[2]['country']" class="flag" />
                        @{{groupg[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="groupg[3]['flag']" :alt="groupg[3]['country']" class="flag" />
                        @{{groupg[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['groupg'][2][3]" v-on:keyup="orderTable('groupg')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['groupg'][2][4]" v-on:keyup="orderTable('groupg')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="groupg[4]['flag']" :alt="groupg[4]['country']" class="flag" />
                        @{{groupg[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="groupg[1]['flag']" :alt="groupg[1]['country']" class="flag" />
                        @{{groupg[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['groupg'][3][1]" v-on:keyup="orderTable('groupg')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['groupg'][3][3]" v-on:keyup="orderTable('groupg')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="groupg[3]['flag']" :alt="groupg[3]['country']" class="flag" />
                        @{{groupg[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="groupg[2]['flag']" :alt="groupg[2]['country']" class="flag" />
                        @{{groupg[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['groupg'][4][2]" v-on:keyup="orderTable('groupg')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['groupg'][4][4]" v-on:keyup="orderTable('groupg')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="groupg[4]['flag']" :alt="groupg[4]['country']" class="flag" />
                        @{{groupg[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="groupg[1]['flag']" :alt="groupg[1]['country']" class="flag" />
                        @{{groupg[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['groupg'][5][1]" v-on:keyup="orderTable('groupg')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['groupg'][5][4]" v-on:keyup="orderTable('groupg')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="groupg[4]['flag']" :alt="groupg[4]['country']" class="flag" />
                        @{{groupg[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="groupg[2]['flag']" :alt="groupg[2]['country']" class="flag" />
                        @{{groupg[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['groupg'][6][2]" v-on:keyup="orderTable('groupg')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['groupg'][6][3]" v-on:keyup="orderTable('groupg')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="groupg[3]['flag']" :alt="groupg[3]['country']" class="flag" />
                        @{{groupg[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGroupg">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr />


    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="text-center title_grouph">Grupo H</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <h4 class="text-center">Partidos</h4>
          
            <div class="row row_odd align-items-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" class="label_country" for="c11">
                        <img :src="grouph[1]['flag']" :alt="grouph[1]['country']" class="flag" />
                        @{{grouph[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c11" class="col-4" value="" v-model="fix['grouph'][1][1]" v-on:keyup="orderTable('grouph')" />
                    Vs
                    <input type="text" id="c12" class="col-4" value="" v-model="fix['grouph'][1][2]" v-on:keyup="orderTable('grouph')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c12">
                        <img :src="grouph[2]['flag']" :alt="grouph[2]['country']" class="flag" />
                        @{{grouph[2]['country']}}
                    </label>
                </div>
            </div>
    
            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c21">
                        <img :src="grouph[3]['flag']" :alt="grouph[3]['country']" class="flag" />
                        @{{grouph[3]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c21" class="col-4" value="" v-model="fix['grouph'][2][3]" v-on:keyup="orderTable('grouph')" />
                    Vs
                    <input type="text" id="c22" class="col-4" value="" v-model="fix['grouph'][2][4]" v-on:keyup="orderTable('grouph')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c22">
                        <img :src="grouph[4]['flag']" :alt="grouph[4]['country']" class="flag" />
                        @{{grouph[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c31">
                        <img :src="grouph[1]['flag']" :alt="grouph[1]['country']" class="flag" />
                        @{{grouph[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c31" class="col-4" value="" v-model="fix['grouph'][3][1]" v-on:keyup="orderTable('grouph')" />
                    Vs
                    <input type="text" id="c32" class="col-4" value="" v-model="fix['grouph'][3][3]" v-on:keyup="orderTable('grouph')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c32">
                        <img :src="grouph[3]['flag']" :alt="grouph[3]['country']" class="flag" />
                        @{{grouph[3]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c41">
                        <img :src="grouph[2]['flag']" :alt="grouph[2]['country']" class="flag" />
                        @{{grouph[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c41" class="col-4" value="" v-model="fix['grouph'][4][2]" v-on:keyup="orderTable('grouph')" />
                    Vs
                    <input type="text" id="c42" class="col-4" value="" v-model="fix['grouph'][4][4]" v-on:keyup="orderTable('grouph')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c42">
                        <img :src="grouph[4]['flag']" :alt="grouph[4]['country']" class="flag" />
                        @{{grouph[4]['country']}}
                    </label>
                </div>
            </div>  

            <div class="row row_odd align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c51">
                        <img :src="grouph[1]['flag']" :alt="grouph[1]['country']" class="flag" />
                        @{{grouph[1]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c51" class="col-4" value="" v-model="fix['grouph'][5][1]" v-on:keyup="orderTable('grouph')" />
                    Vs
                    <input type="text" id="c52" class="col-4" value="" v-model="fix['grouph'][5][4]" v-on:keyup="orderTable('grouph')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c52">
                        <img :src="grouph[4]['flag']" :alt="grouph[4]['country']" class="flag" />
                        @{{grouph[4]['country']}}
                    </label>
                </div>
            </div>

            <div class="row row_even align-items-center text-left">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c61">
                        <img :src="grouph[2]['flag']" :alt="grouph[2]['country']" class="flag" />
                        @{{grouph[2]['country']}}
                    </label>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <input type="text" id="c61" class="col-4" value="" v-model="fix['grouph'][6][2]" v-on:keyup="orderTable('grouph')" />
                    Vs
                    <input type="text" id="c62" class="col-4" value="" v-model="fix['grouph'][6][3]" v-on:keyup="orderTable('grouph')" />
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                    <label class="label_country" for="c62">
                        <img :src="grouph[3]['flag']" :alt="grouph[3]['country']" class="flag" />
                        @{{grouph[3]['country']}}
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

            <h4 class="text-center">Tabla de posiciones</h4>

            <table class="table table-sm">
                <colgroup>
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="normal" />
                    <col class="colpt" />
                </colgroup>
                <thead class="thead-dark">
                    <tr>
                        <!--th scope="col">ID</th-->
                        <th scope="col">Pais</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col">PP</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                        <th scope="col">DG</th>
                        <th scope="col">PT</th>
                </thead>
                <tbody>
                    <tr v-for="row in orderGrouph">
                        <!--th scope="row">@{{ row.id }}</th-->
                        <td><img :src="row.flag" alt="flag" class="flag" /> @{{ row.country }}</td>
                        <td>@{{ row.pj }}</td>
                        <td>@{{ row.pg }}</td>
                        <td>@{{ row.pe }}</td>
                        <td>@{{ row.pp }}</td>
                        <td>@{{ row.gf }}</td>
                        <td>@{{ row.gc }}</td>
                        <td>@{{ row.dg }}</td>
                        <td>@{{ row.pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection