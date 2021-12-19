<?php

       /*      for python only
       import requests
import os
import sys
import json
from dotenv import load_dotenv
load_dotenv()
*/




$result = shell_exec("python astra_loginUser.py");
echo $result;


?>