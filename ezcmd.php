<?php
/*
 _____     _____           _     _   _ _  __
| ____|___|_   _|__   ___ | |___| | | | |/ /
|  _| |_  / | |/ _ \ / _ \| / __| | | | ' / 
| |___ / /  | | (_) | (_) | \__ \ |_| | . \ 
|_____/___| |_|\___/ \___/|_|___/\___/|_|\_\
Copyright (c) 2014, EzToolsUK
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.
    * Neither the name of the EzToolsUK nor the
      names of its contributors may be used to endorse or promote products
      derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL EzToolsUK BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

// Master Config

// Version ( DO NOT EDIT THIS, THIS IS NOT FOR YOU TO EDIT, THIS IS THE EZCOMMAND LINE)
$version="99";

// FILE DIRECTIONS ( DO NOT EDIT THIS, THIS IS NOT FOR YOU TO EDIT, THIS IS THE EZCOMMAND LINE)
$vcheck="https://raw.githubusercontent.com/EzToolsUK/EzTracker/master/binthis/ver.txt";

// Define some Global Variables.

$versionfs= file_get_contents($vcheck);
echo $versionfs;

?>