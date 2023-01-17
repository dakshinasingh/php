    <?php
        $ch = curl_init();
        $headers=[
            "Authorization: Client-ID 2ODrBSLPw95-x3SzWsorETFcmdULqnVnxUWLfXGk0ZM"
        ];
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($ch,[
            CURLOPT_URL => "https://api.unsplash.com/photos/random",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers
        ]);
        $response=curl_exec($ch);
        $status_code=curl_getinfo($ch,CURLINFO_HTTP_CODE);
        curl_close($ch);
        echo $status_code, "\n";
        echo $response, "\n";
    ?>