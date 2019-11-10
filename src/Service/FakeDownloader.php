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
    
  </section>

';
    }
}