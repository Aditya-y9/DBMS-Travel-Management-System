#!/bin/bash

echo "Generating Bill..."


pkgid=$1
user_id=$2
fromdate=$3
todate=$4
comment=$5
total=$6


echo "Package ID: $pkgid"
echo "User ID: $user_id"
echo "From Date: $fromdate"
echo "To Date: $todate"
echo "Comment: $comment"
echo "Total: $total"



# Call Python script
python3 generate_bill.py $pkgid $user_id $fromdate $todate $comment $total
