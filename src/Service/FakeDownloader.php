<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-09
 * Time: 18:49
 */

namespace App\Service;

use PhoenyxStudio\Downloader\FakeDownloader as InitialFakeDownloader;


class FakeDownloader extends InitialFakeDownloader
{
    public function download(string $url) : string
    {
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_solidarity_contribution') {
            return '<section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        <div class="fi-document-table fi-table" id="2019">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2019</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09190902-e-3052334.pdf?cloudid=spju2zkzqt2ipdjp24bc">09190902-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09190768-e-3052343.pdf?cloudid=hvle5dfbqakbqna6y0zj">09190768-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09190372-e-3052352.pdf?cloudid=o8uxsvsenqtjfibrqzni">09190372-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09190373-e-3052361.pdf?cloudid=fcxvcqnuk7eluvhwxlwh">09190373-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09190374-e-3052379.pdf?cloudid=qonuh0nya4bkcqljlmsz">09190374-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09190375-e-3052388.pdf?cloudid=lxqwwckzpbursyundsy8">09190375-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09192966-e-3055683.pdf?cloudid=phwf6du8a04ahgovyrx2">09192966-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07191275-e-3055610.pdf?cloudid=y4hqlduo1fimunoyvlxe">07191275-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07191442-e-3055619.pdf?cloudid=menahscrhhmmesmxilvd">07191442-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07192154-fr-3055628.pdf?cloudid=wtt37fr6zaptwrkzrezo">07192154-FR</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06190545-e-3052325.pdf?cloudid=xub3pxnxyxmg0hzdraak">06190545-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06191370-e-3052370.pdf?cloudid=ltt5tkdzyygmwvjp9raj">06191370-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05190499-e-3048551.pdf?cloudid=gogoen8tbuo1bkktgqml">05190499-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04191559-e-3055674.pdf?cloudid=uu9rtbmvawhymnzmjtqz">04191559-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02191577-e-3048542.pdf?cloudid=tey469uvqe2mmvcyna3c">02191577-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        <div class="fi-document-table fi-table" id="2018">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2018</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11180782-e-3048450.pdf?cloudid=er74xagvnwxi7akoawol">11180782-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11180687-e-3048486.pdf?cloudid=uqniamzddixznsee5geg">11180687-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11180688-e-3048477.pdf?cloudid=tfnen4w3l0sunq82sxey">11180688-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10182112-e-3018735.pdf?cloudid=h5hfhg3fbeeiqrbn2ccs">10182112-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10180174-e-3045981.pdf?cloudid=nypnre02i6qiahk2cgq6">10180174-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09180063-e-3017722.pdf?cloudid=gqikk9wxhze5edaxdbdp">09180063-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Aug</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180290-e-3048514.pdf?cloudid=zgq9bn4ajxgjiitznstq">08180290-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180703-e-3048468.pdf?cloudid=zq2q9ifv0n9d8izk7qws">08180703-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180223-e-3048459.pdf?cloudid=bl4uhkrj19hdwvebj4tq">08180223-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07180228-e-2999483.pdf?cloudid=lsjfb5fuvpzqpd6cgygf">07180228-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06181084-e-3048524.pdf?cloudid=le4eflai7zq0qsporyew">06181084-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06181758-e-3048505.pdf?cloudid=wsilyxlifmhdn1ntmbpg">06181758-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05182035-e-2999474.pdf?cloudid=yosm8wsv8vm7g0pjzgd5">05182035-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04181253-e-3022915.pdf?cloudid=hnxmiipiewnpx8exsfus">04181253-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04181984-e-3048496.pdf?cloudid=twe77dbqe68u5vojlytw">04181984-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03182782-fr-2986685.pdf?cloudid=upkrjkst76vqbqmvcob9">03182782-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03181069-e-2996749.pdf?cloudid=mkbvrwzkxv9pyfhbtb8g">03181069-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
       
        <div class="fi-document-table fi-table" id="2004">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2004</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/114312-503607.pdf?cloudid=frdrlyrtqoqobljj3fbh">114312</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/114363-503598.pdf?cloudid=wnilqzdwzxowbmwkacmn">114363</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/114461-503597.pdf?cloudid=azfwszncwf9ucfgbayl3">114461</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/114296-503609-x6548.pdf?cloudid=di3vyuwm3nliudd1jnv6">114296</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/114346.pdf?cloudid=vl0qnwyj0pcoqdc0s0tv">114346</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/74353-503524.pdf?cloudid=ubcabwm9gr4gcu1ywmou">74353</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/34432-503453.pdf?cloudid=v3bltd2lzhie28c1ixf7">34432</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/34368.pdf?cloudid=rbrdpy5aropywn43duyo">34368</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1432-503407.pdf?cloudid=pqwcb5qyv4a8khlwy3qq">1432</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/14187-503396.pdf?cloudid=xd6jzlbgurxfwhtevaqf">14187</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/150302vhm-503389.pdf?cloudid=opw6qa0otftt5cysokvl">14-150302vhm </a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/14187a-503392.pdf?cloudid=lez0mt2vocs4fik5ebus">14187a</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
    </div>
  </div>

      </div>
    
</section>';
        }

        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_training_compensation') {
            return '<section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
       
