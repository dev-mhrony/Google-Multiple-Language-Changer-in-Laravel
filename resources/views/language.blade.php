<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center"> This is a Google Multiple Languge Changer - Code Camp BD</h2>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-4"></div>
                    <div class="col-md-2"><Strong>Select Your Language</Strong></div>
                    <div class="col-md-2">
                        <select class="form-select changeLang" id="">
                            <option value="en"{{session()->get('locale') == 'en'? 'selected':''}}>English</option>
                            <option value="bn"{{session()->get('locale') == 'bn'? 'selected':''}}>Bangla</option>
                            <option value="es"{{session()->get('locale') == 'es'? 'selected':''}}>Spaine</option>
                            <option value="hi"{{session()->get('locale') == 'hi'? 'selected':''}}>Hindi</option>
                            <option value="it"{{session()->get('locale') == 'it'? 'selected':''}}>Italian</option>
                            <option value="fr"{{session()->get('locale') == 'fr'? 'selected':''}}>French</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Supported Language
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Language Name and Code</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table"> <thead> <tr> <th>Name</th> <th>Code</th> </tr> </thead> <tbody> <tr> <td>Amharic</td> <td>am</td> </tr> <tr> <td>Arabic</td> <td>ar</td> </tr> <tr> <td>Basque</td> <td>eu</td> </tr> <tr> <td>Bengali</td> <td>bn</td> </tr> <tr> <td>English (UK)</td> <td>en-GB</td> </tr> <tr> <td>Portuguese (Brazil)</td> <td>pt-BR</td> </tr> <tr> <td>Bulgarian</td> <td>bg</td> </tr> <tr> <td>Catalan</td> <td>ca</td> </tr> <tr> <td>Cherokee</td> <td>chr</td> </tr> <tr> <td>Croatian</td> <td>hr</td> </tr> <tr> <td>Czech</td> <td>cs</td> </tr> <tr> <td>Danish</td> <td>da</td> </tr> <tr> <td>Dutch</td> <td>nl</td> </tr> <tr> <td>English (US)</td> <td>en</td> </tr> <tr> <td>Estonian</td> <td>et</td> </tr> <tr> <td>Filipino</td> <td>fil</td> </tr> <tr> <td>Finnish</td> <td>fi</td> </tr> <tr> <td>French</td> <td>fr</td> </tr> <tr> <td>German</td> <td>de</td> </tr> <tr> <td>Greek</td> <td>el</td> </tr> <tr> <td>Gujarati</td> <td>gu</td> </tr> <tr> <td>Hebrew</td> <td>iw</td> </tr> <tr> <td>Hindi</td> <td>hi</td> </tr> <tr> <td>Hungarian</td> <td>hu</td> </tr> <tr> <td>Icelandic</td> <td>is</td> </tr> <tr> <td>Indonesian</td> <td>id</td> </tr> <tr> <td>Italian</td> <td>it</td> </tr> <tr> <td>Japanese</td> <td>ja</td> </tr> <tr> <td>Kannada</td> <td>kn</td> </tr> <tr> <td>Korean</td> <td>ko</td> </tr> <tr> <td>Latvian</td> <td>lv</td> </tr> <tr> <td>Lithuanian</td> <td>lt</td> </tr> <tr> <td>Malay</td> <td>ms</td> </tr> <tr> <td>Malayalam</td> <td>ml</td> </tr> <tr> <td>Marathi</td> <td>mr</td> </tr> <tr> <td>Norwegian</td> <td>no</td> </tr> <tr> <td>Polish</td> <td>pl</td> </tr> <tr> <td>Portuguese (Portugal)</td> <td>pt-PT</td> </tr> <tr> <td>Romanian</td> <td>ro</td> </tr> <tr> <td>Russian</td> <td>ru</td> </tr> <tr> <td>Serbian</td> <td>sr</td> </tr> <tr> <td>Chinese (PRC)</td> <td>zh-CN</td> </tr> <tr> <td>Slovak</td> <td>sk</td> </tr> <tr> <td>Slovenian</td> <td>sl</td> </tr> <tr> <td>Spanish</td> <td>es</td> </tr> <tr> <td>Swahili</td> <td>sw</td> </tr> <tr> <td>Swedish</td> <td>sv</td> </tr> <tr> <td>Tamil</td> <td>ta</td> </tr> <tr> <td>Telugu</td> <td>te</td> </tr> <tr> <td>Thai</td> <td>th</td> </tr> <tr> <td>Chinese (Taiwan)</td> <td>zh-TW</td> </tr> <tr> <td>Turkish</td> <td>tr</td> </tr> <tr> <td>Urdu</td> <td>ur</td> </tr> <tr> <td>Ukrainian</td> <td>uk</td> </tr> <tr> <td>Vietnamese</td> <td>vi</td> </tr> <tr> <td>Welsh</td> <td>cy</td> </tr> </tbody> </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="container m-4">
                    <div class="row">
                    <h3 style="color: rgb(78, 78, 78)"><span style="color: rgb(21, 106, 244)">{{GoogleTranslate::trans('Code Camp BD ',app()->getLocale())}} </span> {{GoogleTranslate::trans(' is an e-learning platform. Through which you can start your coding learning journey. It provides training completely free. Which will help to accelerate your learning journey. As this is a completely free education platform, why not get your digital skills today?',app()->getLocale())}}</h3>
                    <h3 style="color: rgb(78, 78, 78)">{{GoogleTranslate::trans('Don`t Forget to Subscrib Our Channel',app()->getLocale())}}</h3>
                    <div class="text-center">

                        <button type="button" class="btn btn-primary"><a style="color: white;text-decoration: none" href="https://www.youtube.com/@codecampbdofficial?sub_confirmation=1">Subscrib Now</a></button>

                        <div class="footer text-center mt-3 text-decoration-none"> Developer - <a target="_blank" href="https://www.facebook.com/dev.mhrony">MH RONY</a></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $('.changeLang').change(function(event) {
            var selectedLang = $(this).val();
            window.location.href = url + "?lang=" + selectedLang;
        });
    </script>


    </body>
</html>
