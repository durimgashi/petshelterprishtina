<?php
include 'header.php';
?>
<!DOCTYPE html>
<html manifest="petshelter.appcache">

<head>
	<title>PetShelterPrishtina</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/navBar.css">

    <link rel="stylesheet" href="css/apply.css">
	<link rel="icon" href="images/logo.png">
	<script src="javascript/jquery-3.2.1.min.js"></script>
	<script src="javascript/navButtons.js" type="text/javascript"></script>
	<meta charset="utf-8">

</head>

<body style="background-image: url(images/background-img2.jpg)">
	<!-- Header-->
	
    
    <script>
        /*$(document).ready(function() {

            $("#btn").click(function() {
                $("ol").append("<li><input class=\"items\" type=\"text\"></li>");
            });

            $("#btn2").click(function() {
                $("div").remove("#remove");
            });

        });*/

    </script>
    <!-- Adoption form-->
    <div>
        <div>
            <form method="post" action="" autocomplete="on" onsubmit="return validateForm()">



                <table class="t-form" align="center" cellpadding="0" cellspaceing="5" border="0">

                    <!--Pet info-->

                    <tr>

                        <td class="section-name" colspan="2">
                            PET ADOPTION INFO</td>
                    </tr>


                    <tr>
                        <td class="td-form-left"> Dog or Cat's Name: </td>
                        <td class="td-form-right">

                            <input name="PetName" type="list" list="names" size="40" autofocus>

                            <datalist id="names">
								<option value="Loki"></option>
								<option value="Thor"></option>
								<option value="Milo"></option>
								<option value="Lulu"></option>
								<option value="Lola and Lily"></option>
								<option value="Zazu"></option>
							</datalist>

                        </td>
                    </tr>

                    <section>
                        <!-- Applicant info -->
                        <tr>
                            <td class="section-name	" colspan="2">
                                <br>
                                <br>
                                <br> APPLICANT INFO
                                <br> </td>
                        </tr>

                        <!--   applicant name   -->
                        <tr>
                            <td class="td-form-left"> Applicant Name: </td>
                            <td class="td-form-right">
                                <input name="Name" type="text" size="40"> </td>
                        </tr>

                        <!--  address  -->
                        <tr>
                            <td class="td-form-left">Address: </td>
                            <td class="td-form-right">
                                <input name="Address" type="text" size="40"> </td>
                        </tr>


                        <!-- *****  city  ***** -->
                        <tr>
                            <td class="td-form-left"> City: </td>
                            <td class="td-form-right">
                                <input name="City" type="text" size="40"> </td>
                        </tr>


                        <!-- *****  home phone  ***** -->
                        <tr>
                            <td class="td-form-left"> Home Phone: </td>
                            <td class="td-form-right">
                                <input name="HomePhone" type="text" size="12"> </td>
                        </tr>


                        <!-- *****  cell phone  ***** -->
                        <tr>
                            <td class="td-form-left"> Cell Phone: </td>
                            <td class="td-form-right">
                                <input name="CellPhone" type="text" size="12" pattern="\(\d{3}\)+ \d{2}+ \d{3}-\{3}" title="###/## ### ###"> </td>
                        </tr>


                        <!-- *****  email  ***** -->
                        <tr>
                            <td class="td-form-left"> Email: </td>
                            <td class="td-form-right">
                                <input name="Email" type="text" size="40"> </td>
                        </tr>

                    </section>
                    <section>

                        <!-- *****  Additional info  ***** -->

                        <tr>
                            <td class="section-name" colspan="2">
                                <br> ADDITIONAL INFO
                                <br>
                            </td>
                        </tr>

                        <!-- *****  employment***** -->
                        <tr>
                            <td class="td-form-left"> Place of Employment: </td>
                            <td class="td-form-right">
                                <input name="PlaceOfEmployment" type="text" size="40"> </td>
                        </tr>


                        <!-- *****  hours pet alone ***** -->
                        <tr>
                            <td class="td-form-left"> How many hours a day do you work? </td>
                            <td class="td-form-right">
                                <input id="hoursOfWork" name="HoursWorkedDaily" type="text" size="4" onblur="inputError()" value="10"> </td>
                        </tr>

                        <!-- *****  hours pet alone ***** -->
                        <tr>
                            <td class="td-form-left"> How much time will the animal be left alone? </td>
                            <td class="td-form-right">
                                <input name="HoursPetAlone" type="text" size="4"> </td>
                        </tr>

                        <!-- *****  crate ***** -->
                        <tr>
                            <td class="td-form-left"> If dog, are you planning on crate training? </td>
                            <td class="td-form-right">
                                <input type="radio" name="CrateTraining" value="Yes"> Yes &nbsp;
                                <input type="radio" name="CrateTraining" value="No"> No
                                <br> </td>
                        </tr>

                        <!-- *****  pet at night ***** -->
                        <tr>
                            <td class="td-form-left"> Where will the dog/cat be kept at night? </td>
                            <td class="td-form-right">
                                <input name="PetAtNight" type="text" size="40"> </td>
                        </tr>

                        <!-- *****  pet during day***** -->
                        <tr>
                            <td class="td-form-left"> During the day? </td>
                            <td class="td-form-right">
                                <input name="PetDuringDay" type="text" size="40"> </td>
                        </tr>

                        <!-- *****   allergies  ***** -->
                        <tr>
                            <td class="td-form-left"> Does anyone in your home have dog or cat allergies? </td>
                            <td class="td-form-right">
                                <input type="radio" name="Allergies" value="Yes"> Yes &nbsp;
                                <input type="radio" name="Allergies" value="No"> No
                                <br>
                            </td>
                        </tr>

                        <!-- *****   other pets  ***** -->
                        <tr>
                            <td class="td-form-left"> Do you have any other pets? </td>
                            <td class="td-form-right">
                                <input type="radio" name="OtherPets" value="Yes"> Yes &nbsp;
                                <input type="radio" name="OtherPets" value="No"> No
                                <br>
                            </td>
                        </tr>


                        <tr>
                            <td class="td-form-full" colspan="2">
                                <p>Why did you choose this pet and how will you provide a good home? </p>
                                <br>
                                <textarea name="ReasonForChoosingThisPet" rows="3" cols="65" wrap> </textarea>
                            </td>
                        </tr>


                        <!--  *********  When Will You Adopt This Pet  ************* -->
                        <tr>
                            <td class="td-form-full" colspan="2">
                                <p>When are you prepared to adopt the dog/cat you are applying for?</p>
                                <input type="date" name="WhenWillYouAdoptThisPet" value="2017-12-10">
                                <!--<textarea name="WhenWillYouAdoptThisPet" rows="3" cols="65" wrap> </textarea> -->
                            </td>
                        </tr>

                        <!--  Prior Experiences with pets -->
                        <tr>
                            <td class="td-form-full" colspan="2">
                                <p>Do you have any prior experience with dogs/cats?</p>
                                <br>
                                <textarea name="PriorExperienceWithDogsCats" rows="3" cols="65" wrap> </textarea>
                            </td>
                        </tr>


                        <tr>
                            <td class="td-form-full" colspan="2">
                                <p>What problems would cause you to have to return this pet? </p>
                                <br>
                                <textarea name="ReasonToReturnPet" rows="3" cols="65" wrap> </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td class="td-form-full" colspan="2">
                                <p>Have you ever surrendered a pet to a shelter/pound? Please explain.</p>
                                <br>
                                <textarea name="PreviousSurrenderExplanation" rows="3" cols="65" wrap> </textarea>
                            </td>
                        </tr>
                    </section>

                    <!-- things	you like about pets-->
                    <tr>
                       
                    </tr>
                    <section>
                        <!-- *****  YOUR HOME  ***** -->
                        <tr>
                            <td class="section-name" colspan="2">
                                <br>
                                <br> YOUR HOME </td>
                        </tr>
                        <!-- *****  home ***** -->
                        <tr>
                            <td class="td-form-left" valign="top"> Your Home: </td>
                            <td class="td-form-right">
                                <input type="radio" name="Home" value="Own"> Own
                                <br>
                                <input type="radio" name="Home" value="Rent"> Rent
                                <br>
                            </td>
                        </tr>
                        <!-- ***** home ***** -->
                        <tr>
                            <td class="td-form-left" valign="top"> Home Type: </td>
                            <td class="td-form-right">
                                <input type="radio" name="HomeType" value="House"> House
                                <br>
                                <input type="radio" name="HomeType" value="Condo"> Condo
                                <br>
                                <input type="radio" name="HomeType" value="Apartment"> Apartment
                                <br>
                            </td>
                        </tr>

                        <!-- *****  home ***** -->
                        <tr>
                            <td class="td-form-left" valign="top">Home Location: </td>
                            <td class="td-form-right">
                                <input type="radio" name="HomeLocation" value="City"> City
                                <br>
                                <input type="radio" name="HomeLocation" value="Suburban"> Suburban
                                <br>
                                <input type="radio" name="HomeLocation" value="Rural"> Rural
                                <br>
                            </td>
                        </tr>

                        <!-- *****  home ***** -->
                        <tr>
                            <td class="td-form-left"> RENTERS: Do you have permission from your landlord for a pet? </td>
                            <td class="td-form-right">
                                <input type="radio" name="LandlordPermissionForPet" value="Yes"> Yes &nbsp;
                                <input type="radio" name="LandlordPermissionForPet" value="No"> No
                                <br />
                            </td>
                        </tr>

                        <!-- *****  home ***** -->
                        <tr>
                            <td class="td-form-left"> CONDO OWNERS: Does your condo association allow pets? </td>
                            <td class="td-form-right" valign="top">
                                <input type="radio" name="CondoAssnAllowsPets" value="Yes"> Yes &nbsp;
                                <input type="radio" name="CondoAssnAllowsPets" value="No"> No
                                <br />
                                <br>
                            </td>
                        </tr>

                        <!-- *****  yard ***** -->
                        <tr>
                            <td class="td-form-left"> Do you have a yard? </td>
                            <td class="td-form-right" valign="top">
                                <input type="radio" name="Yard" value="Yes"> Yes &nbsp;
                                <input type="radio" name="Yard" value="No"> No
                                <br> </td>
                        </tr>

                        <!-- *****  home ***** -->
                        <tr>
                            <td class="td-form-left"> Is it fenced? </td>
                            <td class="td-form-right" valign="top">
                                <input type="radio" name="YardFenced" value="Yes"> Yes &nbsp;
                                <input type="radio" name="YardFenced" value="No"> No
                                <br> </td>
                        </tr>


                        <!-- *****  landlord/condo  ***** -->
                        <tr>
                            <td class="td-form-left"> Landlord/condo association’s phone number: </td>
                            <td class="td-form-right">
                                <input name="LandlordCondoPhone" type="text" size="12"> </td>
                        </tr>

                        <!-- *****  home ***** -->
                        <tr>
                            <td class="td-form-left"> How long at this residence? </td>
                            <td class="td-form-right">
                                <input name="LengthTimeResidence" type="text" size="12"> </td>
                        </tr>

                        <!-- *****  animal care ***** -->
                        <tr>
                            <td class="td-form-left"> Who will be providing the majority of the care for this animal? </td>
                            <td class="td-form-right">
                                <input name="WhoWillCareForPet" type="text" size="20"> </td>
                        </tr>

                        <!-- *****  vacation ***** -->
                        <tr>
                            <td class="td-form-left"> Where will the animal stay while you are on vacation? </td>
                            <td class="td-form-right">
                                <input name="PetCareDuringVacation" type="text" size="20"> </td>
                        </tr>

                        <!-- *****  hear about PSP  ***** -->
                        <tr>
                            <td class="td-form-left" valign="top"> How did you hear about <abbr title="Pet Shelter Prishtina">PSP</abbr> ? </td>
                            <td class="td-form-right">
                                <select name="HeardAboutOscarFrom">
									<option value="Friend">Friend</option>
									<option value="Newspaper">Newspaper</option>
									<option value="Phonebook">Phone Book</option>
									<option value="Veterinarian">Veterinarian</option>
									<option value="AdoptAPet">AdoptAPet</option>
									<option value="PetFinder">PetFinder</option>
									<option value="Volunteer">Volunteer</option>
									<option value="SearchEngine">Search Engine</option>
									<option value="Other">Other</option>
								</select>
                            </td>
                        </tr>
                    </section>

                    <section>

                        <tr>
                            <td align="right">
                                <input class="button" type="submit" value="Submit">
                            </td>
                            <td>
                                <input class="button" type="reset" value="Reset" formtarget="_blank">
                            </td>

                        </tr>
                    </section>
                </table>

            </form>

        </div>
    </div>
    <!-- Email advices-->
    
    <br/>
    <br/>

    <!-- output -->


    <br>
    <br>
    <br>

    <!-- Footer-->
    <footer id="footer">

        <!--Back To Top-->
        <div>
            <a href="#header" alt="Back to top" title="Back to top!">
				<img id="back-to-top-img" src="images/footer/back-to-top2.png">
			</a>
        </div>
        <!--Contacts-->
        <div>
            <ul id="contacts">
                <li class="contacts">
                    <a href="mailto: arberim.sinani@studentet.uni-pr.edu">
						<img height="40px" src="images/footer/email-logo.png">
					</a>
                </li>
                <li class="contacts">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">
						<img height="40px" src="images/footer/facebook.png">
					</a>
                </li>
                <li class="contacts">
                    <a href="https://www.instagram.com/" target="_blank">
						<img height="40px" src="images/footer/instagram.png">
					</a>
                </li>
                <li class="contacts">
                    <a href="https://www.twitter.com/" target="_blank">
						<img height="40px" src="images/footer/twitter.png">
					</a>
                </li>
            </ul>
        </div>
        <p>&copy; <em>Prishtina Pet Shelter ALL RIGHTS RESERVED</em></p>
    </footer>
</body>

</html>
