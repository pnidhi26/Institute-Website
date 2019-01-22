
@extends('layout')
@section('content')
<div class="slider" id="top">


  <ul class="slides" style="height:595px;">
    <li>
      <img src="images/hall47.jpg">
      <div class="caption left-align">
        <h3>Hall of Residence IV</h3>
        <h5 class="light grey-text text-lighten-3">Welcome to Hall4.</h5>
      </div>
    </li>
    <li>
      <img src="images/hall44.jpg">
      <div class="caption left-align">
        <h3>Hall of Residence IV</h3>
        <h5 class="light grey-text text-lighten-3">Place where memories are shared.</h5>
      </div>
    </li>
    <li>
      <img src="images/hall49.jpg">
      <div class="caption left-align">
        <h3>Hall of Residence IV</h3>
        <h5 class="light grey-text text-lighten-3">A beautifull night at Hall - 4.</h5>
      </div>
    </li>
    <li>
      <img src="images/hall48.jpg">
      <div class="caption left-align">
        <h3>Hall of Residence IV</h3>
        <h5 class="light grey-text text-lighten-3">Rainy Day at Hall-4.</h5>
      </div>
    </li>
    <li>
      <img src="images/hall46.jpg">
      <div class="caption left-align">
        <h3>Hall of Residence IV</h3>
        <h5 class="light grey-text text-lighten-3">In between of Hall4 blocks</h5>
      </div>
    </li>
    <!-- <li>
      <img src="images/hall42.jpg">
      <div class="caption left-align">
        <h3>Hall of Residence IV</h3>
        <h5 class="light grey-text text-lighten-3"></h5>
      </div>
    </li> -->
  </ul>

</div>
<section class="rr" id="about">
  <div class="he">
    <h4>About Us</h4>
  </div>
  <div class="row">
    <div class="col s10 offset-s1">
      <p>IIITDM Jabalpur is a residential institute and it is compulsory for all students to stay inside the campus. At present there are three hostels, namely Hall-1, Hall-3 and Hall-4. Hall of Residence -4 is the home away home for the boys students of IIITDM, which can accommodate 552 students. There are 9 blocks (A to I) and 184 rooms available for the residents. All rooms are of three seated type and equipped with all modern residential facilities. RO-water systems, WiFi internet to all rooms, indoor and outdoor games, 24X7 medical assistance, and hot water are the few examples of the facilities available in Hall-4. Students can take food in the central mess, which is at stone’s throw distance from Hall-4. To meet inmate’s dietary requirement, Hall-4 has one canteen inside the premises that remains open till late night. To provide accommodation to the visiting parents for short duration, Hall-4 has four guest rooms with all basic facilities. The hostel has three caretakers who remain continuously present with the inmates to take care of their needs.</p>
    </div>
  </div>
</section>