        <div class="fi-document-table fi-table" id="2017">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2017</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10131359-e-2924928.pdf?cloudid=tgrqrznq2mjjndhv90d1">10131359-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06171997-e-2920942.pdf?cloudid=h2lzbejnzli5lxkrzydr">06171997-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11170863-e.pdf?cloudid=cifb8irermskrdubatui">11170863-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01171762-e-2916712.pdf?cloudid=xyssfic2ukn3ned0wmlo">01171762-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09172238-e.pdf?cloudid=ojjcj1ml27ul8sgo0210">09172238-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07170454-e-2918880.pdf?cloudid=iobll4evsgwxzpphvz16">07170454-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06170701-e-2920301.pdf?cloudid=musnmq9zn40di1w5hieq">06170701-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06172217-e.pdf?cloudid=wwrapmgbyictdvheoduh">06172217-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12161854-e-2875802.pdf?cloudid=s4ij3rirxzyllu7nyifw">12161854-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03170289-e.pdf?cloudid=nmnrrlfsyy722iktyhjo">03170289-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1016809-en-2867046.pdf?cloudid=hrnmpesvhoyjn6b21ce3">1016809-EN</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02171318-e-2918871.pdf?cloudid=h4fb46as9a5wati2mkbl">02171318-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02171553-es-2922680.pdf?cloudid=kfwnm6jiviqys4vs2thh">02171553-ES</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03161349-e-2864593.pdf?cloudid=e3o7maiylysmonx5modk">03161349-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01171540-e-2916721.pdf?cloudid=wxqozxm0tlri5tf0umuf">01171540-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01171432-e-2909550.pdf?cloudid=q3scsvdknegyfl9p9pkp">01171432-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        <div class="fi-document-table fi-table" id="2016">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2016</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11152758-e-2861737.pdf?cloudid=svgdpbpzlvu3whfuvmgt">11152758-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12150733-e-2859641.pdf?cloudid=dcvjdccjzyolfsomzayg">12150733-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06161092-e-2858853.pdf?cloudid=j2avdlqgmr4l2j9k92dv">06161092-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12161273-e-2907309.pdf?cloudid=nqxg698lww5olrmqhsv8">12161273-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12161854-e-2875802-x4636.pdf?cloudid=pqo5tbj99wiwr7ojtkjr">12161854-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09151535-es-2856567.pdf?cloudid=cynkdlt3qbinzmko0gju">09151535-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11161172-e-2926034.pdf?cloudid=mhkclyqj8luisjd7ap8f">11161172-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11160926-e-2909541.pdf?cloudid=c4ljcsi8cb3lx7wqpsve">11160926-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0916702-es-2865734.pdf?cloudid=nzic01fefyi7rko3jtg9">0916702-ES</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07161423-e-2880455.pdf?cloudid=ada1l25cy75gpqaxcaps">07161423-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07161191-es-2880446.pdf?cloudid=a1nok7bdlic7hf4myikx">07161191-ES</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0615349.pdf?cloudid=szl1ldkymuodkdqdbnwf">0615349</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0515256-2793539.pdf?cloudid=qrkt6w94uyyxb8v9xc1o">0515256</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05161501-es-2858862.pdf?cloudid=n7fuprgceshmajxyx4xk">05161501-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05161306-es-2880464.pdf?cloudid=zqla4effoxgw30coyxvn">05161306-ES</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03-161111e-e-2860570.pdf?cloudid=mvuiawbiyypyfaapkwbg">03-161111e-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03161111d-e-2860561.pdf?cloudid=xpfnuj0swy3zhgiscvab">03161111d-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03161111c-e-2860552.pdf?cloudid=zzr5cwrkyyrtyi2ryavl">03161111c-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03161111b-e-2860543.pdf?cloudid=wrmfsi5kk9q7xrzmegva">03161111b-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02161450-e.pdf?cloudid=zm1evxereiakjaljie72">02161450-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0116961-e-2860514.pdf?cloudid=xafjbl8ircbcn86nlaof">0116961-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
    </div>
  </div>

      </div>
    
  </section>';
        }
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_labour_disputes') {
            return '




  <root><svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1">
    <defs>
        <symbol id="icon-triangle" viewbox="0 0 8.63 15.48" width="100%" height="100%">
    <path class="cls-1" d="M8.11,6.37,2.45.71a1.56,1.56,0,0,0-2-.48A.85.85,0,0,0,.06,1V14.6a.85.85,0,0,0,.41.73,1.56,1.56,0,0,0,2-.48L8.11,9.19A2,2,0,0,0,8.11,6.37Z" transform="translate(-0.06 -0.04)"></path>
  </symbol>
