<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="HandheldFriendly" content="True">
       <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
       <meta name="apple-touch-fullscreen" content="YES">
    </head>
    <body style="font-family:'Arial',sans-serif; font-size: 11.0pt;">
        <table cellspacing="0" cellpadding="0" align="center" style="background:white;border:dotted #cccccc 1.0pt; padding:5pt;">
            <tbody>
                <tr>
                    <td style="padding:0; border:none;">
                        <img height="90" width="160" border="0" src="https://deploy.home.pl/ticketsale/public/code/15_FFK_LOGO_czerwony.png"/>
                    </td>
                </tr>                
                <tr>
                    <td style="padding:0 0 5pt 0; border:none; font-size: 11.0pt; font: 11.0pt;">Bilety do odbioru w kasie, do pół godziny przed projekcją (w Teatrze Korez bezpośrednio przed projekcją).</td>
                </tr>
                <tr>
                    <td style="padding:5pt 0 5pt 0; border:none;">
                        <div width="132" style="display: inline-block; width: 132px;">
                            <img height="132" width="132" border="0" src="images/qr132.png">   
                        </div>
                        <div style="display: inline-block; min-width: 200px; max-width: 400px; vertical-align: top; padding: 5pt 0;">Rezerwacja nr '.$qrcode.'<br/>Jeśli nie widzisz obrazka kodu QR - użyj opcji "Wyświetl obrazy", bądź pobierz swoją rezerwację w formie załącznika do tej wiadomości</div>                                                                                 
                    </td>                    
                </tr>
                <tr>
                    <td style="padding:5pt 0 5pt 0; border:none; font-size:13.0pt;" >
                        Imie Nazwisko<br/>email
                    </td>
                </tr>
                <tr>
                    <td style="padding:5pt 0 5pt 0; border:none;" >Ta rezerwacja obejmuje nastepujace wydarzenia:</td>
                </tr>
                <tr>
                    <td style="padding:5pt 0; border:none;">
                        <div><b>'.$event.'</b></div>
                        <div>'.$date.' | '.$location.'</div>
                        <div>'.$ticket.' | '.$location.' x '.$count.' | '.($price*$count).' zł</div>
                    </td>
                </tr>
                <tr>
                    <td style="padding:5pt 0 0 0; border:0;">Suma: '.$suma.' zł</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>