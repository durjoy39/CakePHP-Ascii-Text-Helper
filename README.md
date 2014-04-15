CakePHP-Ascii-Text-Helper
=========================

A CakePHP Helper to generate ascii art text from a string. Utilizes the API at http://artii.herokuapp.com/. 

#Requirements#
*PHP 4,5<br />
*HttpSocket<br />
*CakePhp 2+

#Installation#
1. Copy AsciiHelper.php to /App/View/Helper
2. Edit your /app/Controller/AppController.php

```
class AppController extends Controller {
	public $helpers = array('Ascii');
}
```

#Configuration#
Change the default font by picking one from the fonts list and setting it on line 7.
```
const default_font = 'cosmic';
```

#Example#
Draw Text with default font. 
```
echo $this->Ascii->make('Ascii Text');
```
Creates:
<pre>
  :::.     .::::::.   .,-:::::  ::::::  ::::::::::::.,::::::    .,::      .:::::::::::::
  ;;`;;   ;;;`    ` ,;;;'````'  ;;;;;;  ;;;;;;;;'''';;;;''''    `;;;,  .,;; ;;;;;;;;''''
 ,[[ '[[, '[==/[[[[,[[[         [[[[[[       [[      [[cccc       '[[,,[['       [[     
c$$$cc$$$c  '''    $$$$         $$$$$$       $$      $$""""        Y$$$P         $$     
 888   888,88b    dP`88bo,__,o, 888888       88,     888oo,__    oP"``"Yo,       88,    
 YMM   ""`  "YMmMY"   "YUMMMMMP"MMMMMM       MMM     """"YUMMM,m"       "Mm,     MMM  
 </pre> 

Draw Text with specific font. 
```
echo $this->Ascii->make('Ascii Text', 'larry3d');
```
Creates:
<pre>
 ______                              ______               __      
/\  _  \                  __  __    /\__  _\             /\ \__   
\ \ \L\ \    ____    ___ /\_\/\_\   \/_/\ \/    __   __  _\ \ ,_\  
 \ \  __ \  /',__\  /'___\/\ \/\ \     \ \ \  /'__`\/\ \/'\ \ \/  
  \ \ \/\ \/\__, `\/\ \__/\ \ \ \ \     \ \ \/\  __/\/>  </\ \ \_ 
   \ \_\ \_\/\____/\ \____\\ \_\ \_\     \ \_\ \____\/\_/\_\\ \__\
    \/_/\/_/\/___/  \/____/ \/_/\/_/      \/_/\/____/\//\/_/ \/__/
 </pre> 

Get Font List
```
echo $this->Ascii->fonts();
```

Each string will display very differently between fonts. If you wish to preview your text in all fonts, use the following function.
```
echo $this->Ascii->preview_all('Ascii Text');
```


#Change History#
CakePHP Ascii Text Helper v.1 - 2014-04-14<br />
*Initial Committ