;
    </defs>
  </svg>
  <section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        
        <div class="fi-document-table fi-table" id="2015">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2015</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12150860-e-2859713.pdf?cloudid=kots81dsgq9ljyr3szfi">12150860-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12150846-e-2861654.pdf?cloudid=mq49px0pfvnwtbmvekjt">12150846-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1215614-e-2856504.pdf?cloudid=idmjvpyawzpuhzsxkgq8">1215614-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12151086-e-2861645.pdf?cloudid=tkzwix5sllfnqkq49wit">12151086-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12152980-e-2852108.pdf?cloudid=ucvoglnph0c8gr4gaty3">12152980-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12152959-2844398.pdf?cloudid=ivlahsfnemtrgtat5dfk">12152959</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10151105.pdf?cloudid=mbbctk9cgcr7ttoa1wdc">10151105</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02152436-2733769.pdf?cloudid=hpwyguactichikqitn2c">02152436</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11151085-es-2864250.pdf?cloudid=zzynvmugfr9qqnilwkll">11151085-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1115740-2770610.pdf?cloudid=vrzqdht0umbvk7fwynlp">1115740</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11150976-e-2856531.pdf?cloudid=afxluu8rtc2mqltsskmy">11150976-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11151312-e-2852081.pdf?cloudid=jl0tcd3trq6g3frn0qvx">11151312-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11150060-e-2861672.pdf?cloudid=nl1iau5k40cxgtfgqgcc">11150060-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11151603-e-2856622.pdf?cloudid=sxuckue3sertllorwafp">11151603-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1115320-es.pdf?cloudid=bgbwpyegxe1rbptat9bb">1115320-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1115472-es-2864313.pdf?cloudid=qk3eoiy3gf0ccennktaz">1115472-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11150780-e-2861663.pdf?cloudid=rgty8jzmx5zxqnxpcy6g">11150780-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/lxbrx04bqa8t7i6tymlz.pdf?cloudid=lxbrx04bqa8t7i6tymlz">11150379-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1115771-2768015.pdf?cloudid=q4ofnmb3gac9ltxjodul">1115771</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11150225-e-2860496.pdf?cloudid=w3zgaapqkv302hwswqg1">11150225-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11151065-2804506.pdf?cloudid=enoierodqbks75o9gyml">11151065</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1115979-2768007.pdf?cloudid=iz77qng9ibjr6taqwjea">1115979</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
        <div class="fi-document-table fi-table" id="2014">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2014</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              
              
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04142482-2463249.pdf?cloudid=os4fsf7c41k7h6x95g7h">04142482</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11122123-2463139.pdf?cloudid=sggja6ilzej8rstvulgy">11122123</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02141812-2459582.pdf?cloudid=qljzkcp1l3dvbuksxbzt">02141812</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11122903-2459510.pdf?cloudid=lopcqgkdoubdl4tmosnr">11122903</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1012972-2459486.pdf?cloudid=nfqb5ewlbjdvev7hng8q">1012972</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1012972-2459487.pdf?cloudid=nfqb5ewlbjdvev7hng8q">1012972</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1012990.pdf?cloudid=oxvbnurrvcmidctuqbbp">1012990</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10122684-2459450.pdf?cloudid=oxhsoq7cau9rbyppypjn">10122684</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01143219-2456636.pdf?cloudid=a44krfnqy1ryyoqckkp8">01143219</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05142986-2454119.pdf?cloudid=zq4hdcn8kjabw4tcqfxc">05142986</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0514227-2454059.pdf?cloudid=c6s84oxrrvwx0hprrxdd">0514227</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05141613-2454047.pdf?cloudid=efybzzlin0sflptjeyoi">05141613</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04142997-2453999.pdf?cloudid=oov5v3iynsuvwwwhzbd5">04142997</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03142693-2453939.pdf?cloudid=j2ehf1bmb3y89dsepg1z">03142693</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/12121346-2453769.pdf?cloudid=hf3ajgsve1fjd7xlmffk">12121346</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10131164-2453709.pdf?cloudid=pcr9o3fuvb7llabs4de5">10131164</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10142827-2821031.pdf?cloudid=z1nuiucz0zln4kmflqlp">10142827</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1014506-2519803.pdf?cloudid=m8h6hf7o8zloa18kaohs">1014506</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1014257-2674344.pdf?cloudid=olxx4i3sohqk7ctoi7z4">1014257</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10143024-2668365.pdf?cloudid=fz9btzzdupe0myp2ksti">10143024</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1014971.pdf?cloudid=dxrdkpgkebzowbn4vp87">1014971</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1014762-2664995.pdf?cloudid=ahbfkqcr3mjmeolac9tw">1014762</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10141484-2664987.pdf?cloudid=hi7ogwciovhrg3qs4gpt">10141484</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/1014814-2618848.pdf?cloudid=uycvcllycvg9dlapluup">1014814</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0314571-2438329.pdf?cloudid=q6zqrbna1v7vir5wshtr">0314571</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09141193.pdf?cloudid=gvidjhlxnq4uiigxiybx">09141193</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09143007-2567251.pdf?cloudid=ndnbn2bfmydhpejv3td3">09143007</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0914107-2519791.pdf?cloudid=ujo9ixcyhotqdg1ya8ul">0914107</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09142428-e-2848263.pdf?cloudid=nxvlizhuiugs4prxgiku">09142428-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0914523-2523365.pdf?cloudid=xqgvgympjpwqwi1jliop">0914523</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09142368.pdf?cloudid=aoanu2axujfacdvhll49">09142368</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>                                                          
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09131044-2258935.pdf?cloudid=gch05jayrfsmge92opdc">09131044</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07133268-2258891.pdf?cloudid=kpg87nekj7vzrfcfzgwe">07133268</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07133268-2258890.pdf?cloudid=dpgrvr7fcdye3lek4mix">07133268</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0813427-2258879.pdf?cloudid=wd2rstczax3nytjciu0i">0813427</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0114685-2664930.pdf?cloudid=chvf4sixzdc7vlmmezy0">0114685</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01141223.pdf?cloudid=jfzfabiszhpewl3mkmav">01141223</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01142295-2438162.pdf?cloudid=ushpxsd6heber1mclfs3">01142295</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01143003-2353652.pdf?cloudid=dnmkbldv7sboes13blmo">01143003</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01143342-2342303.pdf?cloudid=pthocxkczhpw0fkbjlrl">01143342</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01143219-2456624.pdf?cloudid=baf1txjofe1rorixpuyg">01143219</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01143001-2353645.pdf?cloudid=p6eugsjyukhsjgzkwqxo">01143001</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0114044-2438137.pdf?cloudid=fuokm8gjxcrjo2txwfnr">0114044</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01142129-2463188.pdf?cloudid=wspzf60anqeqyszp88fi">01142129</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01141052-2456648.pdf?cloudid=bvs4scc3zu4bvlph77be">01141052</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
    </div>
  </div>

      </div>
    
  </section></root>';
        }
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_overdue_payables') {
            return '




  <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1">
    <defs>
        <symbol id="icon-triangle" viewbox="0 0 8.63 15.48" width="100%" height="100%">
    <path class="cls-1" d="M8.11,6.37,2.45.71a1.56,1.56,0,0,0-2-.48A.85.85,0,0,0,.06,1V14.6a.85.85,0,0,0,.41.73,1.56,1.56,0,0,0,2-.48L8.11,9.19A2,2,0,0,0,8.11,6.37Z" transform="translate(-0.06 -0.04)"></path>
  </symbol>
