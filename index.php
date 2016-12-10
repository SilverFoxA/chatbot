<?
 // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "https://api.api.ai/api/query?v=20150910&query=and%20for%20tomorrow&lang=en&sessionId=acc2a252-491f-4ee5-a7fe-1120c6bbb317&timezone=2016-12-10T09:02:23+0530' -H 'Authorization:Bearer a579a670711845b6ae4d65b493526462"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      
        
        echo $output;
?>