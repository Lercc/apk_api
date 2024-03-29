<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>mail</title>
        
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#fafafc;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#fafafc;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
              <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                <img src="{{asset('img/imagotipo-w&t-524x170.png')}}" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;">
              </td>
            </tr>

            <tr>
              <td style="padding:30px;background-color:#ffffff;text-align:center">
                <h1 style="text-align:center;margin-top:10px;color:#685bc7;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">
                    Notificaci贸n de posibles
                    <br>
                    Voucher Similares
                </h1>
                <span>
                    <span style="color:#9eb4d0">
                      <span>{{ $currentVoucher->created_at }}</span>
                    </span>
                </span>
              </td>
            </tr>
           
            <tr>
              <td style="padding:15px;background-color:#ffffff;text-align:center">
                <span>
                    <span style="color:#9eb4d0">
                    <span>馃憞 Voucher registrado con c贸digo: <span style="color:#685bc7">{{$currentVoucher->code}}</span> 馃憞</span>
                    </span>
                </span>
              </td>
            </tr>

            <tr style="">
                <td style="padding:5px;background-color:#ffffff;background-image:url({{asset('img/favicon.png')}});background-size:30%;background-repeat:no-repeat;background-position:center;text-align:center;border:1px solid #685bc7; border-bottom:none">
                    <table style="margin-bottom:15px;margin-top:15px;font-size:0.913em;width:100%;font-weight:bolder;color:#7b8ea7">
                        <tbody>
                        
                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    Participante
                                </td>
                                <td align="center" style="vertical-align:top">:</td>
                                <td >
                                    {{ $currentVoucher->clientProgram->client->name  }}
                                    <br>
                                    {{ $currentVoucher->clientProgram->client->surnames  }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    DNI
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{ $currentVoucher->clientProgram->client->dni }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    Programa
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{ $currentVoucher->clientProgram->program->name }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    Concepto
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{ $currentVoucher->name }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td  align="center" style="vertical-align:top;width:49.5%">
                                    Voucher
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{$currentVoucher->code ? $currentVoucher->code : 'yape'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>   

            <tr>
              <td style="padding:5px 30px 5px 30px;text-align:center;font-size:24px;font-weight:bold;background-color:#ffffff;border:1px solid #685bc7; border-bottom:none;border-top:none">
                <img src="{{asset("storage/{$currentVoucher->image}")}}" width="450" alt="Logo" style="width:90%;max-width:450px;height:auto;border:none;text-decoration:none;color:#ffffff;border:1px solid rgba(201,201,207,.35);">
              </td>
            </tr>

            <tr>
              <td style="padding:10px 30px 10px 30px;text-align:center;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);border:1px solid #685bc7; border-top:none;margin-bottom:30px;display:block">
                <!--[if mso]>
                <table role="presentation" width="100%">
                <tr>
                <td style="width:145px;" align="left" valign="top">
                <![endif]-->
                <!--[if mso]>
                </td>
                <td style="width:395px;padding-bottom:20px;" valign="top">
                <![endif]-->
                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                  <p style="margin:0;"><a href="{{config('app.frontend')}}/gestion-aplicantes/detalles-aplicante/{{$currentVoucher->clientProgram->client->id}}" style="background: #685bc7; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#685bc7"><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]--><span style="mso-text-raise:10pt;font-weight:bold;">ver detalles</span><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]--></a></p>
                </div>
                <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
              </td>
            </tr>

            <tr>
              <td style="padding:30px;background-color:#ffffff;text-align:center">
                <span>
                    <span style="color:#9eb4d0">
                      <span>馃憞 Vouchers encontrados con c贸digo <span style="color:#685bc7">{{$currentVoucher->code}}</span> similar 馃憞</span>
                    </span>
                </span>
              </td>
            </tr>

            @foreach($vouchers as $equalVoucher)
             @if($equalVoucher->id !== $currentVoucher->id)
              <!-- {{ ((int)(ltrim(rtrim($currentVoucher->code, '0'), '0')) / (int)(ltrim(rtrim($equalVoucher->code, '0'), '0'))) === 1  }} -->
              <tr style="">
                <td style="padding:5px;background-color:#ffffff;background-image:url({{asset('img/favicon.png')}});background-size:30%;background-repeat:no-repeat;background-position:center;text-align:center;border:1px solid #9eb4d0; border-bottom:none">
                    <table style="margin-bottom:15px;margin-top:15px;font-size:0.913em;width:100%;font-weight:bolder;color:#7b8ea7">
                        <tbody>
                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    Participante
                                </td>
                                <td align="center" style="vertical-align:top">:</td>
                                <td >
                                    {{ $equalVoucher->clientProgram->client->name  }}
                                    <br>
                                    {{ $equalVoucher->clientProgram->client->surnames  }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    DNI
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{ $equalVoucher->clientProgram->client->dni }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    Programa
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{ $equalVoucher->clientProgram->program->name }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td align="center" style="vertical-align:top;width:49.5%">
                                    Concepto
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{ $equalVoucher->name }}
                                </td>
                            </tr>

                            <tr style="padding-bottom:10px;">
                                <td  align="center" style="vertical-align:top;width:49.5%">
                                    Voucher
                                </td>
                                <td align="center">:</td>
                                <td>
                                    {{$equalVoucher->code ? $equalVoucher->code : 'yape'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>   

            <tr>
              <td style="padding:5px 30px 5px 30px;text-align:center;font-size:24px;font-weight:bold;background-color:#ffffff;border:1px solid #9eb4d0; border-bottom:none;border-top:none">
                <img src="{{asset("storage/{$equalVoucher->image}")}}" width="450" alt="Logo" style="width:90%;max-width:450px;height:auto;border:none;text-decoration:none;color:#ffffff;border:1px solid rgba(201,201,207,.35);">
              </td>
            </tr>

            <tr>
              <td style="padding:10px 30px 10px 30px;text-align:center;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);border:1px solid #9eb4d0; border-top:none;margin-bottom:30px;display:block">
                <!--[if mso]>
                <table role="presentation" width="100%">
                <tr>
                <td style="width:145px;" align="left" valign="top">
                <![endif]-->
                <!--[if mso]>
                </td>
                <td style="width:395px;padding-bottom:20px;" valign="top">
                <![endif]-->
                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                  <p style="margin:0;"><a href="{{config('app.frontend')}}/gestion-aplicantes/detalles-aplicante/{{$equalVoucher->clientProgram->client->id}}" style="background: #685bc7; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#685bc7"><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]--><span style="mso-text-raise:10pt;font-weight:bold;">ver detalles</span><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]--></a></p>
                </div>
                <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
              </td>
            </tr>
             @endif
            @endforeach


          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
    
    <table style="width:100%;border:none;border-spacing:0;">
        <tr>
          <td align="center" style="font-weight:bolder;font-family: 'Poppins', sans-serif;font-size:14px;line-height:18px;text-align:center;display:inline-block;width:100%;opacity:.60;margin-bottom:30px">
            <span>Developed by <a href="https://github.com/lercc"  target="_blanck" style="color:#253a78;text-decoration:none;font-weight:bolder;font-size:16px">lercc</span></a> &copy;{{date("Y")}} 
          </td>
        </tr>
    </table>
    
  </div>
</body>
</html>