;
    </defs>
  </svg>
  <section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        
        <div class="fi-document-table fi-table" id="2016">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2016</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12161632-e-2866466.pdf?cloudid=amcwqfeso7goc2ibzr2w">OP 12161632-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12162081-e-2900339.pdf?cloudid=kyyq2ognzkhy6hfkgemi">OP 12162081-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op11161475-e-2912836.pdf?cloudid=k5qlp8gwc8eiagzatf7g">OP11161475-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11161465-e-2866420.pdf?cloudid=vuy9yyk96lumw7o6jfck">OP 11161465-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11161545-e-2866411.pdf?cloudid=wnxtk6011vlji9dqd6bl">OP 11161545-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11160581-e-2900785.pdf?cloudid=xh1vyrvkzqloocksgr1a">OP 11160581-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11161635-e-2900348.pdf?cloudid=iqep1p4n9xvecm1pfh30">OP 11161635-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11161785-e-2900329.pdf?cloudid=flrreq2wqrag3e5mubdq">OP 11161785-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0716703-2846209.pdf?cloudid=bffgoejfykpc924waxxf">OP 0716703</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0616645-2846173.pdf?cloudid=ojypwu7filtxgql7bjmf">OP 0616645</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10151247-2846083.pdf?cloudid=xspot2wot0mvgejaio1l">OP 10151247</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0615478-2844619.pdf?cloudid=i9qkovsvgyrh9qptlytp">OP 0615478</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0616852-2840448.pdf?cloudid=pvqhd5k6lf9g8j5vpzqt">OP 0616852</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516490-2840169.pdf?cloudid=vrzjui6udzihq4kgdpup">OP 0516490</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516612-2840160.pdf?cloudid=yaoiukn7d2ptfxy46d7g">OP 0516612</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10161461-e-2900320.pdf?cloudid=pmtnawmi9k1yamchczvb">OP 10161461-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10161109-e-2900803.pdf?cloudid=nay6zi0zkaqaq9d4zwdz">OP 10161109-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10161107-e-2900794.pdf?cloudid=o9zitwwy8xhdytdsc1bj">OP 10161107-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10160841-e-2900357.pdf?cloudid=axkhxibltbvnifuz2wpu">OP 10160841-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10161551-es-2866607.pdf?cloudid=tav2xpvvpmidh1ab3cis">OP 10161551-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10161426-2846218.pdf?cloudid=hqpcsqzrw68amno6qgvq">OP 10161426</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09161247.pdf?cloudid=b4apmokrenmdkvdhcwyl">OP 09161247</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0916946-2844655.pdf?cloudid=qd6b0audob36r4fpv47h">OP 0916946</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0916915-2840475.pdf?cloudid=mifiu3frolvdq3owlafj">OP 0916915</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0916308-2846236.pdf?cloudid=ycr2s3aqnun4vemabvrw">OP 0916308</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09161086-2846227.pdf?cloudid=nzgif8xoekq2aeasosaq">OP 09161086</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0716699-2840511.pdf?cloudid=cv16ycozmnnx9exmsh5s">OP 0716699</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0716778-2840502.pdf?cloudid=ga1lyttnwt5pau2tuost">OP 0716778</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/vywnqxt6ipji2spbxjnq.pdf?cloudid=vywnqxt6ipji2spbxjnq">OP 0616493</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0616634-2846164.pdf?cloudid=ap2af6elmoolakxdomgd">OP 0616634</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516578-2840151.pdf?cloudid=ufvo3tjiuhkrnpnfpzy7">OP 0516578</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516571-2844673.pdf?cloudid=b6jccddz5wkcttavmj3u">OP 0516571</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516467-2840133.pdf?cloudid=fbaiantimfoi5hdk5ezq">OP 0516467</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516646-2840124.pdf?cloudid=p34gz4c0w45fhnnk9tve">OP 0516646</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0516585-2840115.pdf?cloudid=foaqpuxjtch1gxoertk7">OP 0516585</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02161765-2779679.pdf?cloudid=hbxrv6dcdcpl561uldzq">OP 02161765</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02161764-2779655.pdf?cloudid=b7ujkqgojad4ibtrhwgj">OP 02161764</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02161771-2779639.pdf?cloudid=q8agwcugeyam45oilyzq">OP 02161771</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02161733-2779631.pdf?cloudid=s4kbplntk02mtnsrczjc">OP 02161733</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-01161703-2779607.pdf?cloudid=xky0s3mowgg2fhpwnyyc">OP 01161703</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0815206-2779559.pdf?cloudid=dx9d6zktpxifgzd0ipax">OP 0815206</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0416419-2846182.pdf?cloudid=tojfx7bujyta8gqtdry2">OP 0416419</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0416328-2844682.pdf?cloudid=uzioogki2sevi5beeczj">OP 0416328</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0316228-2840644.pdf?cloudid=ktedj2tq97grqnsdwmvm">OP 0316228</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0316341-2846155.pdf?cloudid=fnhdk1jbbal3r4w1nqo7">OP 0316341</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11151578-2763927.pdf?cloudid=c6m5i5w75hphte3js4f1">OP 11151578</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11151250.pdf?cloudid=t2r2v5ja0lkqsdd9cfq1">OP 11151250</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02160007-2779647.pdf?cloudid=gqgqvzyhqp7hnwkevfpf">OP 02160007</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11151243-2756919.pdf?cloudid=ebqyhg3nlqultvbiosxp">OP 11151243</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-01161541-2779591.pdf?cloudid=mg5tepctcnfqocwrlvmq">OP 01161541</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-1501703-2779615.pdf?cloudid=ghrsax7hgue5uvbthfhs">OP 1501703</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        <div class="fi-document-table fi-table" id="2015">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2015</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12151571-2846101.pdf?cloudid=oclxubwmwzbryziypshk">OP 12151571</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12151442-2779567.pdf?cloudid=nntzait7t3poxfbhfejt">OP 12151442</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-11151441-2763919.pdf?cloudid=t5jxjpdfdvteb9oz5usn">OP 11151441</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op11151356-2763903.pdf?cloudid=vvongjsggtsqaxqhqwe0">OP11151356</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10151043-2846092.pdf?cloudid=iskvaiywopzybmsq0tiu">OP 10151043</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10151248.pdf?cloudid=qrhfvwelae476n8kclrw">OP 10151248</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10151329-2779575.pdf?cloudid=xwcxyfgh5nxl3p0ibpvd">OP 10151329</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10151049-2756895.pdf?cloudid=gownupq32f6r8c7epmiq">OP 10151049</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10151150.pdf?cloudid=r0eejgfs2buje7ytprhu">OP 10151150</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-1015914-2756927.pdf?cloudid=ufc9j5nvbdokzfwtpx7q">OP 1015914</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0915970-2756911.pdf?cloudid=y56vhrqjvdu2vlnecwkk">OP 0915970</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-0915797.pdf?cloudid=fq7knwboopuowxcqek4o">OP 0915797</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
    </div>
  </div>

      </div>
    
  </section>';

        }
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_club_vs_club_disputes') {
            return '




  <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1">
    <defs>
        <symbol id="icon-triangle" viewbox="0 0 8.63 15.48" width="100%" height="100%">
    <path class="cls-1" d="M8.11,6.37,2.45.71a1.56,1.56,0,0,0-2-.48A.85.85,0,0,0,.06,1V14.6a.85.85,0,0,0,.41.73,1.56,1.56,0,0,0,2-.48L8.11,9.19A2,2,0,0,0,8.11,6.37Z" transform="translate(-0.06 -0.04)"></path>
  </symbol>
