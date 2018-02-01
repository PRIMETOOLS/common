#!/bin/bash/

dataLog='[name = '$1']';
d=`date`;
echo $dataLog'{time = '$d'}' >> ../logs/_data.log;