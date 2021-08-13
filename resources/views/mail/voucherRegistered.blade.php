<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mail</title>
        
    </head>
    <body >
         
        <span style="width:100%; 
            display: block;
            padding: 30px 0;
            background-image: linear-gradient(180deg, #685bc7 4%, #685bc7 34%, rgba(255,173,0,1) 34%, rgba(255,173,0,1) 69%, rgba(70,175,224,1) 69%, rgba(64,182,230,1) 100%);
            font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'
            "
            >
                <span style="width: 80%;
                    display: block;
                    margin: 0px auto;
                    /* border : 1px solid red; */
                    ">
                    <span style="
                        width: 100%;
                        display:block;
                        padding: 10px 10px;
                        border-radius :10px;
                        background: rgba(255, 255, 255, 0.75);
                        backdrop-filter: blur(50px);
                        border: 1px solid rgba(255, 255, 255, 0.2);
                        box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
                        ">
                        <span style="display: block;
                            margin: 10px 0px;
                            font-size:calc(1em + 1vw);
                            text-align: center;
                            font-weight:bold;
                            "><span style="display: inline-block;
                                width:unset;
                                margin: 5px auto;
                                padding: 2px 30px;
                                color: #544979;;
                                border-radius: 8px;
                                background: rgba(0, 0, 0, 0.05);
                                ">{{$content->clientProgram->client->fullinfo}}</span>
                        </span>
                        <span style="display: block;
                            margin: 10px auto;
                            font-size: calc(1em + 1vw);
                            text-align: center;
                            font-weight:bold;

                            "><span style="display: inline-block;
                                width:unset;
                                margin: 5px auto;
                                padding: 2px 30px;
                                color: #544979;
                                border-radius: 8px;
                                background: rgba(0, 0, 0, 0.05);"">VOUCHER : {{$content->code ? $content->code : 'yape'}}</span>
                        </span>
                        <span style="display: block;
                            margin: 10px 0px;
                            font-size:calc(1em + 1vw);
                            text-align: center;
                            font-weight:bold;
                            "><span style="display: inline-block;
                                width:unset;
                                margin: 5px auto;
                                padding: 2px 30px;
                                color: #544979;
                                border-radius: 8px;
                                background: rgba(0, 0, 0, 0.05);"">PROGRAMA : {{$content->clientProgram->program->name}}</span>
                        </span>

                        <span style="display: block;
                            margin: 10px 0px;
                            font-size: calc(1em + 1vw);
                            text-align: center;
                            font-weight:bold;
                            "><span style="display: inline-block;
                                width:unset;
                                margin: 5px auto;
                                padding: 2px 30px;
                                color: #544979;
                                border-radius: 8px;
                                background: rgba(0, 0, 0, 0.05);"">{{$content->name}}</span>
                        </span>



                        <span style="display: block;
                            justify-content: center;
                            width: 80%;
                            margin: 30px auto;
                            font-size:2vw;
                            text-align: center;
                            font-weight:bold;
                            ">
                            <img src="{{asset("storage/{$content->image}")}}" width="100%"
                            {{-- <img src="https://picsum.photos/480/516" width="100%" --}}
                                style="display: block;
                                border-radius: 10px;
                                box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.35);
                            ">
                            
                             <a href="{{config('app.frontend')}}/gestion-aplicantes/detalles-aplicante/{{$content->clientProgram->client->id}}" 
                            {{-- <a href="http://localhost:8080/gestion-aplicantes/detalles-aplicante/{{$content->client_program_id}}"  --}}
                                target="_blank"
                                style="display: inline-block;
                                width:unset;
                                margin: 30px auto 0px;
                                padding: 5px 30px;
                                background-color:  #685bc7;
                                border-radius: 10px;
                                color: white;
                                text-decoration: none;
                                "
                                >VER DETALLES
                            </a>
                        </span>
                        
                    </span>
                </span>
        </span>
      
    </body>
</html>