;
    </defs>
  </svg>
  <section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        <div class="fi-document-table fi-table" id="2019">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2019</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/player-emiliano-sala.pdf?cloudid=zz1mucunt6ydvrzqrqdw">Player Emiliano Sala</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07190651-e-3057069.pdf?cloudid=wvtl4dnsoykvhl5pyawp">07190651-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07190195-e-3060142.pdf?cloudid=fwtzvowl2ah55ulqliwx">07190195-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07192352-e-3060151.pdf?cloudid=lmfddwajnrc1ccq1ibeq">07192352-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07191435-e-3060160.pdf?cloudid=ywojdjpcpqc9smuamely">07191435-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04192197-e-3051396.pdf?cloudid=qdcfwfo9igiccfxcq9fm">04192197-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01192104-e-3051379.pdf?cloudid=bkyrzfxih235xxdypnw3">01192104-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        <div class="fi-document-table fi-table" id="2018">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2018</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11180452-e-3046787.pdf?cloudid=xxe2o7t3ghwn3qyhbwln">11180452-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11181897-e-3051378.pdf?cloudid=q3sudwv29rijas5i04au">11181897-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10180549-fr-3049347.pdf?cloudid=h0zqzboypisrfearokeh">10180549-FR</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09180431-e-3016186.pdf?cloudid=cbuab1izgcvv0oq30kp2">09180431-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09180583-e-3016195.pdf?cloudid=npkjanh6mni85ibyo895">09180583-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Aug</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180387-e-2999366.pdf?cloudid=xyw1qcwuzondusvzntc6">08180387-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180386-e-2999349.pdf?cloudid=zaiyovrvsytjxb7owe85">08180386-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08181951-e-3019784.pdf?cloudid=t0kf2m3cmwgtwslatn6a">08181951-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08181953-e-3020815.pdf?cloudid=rjh0mtsqj3g3girqlv4z">08181953-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180706-e-3022888.pdf?cloudid=rjjebxxvewdgltbfht9u">08180706-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08181690-es-3047799.pdf?cloudid=m28rmvzyakzemslbz4ex">08181690-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180388-e-3018807.pdf?cloudid=uwcy9skeyincknnvwgkg">08180388-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06180832-e-3010128.pdf?cloudid=alegtgowdiflxrnavbjt">06180832-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06180108-e-3011738.pdf?cloudid=un1rmgjra2xj3lbeoquh">06180108-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06181557-e-3016177.pdf?cloudid=e90ooqmpp4ctgfi1ggbc">06181557-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06181392-e-3017170.pdf?cloudid=pmxowo1wowj35dvhmre1">06181392-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06180401-e-3017161.pdf?cloudid=zubad4bsksnlgafuzplp">06180401-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04180776-e-2969845.pdf?cloudid=csn3c7vyhvdine4dccyl">04180776-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04180657-e-2994874.pdf?cloudid=annxji45lnseruh7qstm">04180657-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03180426-e-2969827.pdf?cloudid=g8obds3zu6rvtunumua2">03180426-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03180237-e-2989047.pdf?cloudid=qfq6jgbfgtmov9z95hfa">03180237-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03181547-e.pdf?cloudid=dxs5kogjc8nep9hpirlg">03181547-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01170837-es-2926060.pdf?cloudid=xlq78u9ijcssofyvgbim">01170837-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01180112-fr-3010137.pdf?cloudid=ovfo5fphiymoor2yk1yb">01180112-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01180394-fr.pdf?cloudid=qti5kpzrjtlvkbmfnmxh">01180394-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01181784-e.pdf?cloudid=hoswu3si4dvcivav6swq">01181784-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01180558-fr.pdf?cloudid=giiihiyofnqcotozmdr9">01180558-FR</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
    </div>
  </div>

      </div>
    
  </section>';

        }
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_coach_disputes') {
            return '




  <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1">
    <defs>
        <symbol id="icon-triangle" viewbox="0 0 8.63 15.48" width="100%" height="100%">
    <path class="cls-1" d="M8.11,6.37,2.45.71a1.56,1.56,0,0,0-2-.48A.85.85,0,0,0,.06,1V14.6a.85.85,0,0,0,.41.73,1.56,1.56,0,0,0,2-.48L8.11,9.19A2,2,0,0,0,8.11,6.37Z" transform="translate(-0.06 -0.04)"></path>
  </symbol>
