<html>
    <head>
        <style>
                .column {
                    float: left;
                    width: 50%;
                    padding: 10px;
                 
                }
                
                /* Clear floats after the columns */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                    
                }

                li
                {
                    list-style-type:none;
                }
        </style>
    </head>
    <body>
        <div>
            <div style="position:absolute; left:15px; line-height: 5px; text-align: center; margin-top:20px;">
                <div style="position:absolute; top:-30px;">
                    <p>Republic of the Philippines</p></br>
                    <p>City of Manila</p></br>
                    <p><u>OFFICE OF THE PUNONG BARANGAY</u></p></br>
                    <p>Barangay 378 Zone 38, District III</p>
                </div>
                <hr style="position:absolute; top:65px; left:50px; opacity:0.75; width:85%;">
            </div>
            <img src="{{ asset('img/logo.png') }}" height="120px" style="margin-top:-50px; float:left; opacity:0.5;">
            <img src="{{ asset('img/logomanila.png') }}" height="110px" style="margin-top:-50px; float:right; opacity:0.5;">
        </div>
        <div class="">
            <img src="{{ asset('img/logomanila.png') }}" height="600px" style=" z-index:-999; margin-left:-45px; margin-top:170px; opacity:0.5;">
            <div class="header" style="position:absolute; left:15px; line-height: 5px; text-align: center; margin-top:150px;">
                <h2>Certificate of Indigency</h2>
            </div>
            <div class="body" style="z-index:999;">
                <div class="content" style="position:absolute; top:-600px; margin:50px; line-height:40px;">
                    <p>To whom it may concern:</p></br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        This is to certify that {{$post->lastName}}, {{$post->firstName}} {{$post->middleName}}, of legal age presently residing at 
                        {{$post->street}} {{$post->brgy}} {{$post->city}}, is a bonafide resident of BARANGAY 378, ZONE 38, 3rd District Manila.
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if($post->gender == 1) He @else She @endif is know to be a person of good moral character and law abiding citizen.
                    </p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        For further information _____________________ belongs to the indigent families of this barangay.
                    </p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        This certification was issued upon the bearer's request for whatever legal purposes it may serve best.
                    </p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Issued on <b>{{ Carbon\Carbon::now()->toFormattedDateString()  }}</b> at Barangay 378, city of Manila, Philippines</p>
                    
                    <div class="foot2nd" style="position:absolute; top:700px; left:110px;">
                        <small>*This certification is not valid without the official seal of this barangay.</small>
                    </div>
                    <div class="footer" style="position:absolute; top:600px;">
                        {{--  <div style="float:left; line-height: 5px;">
                            <p>{{$sec->Resident->lastName}}, {{$sec->Resident->firstName}} {{$sec->Resident->middleName}}</p>
                            <p style="margin-left:50px;">{{$sec->position}}</p>
                        </div>  --}}
                        <div style="float:right; line-height: 5px;">
                            <p>{{$cman->Resident->lastName}}, {{$cman->Resident->firstName}} {{$cman->Resident->middleName}}</p>
                            <p style="margin-left:60px;">{{$cman->position}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>