<section class="service slideanim slide" id="services">

  <div class="fac">
    <h4 class="text-center slideanim">Facilities</h4>
    <p class="text-center slideanim">Hall-4 is well maintained and equipped with many facilities </p>
    <div class="row">
      <div class="col m10 offset-m1">
        <div class="row">
          <div class="col l4 col m4 col s12 serv-part wow fadeInLeft">
            <div class="row">
              <a class="modal-trigger" href="#tv">
                <div class="col s6 m6 slideanim">
                  <i class="fa fa-desktop"></i>
                </div>
              </a>
              <div id="tv" class="modal">
                <div class="modal-content">
                  <h5>TV Room</h5>
                  <p>Hall 4 has a TV Room which is the place for great entertainment where
                    you can enjoy and watch channels of your interest.During matches this place becomes hub
                    of cheering and huga amount of audience watching matches like football and cricket.</p>
                    <br><strong>Subscription: TATA Sky</strong>
                    <br>
                    <strong>Opening Timings: 11:30 A.M. - 1:30 P.M</strong>
                  </div>
                </div>
                <div class="col s6 m6 slideanim">
                  <div class="serv-info">
                    <h4>TV Room</h4>
                    <p class="serv">Tv room ,Reading room.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.1s">
              <div class="row">
                <a class="modal-trigger" href="#sports">
                  <div class="col s6 slideanim">
                    <i class="fa fa-futbol-o"></i>
                  </div>
                </a>
                <div id="sports" class="modal">
                  <div class="modal-content">
                    <h5>Sports facilities</h5>
                    <p>Hall-4 is having its own games and sports area and facilities It has both indoor and outdoor games.</p>
                    <div class="row">
                      <div class="col s6">
                        <h5><strong>Indoor Games</strong></h5>
                        <p><ul><li>Table-tenis</li><li> Chess</li><li>Carrom.</li></ul> </p>
                      </div>
                      <div class="col s6">
                        <h5><strong>Outdoor games</strong></h5>
                        <p><ul><li>Volleyball court</li><li> Basketball court</li><li>Lawn Tenis</li> <li>Football</li> <li>Cricket</li></ul></p>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="col s6 slideanim">
                  <div class="serv-info">
                    <h4>Sports</h4>
                    <p class="serv">Indoor and outdoor games.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.2s">
              <div class="row">
                <a class="modal-trigger" href="#wifi">
                  <div class="col s6 slideanim">
                    <i class="fa fa-wifi"></i>
                  </div>
                </a>
                <div id="wifi" class="modal">
                  <div class="modal-content">
                    <h5>Wifi Facility</h5>
                    <p>Hall of Residence 4 is fully equipped with wifi faciity available 24X7 hours,
                      Every block is having their own wifi routers with speed of 10mbps .</p>

                    </div>
                  </div>
                  <div class="col s6 slideanim">
                    <div class="serv-info">
                      <h4>Wifi Facility</h4>
                      <p class="serv">24x7 High speed internet access in all blocks.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.3s">
                <div class="row">
                  <a class="modal-trigger" href="#guest">
                    <div class="col s6 slideanim">
                      <i class="fa fa-users"></i>
                    </div>
                  </a>
                  <div id="guest" class="modal">
                    <div class="modal-content">
                      <h5>Guest Room</h5>
                      <p>Guest Rooms are available for the proper arrangement of guests
                        4 Guest rooms are available for the guests at very low rates
                      </p>    <br><strong>Each have following Features:</strong>
                      <p><ul><li>Well furnished</li>
                        <li>Double beds</li>
                        <li>Attached wash room</li>
                        <li>Table and chair</li>
                      </ul></p>

                      <strong>For booking you have to submit a form to the dracad  </strong><br><br>
                      <button class="btn btn-primary btn-block wow bounceInUp" data-wow-delay="0.2s" >Booking form <span class="glyphicon glyphicon-bullhorn"></span></button>

                    </div>
                  </div>
                  <div class="col s6 slideanim">
                    <div class="serv-info">
                      <h4>Guest Room</h4>
                      <p class="serv">4 Guest Rooms are available for guests.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.4s">
                <div class="row">
                  <a class="modal-trigger" href="#modal1">
                    <div class="col s6 slideanim">
                      <i class="fa fa-cutlery"></i>
                    </div>
                  </a>
                  <div id="modal1" class="modal">
                    <div class="modal-content">
                      <h5>Canteen</h5>
                      <p>The Hall 4 canteen is the place to relax after a long day of classwork/research. The canteen supplies snacks for all times whether you miss lunch or just want to munch. Drop in here whenever you want to watch a Live match and you will find fellow fans cheering your team or just to chat up with hostel mates about Cantor and Kant the world around us.</p>
                      <strong>Opening Timings: 11:30 A.M. - 1:30 P.M</strong>
                    </div>
                  </div>

                  <div class="col s6 slideanim">
                    <div class="serv-info">
                      <h4>Canteen</h4>
                      <p class="serv">A cafeteria is available for refreshments.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.5s">
                <div class="row">
                  <a class="modal-trigger" href="#medical">
                    <div class="col s6 slideanim">
                      <i class="fa fa-medkit"></i>
                    </div>
                  </a>
                  <div id="medical" class="modal">
                    <div class="modal-content">
                      <h5>Medical Faciity</h5>
                      <p>Hall of Residence 4 is have some medical facility for small purposes.<br>
                        It is available with the caretaker of hostel 24X7. There is also a primary health centre in the institute for emergency purposes. </p>
                        <strong>Ambulance PhNo:   9425805538 </strong><br>
                        <strong>Medical Staff No: 9425802566</strong>
                      </div>
                    </div>
                    <div class="col s6 slideanim">
                      <div class="serv-info">
                        <h4>Medical Facility</h4>
                        <p class="serv">24x7 Ambulance service and First Aid Facilities in caretaker office.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.5s">
                  <div class="row">
                    <a class="modal-trigger" href="#readingroom">
                      <div class="col s6 slideanim">
                        <i class="fa fa-book"></i>
                      </div>
                    </a>
                    <div id="readingroom" class="modal">
                      <div class="modal-content">
                        <h5>Reading Room</h5>
                        <p>Hall of Residence 4 is having reading room for reading newspapers, magazines and books.
                          You can also issue magazines for later reading<br>
                          We have subscribed for many magazines and newspapers. </p>
                          <div class="row">
                            <div class="col s6">
                              <h5><strong>Magazines</strong></h5>
                              <p><ul><li>India Today</li><li> Outlook</li><li>Carrer 360.</li></ul> </p>
                            </div>
                            <div class="col s6">
                              <h5><strong>Newspapers</strong></h5>
                              <p><ul><li>Hindustan Times</li><li> Hitavada</li><li>Patrika</li> <li>Dainik Bhaskar</li> <li>Indian Express</li></ul></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col s6 slideanim">
                        <div class="serv-info">
                          <h4>Reading Room</h4>
                          <p class="serv">Reading room for magazines and newspapers.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="row">
                      <a class="modal-trigger" href="#art">
                        <div class="col s6 slideanim">
                          <i class="fa fa-paint-brush"></i>
                        </div>
                      </a>
                      <div id="art" class="modal">
                        <div class="modal-content">
                          <h5>Arts Room</h5>
                          <p>Hall of Residence 4 is having arts room for the students.
                            This room is mostly occupied during sessions of Abhivyakti arts club which is centre of creativity and design . All the design and decoration of Fests and other events are made here by the harwork of students.<br>
                          </p>

                        </div>
                      </div>
                      <div class="col s6 slideanim">
                        <div class="serv-info">
                          <h4>Arts Room</h4>
                          <p class="serv">For art lovers.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col l4 col m4 col s12 serv-part wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="row">
                      <a class="modal-trigger" href="#elib">
                        <div class="col s6 slideanim">
                          <i class="fa fa-leanpub"></i>
                        </div>
                      </a>
                      <div id="elib" class="modal">
                        <div class="modal-content">
                          <h5>E-Resource library</h5>
                          <p>This is the new initiative of Hall-4 where all the resources of college and study material will be shared and downloaded here . E-library will also include the pdfs of books and any registered student of hall-4 can access these material. </p>
                          <div class="row">

                            <a class="btn btn-primary btn-block  col m5 s5" href="/resourcelist" >View Books</a>

                            <a class="btn btn-primary btn-block col m5 s5 offset-m1" href="/upload">Upload Books</a>



                          </div>
                        </div>
                      </div>
                      <div class="col s6 slideanim">
                        <div class="serv-info">
                          <h4>E-Resource library</h4>
                          <p class="serv">E-library for study resources.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        @stop