;
    </defs>
  </svg>
  <section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        
        <div class="fi-document-table fi-table" id="2018">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2018</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10180915-e-3022879.pdf?cloudid=of32cdbsgvpelrm4awvu">10180915-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10180848-es-3022870.pdf?cloudid=vx0y1xvwxtvumnmj85eg">10180848-ES</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Aug</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180730-e-3019785.pdf?cloudid=x0apjta6dagbb949vlh2">08180730-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180066-es-3019802.pdf?cloudid=ulxosnlzd43kgablinn1">08180066-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08180732-e-3022897.pdf?cloudid=fdpd7jlvkgdpvnufivdb">08180732-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06181948-e-2999348.pdf?cloudid=pokshs0zqwnqmixhucfy">06181948-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04180207-e-2987033.pdf?cloudid=sueqramfqhd2cfbciuep">04180207-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04181360-e-3003094.pdf?cloudid=qf7icy1j4lupxooduqxz">04181360-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04181338-e-3003103.pdf?cloudid=b0gws8tlibcvjwqcp7bo">04181338-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03181099-e-2969828.pdf?cloudid=p06tarwq5kx5gvzhmqbv">03181099-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03180367-fr-2989065.pdf?cloudid=x5hopazjctqzq02jh8mc">03180367-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03180384-fr-2989056.pdf?cloudid=uz22dr2jfksvfmboaivd">03180384-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03181204-e.pdf?cloudid=xcbwovnlwwnwi2ddpmvx">03181204-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10161743-e-2926105.pdf?cloudid=zsht480tpb1rfavybz59">10161743-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07160339-e-2926096.pdf?cloudid=nutplw3lnsnbgwclpk3v">07160339-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08170591-e-2926078.pdf?cloudid=oawf2u38cbo6zwcst7eq">08170591-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02180796-e-3003076.pdf?cloudid=c9gxwfbfheqgadr079on">02180796-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02180720-e-3003085.pdf?cloudid=nyydwwrhs3vevgvhchfr">02180720-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01180678-e-3010119.pdf?cloudid=faicvqorje2abgsokqnk">01180678-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01180797-e-3010110.pdf?cloudid=stx94stlg02j6itoq1vk">01180797-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01180875-e.pdf?cloudid=nadgrmeeafhgbixaup5d">01180875-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        <div class="fi-document-table fi-table" id="2017">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2017</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07160338-e-2925404.pdf?cloudid=tzndg6lmnaxmw4pqzbrz">07160338-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08170755-e-2922662.pdf?cloudid=jpp97nl2pxhibrnijvxp">08170755-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11171195-e-2986631.pdf?cloudid=a1a1umgjtfu7ctnl7cxw">11171195-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11170609-e.pdf?cloudid=weuamzyfkmv3iph1knwx">11170609-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09170429-e-2925378.pdf?cloudid=nvlqp4sa965kggfizc92">09170429-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09171224-e-2989038.pdf?cloudid=lccwf4o7mfbizu5izh3z">09171224-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09171754-e.pdf?cloudid=zzcp6rvxko0x7jcvhoxp">09171754-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09170145-e.pdf?cloudid=p6kslzlj1mqpw0bg40jr">09170145-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09170954-e.pdf?cloudid=lshibcl5f9x8dhmlxfis">09170954-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09170955-e.pdf?cloudid=hqsvlgggdzmmd55r4auf">09170955-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09170646-e.pdf?cloudid=ytxf5tkpcwmodbhnmzfb">09170646-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Aug</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08170003-e-2924919.pdf?cloudid=g0ijspa8yiscyiz2e3md">08170003-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/08170620-e.pdf?cloudid=hawmnflrzgegpsvucadn">08170620-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07170250-e-2920879.pdf?cloudid=f728t7faamzolhmfidlb">07170250-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07171935-fr-2922653.pdf?cloudid=zvz7mjxxxhkudyofz33v">07171935-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07170041-e-2924883.pdf?cloudid=f4yzta4bl124rfrzjeyb">07170041-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07172007-e-2924892.pdf?cloudid=o7jwtwefzvkxtvv8qumq">07172007-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07172128-e-2924901.pdf?cloudid=ptwtmdf0am3oi4jdu6ui">07172128-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07171600-e-2926609.pdf?cloudid=dgij1erkoefslvfbrnyv">07171600-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07171601-e-2926618.pdf?cloudid=sejbmqlp2xypfc8ibume">07171601-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06170714-fr-2916749.pdf?cloudid=wdqil20svtmrlazfe4x7">06170714-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06171453-fr-2920292.pdf?cloudid=ttdpki8t56xkkxarcrrl">06171453-FR</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06170362-e-2922644.pdf?cloudid=bp0cz3x0z0l6ildef7ag">06170362-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05170961-e-2916731.pdf?cloudid=n1v8lb566rdo0cbjeltl">05170961-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05170144-e-2916740.pdf?cloudid=ruvdgzqn4qauzp3xznuz">05170144-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05170836-e-2922635.pdf?cloudid=gk0rsio10xefvuxiyyof">05170836-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05170533-e-2924910.pdf?cloudid=p0nqsto6znw1z70ibgm8">05170533-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05170447-e-2908646.pdf?cloudid=fivhe04ufimk2avbdzhk">05170447-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11160711-e-2878824.pdf?cloudid=seqvjgqfkduhzpinplrm">11160711-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11160838-e-2878815.pdf?cloudid=tm5usarazgv0ir1mhf3w">11160838-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01150681-e-2877635.pdf?cloudid=kjdz9arnbmolpkcjawre">01150681-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02171831-e-2924865.pdf?cloudid=p9dmjsgjza6csfn5wsrg">02171831-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02171756-e-2924856.pdf?cloudid=pycrw4y9ialszxxxspjq">02171756-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02171755-e-2924847.pdf?cloudid=jusphbd61gneqbf8oaee">02171755-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02171754-e-2924874.pdf?cloudid=av3efyfquahkc6grwqxt">02171754-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/02170556-e.pdf?cloudid=ufky0wgl7mhwgpukymg8">02170556-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01160677-e-2865019.pdf?cloudid=ufxqh4dputcsqndszqgl">01160677-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
    </div>
  </div>

      </div>
    
  </section>';

        }
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_players_match_agents_disputes') {
            return '




  <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1">
    <defs>
        <symbol id="icon-triangle" viewbox="0 0 8.63 15.48" width="100%" height="100%">
    <path class="cls-1" d="M8.11,6.37,2.45.71a1.56,1.56,0,0,0-2-.48A.85.85,0,0,0,.06,1V14.6a.85.85,0,0,0,.41.73,1.56,1.56,0,0,0,2-.48L8.11,9.19A2,2,0,0,0,8.11,6.37Z" transform="translate(-0.06 -0.04)"></path>
  </symbol>
;
    </defs>
  </svg>
  <section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        
        <div class="fi-document-table fi-table" id="2016">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2016</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05151383-e-2852229.pdf?cloudid=rgkgcalji1tylrhranhe">05151383-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11160631-e-2908655.pdf?cloudid=ysw7gc4f1gv3ljhpth1w">11160631-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03152778-e-2846629.pdf?cloudid=ryrgnbhoxbm8hgtfounk">03152778-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03151366-e-2846620.pdf?cloudid=filylfgmmfnlc1fja3lv">03151366-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09161545-e-2916795.pdf?cloudid=hrf9rrcwv8zz7g4t02gy">09161545-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Aug</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0816738-e-2875775.pdf?cloudid=enzqmlcceafrdujzh3ju">0816738-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0816737-e-2875757.pdf?cloudid=eaasgcuzwe17wtn3peig">0816737-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0816108-e-2859767.pdf?cloudid=yvi5mk8j1orehvg7iyup">0816108-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07161607-e-2916786.pdf?cloudid=byf53oze3ezcqdsurtng">07161607-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07160676-e-2865037.pdf?cloudid=egbbjp3famjvv6lkv4sf">07160676-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/07161208-e-2878788.pdf?cloudid=bmgnfleoqdasc4agbiwv">07161208-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06160974-e-2912716.pdf?cloudid=j0iulwxgq9ztqef1ofbz">06160974-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06161776-e-2912725.pdf?cloudid=be0dackmjufvxajyutph">06161776-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06161210-e-2904082.pdf?cloudid=qtrowppuafozhb0ntsn7">06161210-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06162773-e-2897350.pdf?cloudid=t4szenn8cjbjv1bngz1t">06162773-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04161782-e-2912734.pdf?cloudid=eojliwcglo7b99ve3lck">04161782-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04161996-e-2914973.pdf?cloudid=gygvdvqp9hfbd4ripbki">04161996-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04163395-e-2914964.pdf?cloudid=tyy9ayeigkscol7aow3h">04163395-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0316307-e-2848456.pdf?cloudid=rv9gdgkdxbp0heontgmb">0316307-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0316790-e-2865608.pdf?cloudid=qearqfx8lbzlqvk2dqe5">0316790-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/01161777-e-2908637.pdf?cloudid=tfcxkokko3ctuybf3rgf">01161777-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        <div class="fi-document-table fi-table" id="2015">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2015</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Nov</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/11151786-e-2877563.pdf?cloudid=qutewxzxi0ayp1e8evvo">11151786-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/10152494-e-2852256.pdf?cloudid=qyxgydna3gfrrppfcraq">10152494-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09152345-e-2902474.pdf?cloudid=ukhnkj3g6igisv9zeaat">09152345-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09150725-e.pdf?cloudid=wyma20kvikhqwgrvbkfs">09150725-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09151001-2781995.pdf?cloudid=jhsyiymveloutov3lyys">09151001</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/09151727-e-2852247.pdf?cloudid=npyuyabndvfgpp05gs7g">09151727-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0615723-e-2866296.pdf?cloudid=xhqecrb8ucnxzkavzfom">0615723-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06153400-e-2846656.pdf?cloudid=chbio5zpsukirwhwj3nf">06153400-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0615551-2793437.pdf?cloudid=nplktokcwv5jxxu08chn">0615551</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06152944-e-2852238.pdf?cloudid=crgvz0gcvhkst4ffvypx">06152944-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05151214-e-2902427.pdf?cloudid=azyh1mmakrylsqwiu8bu">05151214-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/0515048-2779727.pdf?cloudid=clfbc6gs5ouww7errz6a">0515048</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/05151451-2793427.pdf?cloudid=jcx2gftt2mssexeb5zrw">05151451</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/06131077-2567548.pdf?cloudid=ps45h1zukxtmsnftein4">06131077</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03132255-2567401.pdf?cloudid=hkyn6gqjb7yz0jxsre8i">03132255</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/03151369-e-2846611.pdf?cloudid=qdyymckuo0snw6nlt1gi">03151369-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
    </div>
  </div>

      </div>
    
  </section>';

        }
        if ($url == 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_overdue_payables') {
            return '




  <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1">
    <defs>
        <symbol id="icon-triangle" viewbox="0 0 8.63 15.48" width="100%" height="100%">
    <path class="cls-1" d="M8.11,6.37,2.45.71a1.56,1.56,0,0,0-2-.48A.85.85,0,0,0,.06,1V14.6a.85.85,0,0,0,.41.73,1.56,1.56,0,0,0,2-.48L8.11,9.19A2,2,0,0,0,8.11,6.37Z" transform="translate(-0.06 -0.04)"></path>
  </symbol>
;
    </defs>
  </svg>
  <section class="section fi-documents-section   " >
    <div class="container-fluid">
    </div>

      <div class="container-fluid  section__body">
        

<script type=\'text/javascript\'>requirejs([\'/CompiledAssets/js/modules/carousel.js?t=563c3c85efb074e6b54a07fbea6dcfb5\']);</script>  <div class="fi-document-tables">

    <div class="fi-document-tables-navigation container-fluid">
      <div class="row">
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--left fi-document-tables-navigation__arrow--disabled ">
          <i class="fi-icon fi-icon-prev"></i>
        </div>
        <div class="col-xs-6 fi-document-tables-navigation__arrow fi-document-tables-navigation__arrow--right">
          <i class="fi-icon fi-icon-next"></i>
        </div>
      </div>
    </div>
    <div class="owl-carousel-document-tables" data-mobile="1" data-tablet="1" data-desktop="1">
        <div class="fi-document-table fi-table" id="2019">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2019</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10191352-e-3055692.pdf?cloudid=vos7zghgjbqgkqvrdxzp">OP 10191352-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09191231-e-3049807.pdf?cloudid=du7rxbrk1pccdmrqj7ax">OP 09191231-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09191345-e-3049798.pdf?cloudid=pgm6qngzyysqhimveq6g">OP 09191345-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09191000-e-3051414.pdf?cloudid=slbz5tj3lxoxopby0d58">OP 09191000-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06190705-e-3046778.pdf?cloudid=ngmae7d0ldwln3opnfbv">OP 06190705-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06190619-e-3046760.pdf?cloudid=tptpowkjr8ucd1ghwjf5">OP 06190619-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06190786-e-3046769.pdf?cloudid=s0lu1plru3dtq0rj9mej">OP 06190786-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05192502-e-3044833.pdf?cloudid=cisetjgxhkgdx1tcmwdd">OP 05192502-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05190543-e-3045882.pdf?cloudid=km23pmlacoq6yfpkhksp">OP 05190543-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05192502-e-3045891.pdf?cloudid=uhknucupqp7oa6n5l2y4">OP 05192502-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Apr</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/04190015-e-3045873.pdf?cloudid=qbzdnd1wchigyki79mkw">04190015-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Mar</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-03192548-e-3030181.pdf?cloudid=ftnoj88djo2tskbl6pyt">OP 03192548-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-03192386-e-3030190.pdf?cloudid=xdrpsas3cwwkaufqq0xw">OP 03192386-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-03192547-e-3030172.pdf?cloudid=unqppnop4027caepqtiv">OP 03192547-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-03190092-e-3030208.pdf?cloudid=dxon0u4npsquqyb9a6rv">OP 03190092-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-03190240-e-3030199.pdf?cloudid=gjml4m6vhfrwsblddnmo">OP 03190240-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02192166-e-3020825.pdf?cloudid=qfk7pfvczdnyz788bowy">OP 02192166-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
        <div class="fi-document-table fi-table" id="2017">
          <div class="fi-table-heading">
            <div class="fi-table-row">
              <div class="fi-table-head">
                <span class="fi-documents-year">2017</span>
              </div>
              <div class="fi-table-head">
              </div>
            </div>
          </div>
          <div class="fi-table-body">
              <div class="fi-table-row">
                <div class="fi-table-cell">Dec</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12171895-e.pdf?cloudid=tubwufvgwgbnddkxwdc9">OP 12171895-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12171878-e.pdf?cloudid=wc5nmrfgcvfl4a2fya50">OP 12171878-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12171821-e.pdf?cloudid=yuaqwdtlhxjkwvu5omlo">OP 12171821-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-12171781-e.pdf?cloudid=lz3h9jag098hwnvtaw41">OP 12171781-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Oct</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10170695-e.pdf?cloudid=ckaschhvmty8ga0mtwsh">OP 10170695-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10171346-e.pdf?cloudid=wkejvvflijxnmcpvxibj">OP 10171346-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10171344-e.pdf?cloudid=ommhmrus1xx4brqtv2hz">OP 10171344-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-10171347-e.pdf?cloudid=hiyrun2ftatsoxo48d1p">OP 10171347-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Sep</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09171172-e-2927352.pdf?cloudid=vtxmnhet8wajiig1agmh">OP 09171172-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-09171147-e-2927858.pdf?cloudid=u8doibufluqhvqndvhyh">OP 09171147-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Aug</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-08171014-e-2912789.pdf?cloudid=lqwmumv331b0rssjnjzr">OP 08171014-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-08171131-es-2927343.pdf?cloudid=zlcvnapxyngrefgbtugv">OP 08171131-ES</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-08171027-e.pdf?cloudid=ovauphmglszfxkk4wp74">OP 08171027-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-08171031-e.pdf?cloudid=vxbdxilm14vudwh331vq">OP 08171031-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jul</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06160622-e-2900889.pdf?cloudid=qhpvx2jt3iiwiiqedtqk">OP 06160622-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-07170484-e.pdf?cloudid=laqu7abqnnql3ohvbbyc">OP 07170484-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jun</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06170603-e.pdf?cloudid=rdww4ffsafpwjloyjhwd">OP 06170603-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06170408-e-2905656.pdf?cloudid=yiple3bklm0s3fmlsbsb">OP 06170408-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-06170427-fr-2905647.pdf?cloudid=bl8fi0cbwlvnh1oqkqjj">OP 06170427-FR</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">May</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05172185-e.pdf?cloudid=fgq90ldy3fwm3tajmpa7">OP 05172185-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05171637-e.pdf?cloudid=bfid7eyjsmhhzufymeb0">OP 05171637-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05172190-e.pdf?cloudid=gcqsptzw32a5mn6tyr0w">OP 05172190-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05170562-e.pdf?cloudid=fra92pfsqwoqpzyeobo0">OP 05170562-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-05170267-e-2899233.pdf?cloudid=uxaryiebdgwz7ozu3bsb">OP 05170267-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Feb</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op02172015-e-2877700.pdf?cloudid=ln8fmhspqyca9vafanut">OP02172015-E</a>
                          </span>
                        </div>
                      </li>
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-02170002-es-2899224.pdf?cloudid=mlqybwt4jhiu0q0laxic">OP 02170002-ES</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="fi-table-row">
                <div class="fi-table-cell">Jan</div>
                <div class="fi-table-cell">
                  <ul class="fi-document-table-list">
                      <li class="fi-document-table-list--item">
                        <div class="fi-document-table-list--item__title">
                          <span class="dcm-title">
                            <a href="https://resources.fifa.com/image/upload/op-01171700-e-2900821.pdf?cloudid=svwqvsvayup9b4rhzvk9">OP 01171700-E</a>
                          </span>
                        </div>
                      </li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
        
    </div>
  </div>

      </div>
    
  </section>';
        }
    }
}