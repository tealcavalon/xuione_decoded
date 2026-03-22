<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?172                 ?0                  	;0	>>172
1   6    ECHO/40                   ?0        1:'														</select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="limit_requests">Rate Limit - Per Second <i title="Limit requests per second. This can be enabled if your server can\'t keep up with the incoming requests. Set to 0 to disable." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="limit_requests" name="limit_requests" value="' ?0                  	;0
2   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'htmlspecialchars'	;1
3   7    FETCH_DIM_FUNC_ARG/93     $28=      16?0                 4:'limit_requests'  	;1
4   7    SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
5   7    DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
6   7    ECHO/40                   ?0        $29                  ?0                  	;0
7   8    ECHO/40                   ?0        5:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-4 col-form-label" for="limit_burst">Rate Limit - Burst Queue <i title="When the request limit is reached, excess requests will be dropped by default. You can push these requests into a queue which will be fulfilled in order rather than concurrently. This will help ease the flow of traffic and make sure service isn\'t disrupted by the rate limiting." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="limit_burst" name="limit_burst" value="' ?0                  	;0
8   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'htmlspecialchars'	;1
9   9    FETCH_DIM_FUNC_ARG/93     $30=      16?0                 8:'limit_burst'     	;1
10  9    SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
11  9    DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
12  9    ECHO/40                   ?0        $31                  ?0                  	;0
13  10   GOTO/253                  ?0        ?242                 ?9                  	;0
14  13   ECHO/40                   ?0        10:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                ' ?0                  	;0
15  14   JMPZ/43                   ?0        16?1                 ?17                 	;0	>>17
16  15   GOTO/253                  ?0        ?289                 ?11                 	;0
17  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'b647618532763671'	;1	<<15
18  17   FETCH_DIM_FUNC_ARG/93     $32=      16?0                 14:'id'             	;1
19  17   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
20  17   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
21  17   ASSIGN/38                 ?6        16?2                 $33                 	;0
22  18   BOOL_NOT/13               #35=      16?2                 ?0                  	;0
23  18   JMPZ/43                   ?0        #35                  ?25                 	;0	>>25
24  19   GOTO/253                  ?0        ?289                 ?15                 	;0
25  21   GOTO/253                  ?0        ?281                 ?16                 	;0	<<23
26  23   FETCH_DIM_R/81            $36=      16?0                 17:'enabled'        	;0
27  23   IS_EQUAL/17               #37=      $36                  18:1                	;0
28  23   BOOL_NOT/13               #38=      #37                  ?0                  	;0
29  23   JMPZ/43                   ?0        #38                  ?31                 	;0	>>31
30  24   GOTO/253                  ?0        ?32                  ?19                 	;0
31  26   ECHO/40                   ?0        20:'checked '        ?0                  	;0	<<29
32  28   ECHO/40                   ?0        21:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="enable_proxy">Proxied <i title="Route connections through allocated proxies." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_proxy" id="enable_proxy" type="checkbox" ' ?0                  	;0
33  29   FETCH_DIM_R/81            $39=      16?0                 22:'enable_proxy'   	;0
34  29   IS_EQUAL/17               #40=      $39                  23:1                	;0
35  29   BOOL_NOT/13               #41=      #40                  ?0                  	;0
36  29   JMPZ/43                   ?0        #41                  ?38                 	;0	>>38
37  30   GOTO/253                  ?0        ?83                  ?24                 	;0
38  32   GOTO/253                  ?0        ?82                  ?25                 	;0	<<36
39  35   ECHO/40                   ?0        26:'											<span class="d-none d-sm-inline">Domains & IP\'s</span>
                                            ' ?0                  	;0
40  37   ECHO/40                   ?0        27:'										</a>
									</li>
									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">Advanced</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#performance" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-flash mr-1"></i>
											<span class="d-none d-sm-inline">Performance</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#ssl-certificate" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-certificate mr-1"></i>
											<span class="d-none d-sm-inline">SSL Certificate</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="server-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="server_name">Server Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="server_name" name="server_name" value="' ?0                  	;0
41  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'htmlspecialchars'	;1
42  38   FETCH_DIM_FUNC_ARG/93     $42=      16?0                 30:'server_name'    	;1
43  38   SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
44  38   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
45  38   ECHO/40                   ?0        $43                  ?0                  	;0
46  39   GOTO/253                  ?0        ?298                 ?31                 	;0
47  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'explode'        	;2
48  41   SEND_VAL_EX/116           ?80       34:','               ?1                  	;0
49  41   FETCH_DIM_FUNC_ARG/93     $44=      16?0                 35:'https_ports_add'	;2
50  41   SEND_VAR_EX/66            ?96       $44                  ?2                  	;0
51  41   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
52  41   FE_RESET_R/77             $46=      $45                  ?73                 	;0
53  41   FE_FETCH_R/78             ?0        $46                  16?3                	;73	>>73	<<72
54  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'is_numeric'     	;1
55  42   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
56  42   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
57  42   JMPZ_EX/46                #48=      $47                  ?60                 	;0	>>60
58  42   IS_SMALLER_OR_EQUAL/20    #49=      38:80                16?3                	;0
59  42   BOOL/52                   #48=      #49                  ?0                  	;0
60  42   JMPZ_EX/46                #48=      #48                  ?63                 	;0	>>63	<<57
61  42   IS_SMALLER_OR_EQUAL/20    #50=      16?3                 39:65535            	;0
62  42   BOOL/52                   #48=      #50                  ?0                  	;0
63  42   BOOL_NOT/13               #51=      #48                  ?0                  	;0	<<60
64  42   JMPZ/43                   ?0        #51                  ?67                 	;0	>>67
65  43   NOP/0                     ?0        ?0                   ?0                  	;1
66  43   GOTO/253                  ?0        ?72                  ?40                 	;0
67  45   ECHO/40                   ?0        41:'                                                            <option selected value="' ?0                  	;0	<<64
68  46   ECHO/40                   ?0        16?3                 ?0                  	;0
69  47   ECHO/40                   ?0        42:'">'              ?0                  	;0
70  48   ECHO/40                   ?0        16?3                 ?0                  	;0
71  49   ECHO/40                   ?0        43:'</option>
                                                            ' ?0                  	;0
72  51   JMP/42                    ?0        ?53                  ?0                  	;0	>>53
73  51   FE_FREE/127               ?0        $46                  ?0                  	;0	<<52
74  54   ECHO/40                   ?0        44:'                                                        </select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="rtmp_port">RTMP Port <i title="Enter the port to run the RTMP server on." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="rtmp_port" name="rtmp_port" value="' ?0                  	;0
75  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'htmlspecialchars'	;1
76  55   FETCH_DIM_FUNC_ARG/93     $52=      16?0                 47:'rtmp_port'      	;1
77  55   SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
78  55   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
79  55   ECHO/40                   ?0        $53                  ?0                  	;0
80  56   ECHO/40                   ?0        48:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-4 col-form-label" for="disable_ramdisk">Disable Ramdisk <i title="If you have a fast NVMe SSD, you can disable ramdisk to allow streams to be run and output from your disk. Faster than you\'d think, but you could hit a IO bottleneck depending on your connections. This setting will take a minute or so to update as it requires root access." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_ramdisk" id="disable_ramdisk" type="checkbox" ' ?0                  	;0
81  57   GOTO/253                  ?0        ?676                 ?49                 	;0
82  59   ECHO/40                   ?0        50:'checked '        ?0                  	;0
83  61   ECHO/40                   ?0        51:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="additional_ips">
										<div class="row">
											<div class="col-12">
                                                ' ?0                  	;0
84  62   FETCH_DIM_R/81            $54=      16?0                 52:'is_main'        	;0
85  62   JMPZ/43                   ?0        $54                  ?87                 	;0	>>87
86  63   GOTO/253                  ?0        ?181                 ?53                 	;0
87  65   ECHO/40                   ?0        54:'												<div class="alert alert-info alert-dismissible fade show" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													By default, clients will be directed to the Server IP on the Details tab. You can add IP\'s or Domain Names here to force clients to be directed to those instead. If random IP / domain is selected, each client will be directed to a random entry in the list, otherwise the first entry in the list will be used to serve content.
												</div>
                                                ' ?0                  	;0	<<85
88  66   GOTO/253                  ?0        ?181                 ?55                 	;0
89  69   ECHO/40                   ?0        56:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    ' ?0                  	;0
90  70   FETCH_DIM_R/81            $55=      16?0                 57:'is_main'        	;0
91  70   BOOL_NOT/13               #56=      $55                  ?0                  	;0
92  70   JMPZ/43                   ?0        #56                  ?94                 	;0	>>94
93  71   GOTO/253                  ?0        ?461                 ?58                 	;0
94  73   ECHO/40                   ?0        59:'                                                    <div class="col-md-12" align="right">
                                                    ' ?0                  	;0	<<92
95  74   GOTO/253                  ?0        ?190                 ?60                 	;0
96  75   GOTO/253                  ?0        ?461                 ?61                 	;0
97  77   BOOL_NOT/13               #57=      16?1                 ?0                  	;0
98  77   JMPZ/43                   ?0        #57                  ?100                	;0	>>100
99  78   GOTO/253                  ?0        ?127                 ?62                 	;0
100 80   ECHO/40                   ?0        63:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cert_serial">Certificate Serial</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="cert_serial" value="' ?0                  	;0	<<98
101 81   FETCH_DIM_R/81            $58=      16?4                 64:'serial'         	;0
102 81   ECHO/40                   ?0        $58                  ?0                  	;0
103 82   ECHO/40                   ?0        65:'" readonly>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cert_subject">Certificate Subject</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="cert_subject" value="' ?0                  	;0
104 83   FETCH_DIM_R/81            $59=      16?4                 66:'subject'        	;0
105 83   ECHO/40                   ?0        $59                  ?0                  	;0
106 84   GOTO/253                  ?0        ?126                 ?67                 	;0
107 86   ASSIGN/38                 ?32       16?5                 68:array (
  0 => 
  array (
    'id' => 'A1',
    'name' => 'Anonymous Proxy',
  ),
  1 => 
  array (
    'id' => 'A2',
    'name' => 'Satellite Provider',
  ),
  2 => 
  array (
    'id' => 'O1',
    'name' => 'Other Country',
  ),
  3 => 
  array (
    'id' => 'AF',
    'name' => 'Afghanistan',
  ),
  4 => 
  array (
    'id' => 'AX',
    'name' => 'Aland Islands',
  ),
  5 => 
  array (
    'id' => 'AL',
    'name' => 'Albania',
  ),
  6 => 
  array (
    'id' => 'DZ',
    'name' => 'Algeria',
  ),
  7 => 
  array (
    'id' => 'AS',
    'name' => 'American Samoa',
  ),
  8 => 
  array (
    'id' => 'AD',
    'name' => 'Andorra',
  ),
  9 => 
  array (
    'id' => 'AO',
    'name' => 'Angola',
  ),
  10 => 
  array (
    'id' => 'AI',
    'name' => 'Anguilla',
  ),
  11 => 
  array (
    'id' => 'AQ',
    'name' => 'Antarctica',
  ),
  12 => 
  array (
    'id' => 'AG',
    'name' => 'Antigua And Barbuda',
  ),
  13 => 
  array (
    'id' => 'AR',
    'name' => 'Argentina',
  ),
  14 => 
  array (
    'id' => 'AM',
    'name' => 'Armenia',
  ),
  15 => 
  array (
    'id' => 'AW',
    'name' => 'Aruba',
  ),
  16 => 
  array (
    'id' => 'AU',
    'name' => 'Australia',
  ),
  17 => 
  array (
    'id' => 'AT',
    'name' => 'Austria',
  ),
  18 => 
  array (
    'id' => 'AZ',
    'name' => 'Azerbaijan',
  ),
  19 => 
  array (
    'id' => 'BS',
    'name' => 'Bahamas',
  ),
  20 => 
  array (
    'id' => 'BH',
    'name' => 'Bahrain',
  ),
  21 => 
  array (
    'id' => 'BD',
    'name' => 'Bangladesh',
  ),
  22 => 
  array (
    'id' => 'BB',
    'name' => 'Barbados',
  ),
  23 => 
  array (
    'id' => 'BY',
    'name' => 'Belarus',
  ),
  24 => 
  array (
    'id' => 'BE',
    'name' => 'Belgium',
  ),
  25 => 
  array (
    'id' => 'BZ',
    'name' => 'Belize',
  ),
  26 => 
  array (
    'id' => 'BJ',
    'name' => 'Benin',
  ),
  27 => 
  array (
    'id' => 'BM',
    'name' => 'Bermuda',
  ),
  28 => 
  array (
    'id' => 'BT',
    'name' => 'Bhutan',
  ),
  29 => 
  array (
    'id' => 'BO',
    'name' => 'Bolivia',
  ),
  30 => 
  array (
    'id' => 'BA',
    'name' => 'Bosnia And Herzegovina',
  ),
  31 => 
  array (
    'id' => 'BW',
    'name' => 'Botswana',
  ),
  32 => 
  array (
    'id' => 'BV',
    'name' => 'Bouvet Island',
  ),
  33 => 
  array (
    'id' => 'BR',
    'name' => 'Brazil',
  ),
  34 => 
  array (
    'id' => 'IO',
    'name' => 'British Indian Ocean Territory',
  ),
  35 => 
  array (
    'id' => 'BN',
    'name' => 'Brunei Darussalam',
  ),
  36 => 
  array (
    'id' => 'BG',
    'name' => 'Bulgaria',
  ),
  37 => 
  array (
    'id' => 'BF',
    'name' => 'Burkina Faso',
  ),
  38 => 
  array (
    'id' => 'BI',
    'name' => 'Burundi',
  ),
  39 => 
  array (
    'id' => 'KH',
    'name' => 'Cambodia',
  ),
  40 => 
  array (
    'id' => 'CM',
    'name' => 'Cameroon',
  ),
  41 => 
  array (
    'id' => 'CA',
    'name' => 'Canada',
  ),
  42 => 
  array (
    'id' => 'CV',
    'name' => 'Cape Verde',
  ),
  43 => 
  array (
    'id' => 'KY',
    'name' => 'Cayman Islands',
  ),
  44 => 
  array (
    'id' => 'CF',
    'name' => 'Central African Republic',
  ),
  45 => 
  array (
    'id' => 'TD',
    'name' => 'Chad',
  ),
  46 => 
  array (
    'id' => 'CL',
    'name' => 'Chile',
  ),
  47 => 
  array (
    'id' => 'CN',
    'name' => 'China',
  ),
  48 => 
  array (
    'id' => 'CX',
    'name' => 'Christmas Island',
  ),
  49 => 
  array (
    'id' => 'CC',
    'name' => 'Cocos (Keeling) Islands',
  ),
  50 => 
  array (
    'id' => 'CO',
    'name' => 'Colombia',
  ),
  51 => 
  array (
    'id' => 'KM',
    'name' => 'Comoros',
  ),
  52 => 
  array (
    'id' => 'CG',
    'name' => 'Congo',
  ),
  53 => 
  array (
    'id' => 'CD',
    'name' => 'Congo, Democratic Republic',
  ),
  54 => 
  array (
    'id' => 'CK',
    'name' => 'Cook Islands',
  ),
  55 => 
  array (
    'id' => 'CR',
    'name' => 'Costa Rica',
  ),
  56 => 
  array (
    'id' => 'CI',
    'name' => 'Cote D\'Ivoire',
  ),
  57 => 
  array (
    'id' => 'HR',
    'name' => 'Croatia',
  ),
  58 => 
  array (
    'id' => 'CU',
    'name' => 'Cuba',
  ),
  59 => 
  array (
    'id' => 'CY',
    'name' => 'Cyprus',
  ),
  60 => 
  array (
    'id' => 'CZ',
    'name' => 'Czech Republic',
  ),
  61 => 
  array (
    'id' => 'DK',
    'name' => 'Denmark',
  ),
  62 => 
  array (
    'id' => 'DJ',
    'name' => 'Djibouti',
  ),
  63 => 
  array (
    'id' => 'DM',
    'name' => 'Dominica',
  ),
  64 => 
  array (
    'id' => 'DO',
    'name' => 'Dominican Republic',
  ),
  65 => 
  array (
    'id' => 'EC',
    'name' => 'Ecuador',
  ),
  66 => 
  array (
    'id' => 'EG',
    'name' => 'Egypt',
  ),
  67 => 
  array (
    'id' => 'SV',
    'name' => 'El Salvador',
  ),
  68 => 
  array (
    'id' => 'GQ',
    'name' => 'Equatorial Guinea',
  ),
  69 => 
  array (
    'id' => 'ER',
    'name' => 'Eritrea',
  ),
  70 => 
  array (
    'id' => 'EE',
    'name' => 'Estonia',
  ),
  71 => 
  array (
    'id' => 'ET',
    'name' => 'Ethiopia',
  ),
  72 => 
  array (
    'id' => 'FK',
    'name' => 'Falkland Islands (Malvinas)',
  ),
  73 => 
  array (
    'id' => 'FO',
    'name' => 'Faroe Islands',
  ),
  74 => 
  array (
    'id' => 'FJ',
    'name' => 'Fiji',
  ),
  75 => 
  array (
    'id' => 'FI',
    'name' => 'Finland',
  ),
  76 => 
  array (
    'id' => 'FR',
    'name' => 'France',
  ),
  77 => 
  array (
    'id' => 'GF',
    'name' => 'French Guiana',
  ),
  78 => 
  array (
    'id' => 'PF',
    'name' => 'French Polynesia',
  ),
  79 => 
  array (
    'id' => 'TF',
    'name' => 'French Southern Territories',
  ),
  80 => 
  array (
    'id' => 'MK',
    'name' => 'Fyrom',
  ),
  81 => 
  array (
    'id' => 'GA',
    'name' => 'Gabon',
  ),
  82 => 
  array (
    'id' => 'GM',
    'name' => 'Gambia',
  ),
  83 => 
  array (
    'id' => 'GE',
    'name' => 'Georgia',
  ),
  84 => 
  array (
    'id' => 'DE',
    'name' => 'Germany',
  ),
  85 => 
  array (
    'id' => 'GH',
    'name' => 'Ghana',
  ),
  86 => 
  array (
    'id' => 'GI',
    'name' => 'Gibraltar',
  ),
  87 => 
  array (
    'id' => 'GR',
    'name' => 'Greece',
  ),
  88 => 
  array (
    'id' => 'GL',
    'name' => 'Greenland',
  ),
  89 => 
  array (
    'id' => 'GD',
    'name' => 'Grenada',
  ),
  90 => 
  array (
    'id' => 'GP',
    'name' => 'Guadeloupe',
  ),
  91 => 
  array (
    'id' => 'GU',
    'name' => 'Guam',
  ),
  92 => 
  array (
    'id' => 'GT',
    'name' => 'Guatemala',
  ),
  93 => 
  array (
    'id' => 'GG',
    'name' => 'Guernsey',
  ),
  94 => 
  array (
    'id' => 'GN',
    'name' => 'Guinea',
  ),
  95 => 
  array (
    'id' => 'GW',
    'name' => 'Guinea-Bissau',
  ),
  96 => 
  array (
    'id' => 'GY',
    'name' => 'Guyana',
  ),
  97 => 
  array (
    'id' => 'HT',
    'name' => 'Haiti',
  ),
  98 => 
  array (
    'id' => 'HM',
    'name' => 'Heard Island & Mcdonald Islands',
  ),
  99 => 
  array (
    'id' => 'VA',
    'name' => 'Holy See (Vatican City State)',
  ),
  100 => 
  array (
    'id' => 'HN',
    'name' => 'Honduras',
  ),
  101 => 
  array (
    'id' => 'HK',
    'name' => 'Hong Kong',
  ),
  102 => 
  array (
    'id' => 'HU',
    'name' => 'Hungary',
  ),
  103 => 
  array (
    'id' => 'IS',
    'name' => 'Iceland',
  ),
  104 => 
  array (
    'id' => 'IN',
    'name' => 'India',
  ),
  105 => 
  array (
    'id' => 'ID',
    'name' => 'Indonesia',
  ),
  106 => 
  array (
    'id' => 'IR',
    'name' => 'Iran, Islamic Republic Of',
  ),
  107 => 
  array (
    'id' => 'IQ',
    'name' => 'Iraq',
  ),
  108 => 
  array (
    'id' => 'IE',
    'name' => 'Ireland',
  ),
  109 => 
  array (
    'id' => 'IM',
    'name' => 'Isle Of Man',
  ),
  110 => 
  array (
    'id' => 'IL',
    'name' => 'Israel',
  ),
  111 => 
  array (
    'id' => 'IT',
    'name' => 'Italy',
  ),
  112 => 
  array (
    'id' => 'JM',
    'name' => 'Jamaica',
  ),
  113 => 
  array (
    'id' => 'JP',
    'name' => 'Japan',
  ),
  114 => 
  array (
    'id' => 'JE',
    'name' => 'Jersey',
  ),
  115 => 
  array (
    'id' => 'JO',
    'name' => 'Jordan',
  ),
  116 => 
  array (
    'id' => 'KZ',
    'name' => 'Kazakhstan',
  ),
  117 => 
  array (
    'id' => 'KE',
    'name' => 'Kenya',
  ),
  118 => 
  array (
    'id' => 'KI',
    'name' => 'Kiribati',
  ),
  119 => 
  array (
    'id' => 'KR',
    'name' => 'Korea',
  ),
  120 => 
  array (
    'id' => 'KW',
    'name' => 'Kuwait',
  ),
  121 => 
  array (
    'id' => 'KG',
    'name' => 'Kyrgyzstan',
  ),
  122 => 
  array (
    'id' => 'LA',
    'name' => 'Lao People\'s Democratic Republic',
  ),
  123 => 
  array (
    'id' => 'LV',
    'name' => 'Latvia',
  ),
  124 => 
  array (
    'id' => 'LB',
    'name' => 'Lebanon',
  ),
  125 => 
  array (
    'id' => 'LS',
    'name' => 'Lesotho',
  ),
  126 => 
  array (
    'id' => 'LR',
    'name' => 'Liberia',
  ),
  127 => 
  array (
    'id' => 'LY',
    'name' => 'Libyan Arab Jamahiriya',
  ),
  128 => 
  array (
    'id' => 'LI',
    'name' => 'Liechtenstein',
  ),
  129 => 
  array (
    'id' => 'LT',
    'name' => 'Lithuania',
  ),
  130 => 
  array (
    'id' => 'LU',
    'name' => 'Luxembourg',
  ),
  131 => 
  array (
    'id' => 'MO',
    'name' => 'Macao',
  ),
  132 => 
  array (
    'id' => 'MG',
    'name' => 'Madagascar',
  ),
  133 => 
  array (
    'id' => 'MW',
    'name' => 'Malawi',
  ),
  134 => 
  array (
    'id' => 'MY',
    'name' => 'Malaysia',
  ),
  135 => 
  array (
    'id' => 'MV',
    'name' => 'Maldives',
  ),
  136 => 
  array (
    'id' => 'ML',
    'name' => 'Mali',
  ),
  137 => 
  array (
    'id' => 'MT',
    'name' => 'Malta',
  ),
  138 => 
  array (
    'id' => 'MH',
    'name' => 'Marshall Islands',
  ),
  139 => 
  array (
    'id' => 'MQ',
    'name' => 'Martinique',
  ),
  140 => 
  array (
    'id' => 'MR',
    'name' => 'Mauritania',
  ),
  141 => 
  array (
    'id' => 'MU',
    'name' => 'Mauritius',
  ),
  142 => 
  array (
    'id' => 'YT',
    'name' => 'Mayotte',
  ),
  143 => 
  array (
    'id' => 'MX',
    'name' => 'Mexico',
  ),
  144 => 
  array (
    'id' => 'FM',
    'name' => 'Micronesia, Federated States Of',
  ),
  145 => 
  array (
    'id' => 'MD',
    'name' => 'Moldova',
  ),
  146 => 
  array (
    'id' => 'MC',
    'name' => 'Monaco',
  ),
  147 => 
  array (
    'id' => 'MN',
    'name' => 'Mongolia',
  ),
  148 => 
  array (
    'id' => 'ME',
    'name' => 'Montenegro',
  ),
  149 => 
  array (
    'id' => 'MS',
    'name' => 'Montserrat',
  ),
  150 => 
  array (
    'id' => 'MA',
    'name' => 'Morocco',
  ),
  151 => 
  array (
    'id' => 'MZ',
    'name' => 'Mozambique',
  ),
  152 => 
  array (
    'id' => 'MM',
    'name' => 'Myanmar',
  ),
  153 => 
  array (
    'id' => 'NA',
    'name' => 'Namibia',
  ),
  154 => 
  array (
    'id' => 'NR',
    'name' => 'Nauru',
  ),
  155 => 
  array (
    'id' => 'NP',
    'name' => 'Nepal',
  ),
  156 => 
  array (
    'id' => 'NL',
    'name' => 'Netherlands',
  ),
  157 => 
  array (
    'id' => 'AN',
    'name' => 'Netherlands Antilles',
  ),
  158 => 
  array (
    'id' => 'NC',
    'name' => 'New Caledonia',
  ),
  159 => 
  array (
    'id' => 'NZ',
    'name' => 'New Zealand',
  ),
  160 => 
  array (
    'id' => 'NI',
    'name' => 'Nicaragua',
  ),
  161 => 
  array (
    'id' => 'NE',
    'name' => 'Niger',
  ),
  162 => 
  array (
    'id' => 'NG',
    'name' => 'Nigeria',
  ),
  163 => 
  array (
    'id' => 'NU',
    'name' => 'Niue',
  ),
  164 => 
  array (
    'id' => 'NF',
    'name' => 'Norfolk Island',
  ),
  165 => 
  array (
    'id' => 'MP',
    'name' => 'Northern Mariana Islands',
  ),
  166 => 
  array (
    'id' => 'NO',
    'name' => 'Norway',
  ),
  167 => 
  array (
    'id' => 'OM',
    'name' => 'Oman',
  ),
  168 => 
  array (
    'id' => 'PK',
    'name' => 'Pakistan',
  ),
  169 => 
  array (
    'id' => 'PW',
    'name' => 'Palau',
  ),
  170 => 
  array (
    'id' => 'PS',
    'name' => 'Palestinian Territory, Occupied',
  ),
  171 => 
  array (
    'id' => 'PA',
    'name' => 'Panama',
  ),
  172 => 
  array (
    'id' => 'PG',
    'name' => 'Papua New Guinea',
  ),
  173 => 
  array (
    'id' => 'PY',
    'name' => 'Paraguay',
  ),
  174 => 
  array (
    'id' => 'PE',
    'name' => 'Peru',
  ),
  175 => 
  array (
    'id' => 'PH',
    'name' => 'Philippines',
  ),
  176 => 
  array (
    'id' => 'PN',
    'name' => 'Pitcairn',
  ),
  177 => 
  array (
    'id' => 'PL',
    'name' => 'Poland',
  ),
  178 => 
  array (
    'id' => 'PT',
    'name' => 'Portugal',
  ),
  179 => 
  array (
    'id' => 'PR',
    'name' => 'Puerto Rico',
  ),
  180 => 
  array (
    'id' => 'QA',
    'name' => 'Qatar',
  ),
  181 => 
  array (
    'id' => 'RE',
    'name' => 'Reunion',
  ),
  182 => 
  array (
    'id' => 'RO',
    'name' => 'Romania',
  ),
  183 => 
  array (
    'id' => 'RU',
    'name' => 'Russian Federation',
  ),
  184 => 
  array (
    'id' => 'RW',
    'name' => 'Rwanda',
  ),
  185 => 
  array (
    'id' => 'BL',
    'name' => 'Saint Barthelemy',
  ),
  186 => 
  array (
    'id' => 'SH',
    'name' => 'Saint Helena',
  ),
  187 => 
  array (
    'id' => 'KN',
    'name' => 'Saint Kitts And Nevis',
  ),
  188 => 
  array (
    'id' => 'LC',
    'name' => 'Saint Lucia',
  ),
  189 => 
  array (
    'id' => 'MF',
    'name' => 'Saint Martin',
  ),
  190 => 
  array (
    'id' => 'PM',
    'name' => 'Saint Pierre And Miquelon',
  ),
  191 => 
  array (
    'id' => 'VC',
    'name' => 'Saint Vincent And Grenadines',
  ),
  192 => 
  array (
    'id' => 'WS',
    'name' => 'Samoa',
  ),
  193 => 
  array (
    'id' => 'SM',
    'name' => 'San Marino',
  ),
  194 => 
  array (
    'id' => 'ST',
    'name' => 'Sao Tome And Principe',
  ),
  195 => 
  array (
    'id' => 'SA',
    'name' => 'Saudi Arabia',
  ),
  196 => 
  array (
    'id' => 'SN',
    'name' => 'Senegal',
  ),
  197 => 
  array (
    'id' => 'RS',
    'name' => 'Serbia',
  ),
  198 => 
  array (
    'id' => 'SC',
    'name' => 'Seychelles',
  ),
  199 => 
  array (
    'id' => 'SL',
    'name' => 'Sierra Leone',
  ),
  200 => 
  array (
    'id' => 'SG',
    'name' => 'Singapore',
  ),
  201 => 
  array (
    'id' => 'SK',
    'name' => 'Slovakia',
  ),
  202 => 
  array (
    'id' => 'SI',
    'name' => 'Slovenia',
  ),
  203 => 
  array (
    'id' => 'SB',
    'name' => 'Solomon Islands',
  ),
  204 => 
  array (
    'id' => 'SO',
    'name' => 'Somalia',
  ),
  205 => 
  array (
    'id' => 'ZA',
    'name' => 'South Africa',
  ),
  206 => 
  array (
    'id' => 'GS',
    'name' => 'South Georgia And Sandwich Isl.',
  ),
  207 => 
  array (
    'id' => 'ES',
    'name' => 'Spain',
  ),
  208 => 
  array (
    'id' => 'LK',
    'name' => 'Sri Lanka',
  ),
  209 => 
  array (
    'id' => 'SD',
    'name' => 'Sudan',
  ),
  210 => 
  array (
    'id' => 'SR',
    'name' => 'Suriname',
  ),
  211 => 
  array (
    'id' => 'SJ',
    'name' => 'Svalbard And Jan Mayen',
  ),
  212 => 
  array (
    'id' => 'SZ',
    'name' => 'Swaziland',
  ),
  213 => 
  array (
    'id' => 'SE',
    'name' => 'Sweden',
  ),
  214 => 
  array (
    'id' => 'CH',
    'name' => 'Switzerland',
  ),
  215 => 
  array (
    'id' => 'SY',
    'name' => 'Syrian Arab Republic',
  ),
  216 => 
  array (
    'id' => 'TW',
    'name' => 'Taiwan',
  ),
  217 => 
  array (
    'id' => 'TJ',
    'name' => 'Tajikistan',
  ),
  218 => 
  array (
    'id' => 'TZ',
    'name' => 'Tanzania',
  ),
  219 => 
  array (
    'id' => 'TH',
    'name' => 'Thailand',
  ),
  220 => 
  array (
    'id' => 'TL',
    'name' => 'Timor-Leste',
  ),
  221 => 
  array (
    'id' => 'TG',
    'name' => 'Togo',
  ),
  222 => 
  array (
    'id' => 'TK',
    'name' => 'Tokelau',
  ),
  223 => 
  array (
    'id' => 'TO',
    'name' => 'Tonga',
  ),
  224 => 
  array (
    'id' => 'TT',
    'name' => 'Trinidad And Tobago',
  ),
  225 => 
  array (
    'id' => 'TN',
    'name' => 'Tunisia',
  ),
  226 => 
  array (
    'id' => 'TR',
    'name' => 'Turkey',
  ),
  227 => 
  array (
    'id' => 'TM',
    'name' => 'Turkmenistan',
  ),
  228 => 
  array (
    'id' => 'TC',
    'name' => 'Turks And Caicos Islands',
  ),
  229 => 
  array (
    'id' => 'TV',
    'name' => 'Tuvalu',
  ),
  230 => 
  array (
    'id' => 'UG',
    'name' => 'Uganda',
  ),
  231 => 
  array (
    'id' => 'UA',
    'name' => 'Ukraine',
  ),
  232 => 
  array (
    'id' => 'AE',
    'name' => 'United Arab Emirates',
  ),
  233 => 
  array (
    'id' => 'GB',
    'name' => 'United Kingdom',
  ),
  234 => 
  array (
    'id' => 'US',
    'name' => 'United States',
  ),
  235 => 
  array (
    'id' => 'UM',
    'name' => 'United States Outlying Islands',
  ),
  236 => 
  array (
    'id' => 'UY',
    'name' => 'Uruguay',
  ),
  237 => 
  array (
    'id' => 'UZ',
    'name' => 'Uzbekistan',
  ),
  238 => 
  array (
    'id' => 'VU',
    'name' => 'Vanuatu',
  ),
  239 => 
  array (
    'id' => 'VE',
    'name' => 'Venezuela',
  ),
  240 => 
  array (
    'id' => 'VN',
    'name' => 'Viet Nam',
  ),
  241 => 
  array (
    'id' => 'VG',
    'name' => 'Virgin Islands, British',
  ),
  242 => 
  array (
    'id' => 'VI',
    'name' => 'Virgin Islands, U.S.',
  ),
  243 => 
  array (
    'id' => 'WF',
    'name' => 'Wallis And Futuna',
  ),
  244 => 
  array (
    'id' => 'EH',
    'name' => 'Western Sahara',
  ),
  245 => 
  array (
    'id' => 'YE',
    'name' => 'Yemen',
  ),
  246 => 
  array (
    'id' => 'ZM',
    'name' => 'Zambia',
  ),
  247 => 
  array (
    'id' => 'ZW',
    'name' => 'Zimbabwe',
  ),
)	;0
108 87   ASSIGN/38                 ?33       16?6                 69:'Edit Server'    	;0
109 88   INCLUDE_OR_EVAL/73        ?34       70:'header.php'      ?0                  	;2
110 89   ECHO/40                   ?0        71:'<div class="wrapper boxed-layout"' ?0                  	;0
111 90   FETCH_IS/89               $63=      72:'_SERVER'         ?0                  	;0
112 90   ISSET_ISEMPTY_DIM_OBJ/115 #64=      $63                  73:'HTTP_X_REQUESTED_WITH'	;16777216
113 90   BOOL_NOT/13               #65=      #64                  ?0                  	;0
114 90   JMPZ_EX/46                #65=      #65                  ?122                	;0	>>122
115 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'strtolower'     	;1
116 90   FETCH_FUNC_ARG/92         $66=      76:'_SERVER'         ?0                  	;1
117 90   FETCH_DIM_FUNC_ARG/93     $67=      $66                  77:'HTTP_X_REQUESTED_WITH'	;1
118 90   SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
119 90   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
120 90   IS_EQUAL/17               #69=      $68                  78:'xmlhttprequest' 	;0
121 90   BOOL/52                   #65=      #69                  ?0                  	;0
122 90   BOOL_NOT/13               #70=      #65                  ?0                  	;0	<<114
123 90   JMPZ/43                   ?0        #70                  ?125                	;0	>>125
124 91   GOTO/253                  ?0        ?578                 ?79                 	;0
125 93   GOTO/253                  ?0        ?577                 ?80                 	;0	<<123
126 95   ECHO/40                   ?0        81:'" readonly>
													</div>
												</div>
                                                ' ?0                  	;0
127 97   ECHO/40                   ?0        82:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="enable_https">Enable HTTPS <i title="Allow SSL connections to this server. Ensure the certificate is valid for the domains beforehand. Reseller DNS would probably fail under these circumstances as they would not have a valid certificate." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_https" id="enable_https" type="checkbox" ' ?0                  	;0
128 98   FETCH_DIM_R/81            $71=      16?0                 83:'enable_https'   	;0
129 98   IS_EQUAL/17               #72=      $71                  84:1                	;0
130 98   BOOL_NOT/13               #73=      #72                  ?0                  	;0
131 98   JMPZ/43                   ?0        #73                  ?133                	;0	>>133
132 99   GOTO/253                  ?0        ?14                  ?85                 	;0
133 101  ECHO/40                   ?0        86:'checked '        ?0                  	;0	<<131
134 102  GOTO/253                  ?0        ?14                  ?87                 	;0
135 104  ECHO/40                   ?0        88:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="enable_geoip">GeoIP Load Balancing <i title="Route connections to the nearest server based on the location of the client." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_geoip" id="enable_geoip" type="checkbox" ' ?0                  	;0
136 105  FETCH_DIM_R/81            $74=      16?0                 89:'enable_geoip'   	;0
137 105  IS_EQUAL/17               #75=      $74                  90:1                	;0
138 105  BOOL_NOT/13               #76=      #75                  ?0                  	;0
139 105  JMPZ/43                   ?0        #76                  ?141                	;0	>>141
140 106  GOTO/253                  ?0        ?142                 ?91                 	;0
141 108  ECHO/40                   ?0        92:'checked '        ?0                  	;0	<<139
142 110  ECHO/40                   ?0        93:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="isp_type">GeoISP Priority</label>
													<div class="col-md-8">
														<select name="isp_type" id="isp_type" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
143 111  GOTO/253                  ?0        ?469                 ?94                 	;0
144 113  FETCH_DIM_R/81            $78=      16?7                 96:2                	;0
145 113  CONCAT/8                  #79=      97:'* '              $78                 	;0
146 113  CONCAT/8                  #80=      #79                  98:' - Freq: '      	;0
147 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'round'          	;2
148 113  FETCH_DIM_R/81            $81=      16?7                 101:0               	;0
149 113  DIV/4                     #82=      $81                  102:1000000         	;0
150 113  SEND_VAL_EX/116           ?80       #82                  ?1                  	;0
151 113  SEND_VAL_EX/116           ?96       103:1                ?2                  	;0
152 113  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
153 113  CONCAT/8                  #84=      #80                  $83                 	;0
154 113  CONCAT/8                  #85=      #84                  104:'GHz - '        	;0
155 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'round'         	;2
156 113  FETCH_DIM_R/81            $86=      16?7                 107:1               	;0
157 113  DIV/4                     #87=      $86                  108:1000000         	;0
158 113  SEND_VAL_EX/116           ?80       #87                  ?1                  	;0
159 113  SEND_VAL_EX/116           ?96       109:1                ?2                  	;0
160 113  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
161 113  CONCAT/8                  #89=      #85                  $88                 	;0
162 113  CONCAT/8                  #90=      #89                  110:'GHz'           	;0
163 113  ASSIGN_DIM/147            ?49       16?7                 95:3                	;0
164 113  OP_DATA/137               ?0        #90                  ?0                  	;0
165 114  ECHO/40                   ?0        111:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="governor">CPU Governor <i title="Change default CPU governor for all cores. Default for Ubuntu is ondemand, with performance governor giving the best theoretical results. This may take a minute or so to change." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="governor" id="governor" class="form-control select2" data-toggle="select2">
                                                            <option selected value="' ?0                  	;0
166 115  FETCH_DIM_R/81            $91=      16?7                 112:2               	;0
167 115  ECHO/40                   ?0        $91                  ?0                  	;0
168 116  ECHO/40                   ?0        113:'">'             ?0                  	;0
169 117  FETCH_DIM_R/81            $92=      16?7                 114:3               	;0
170 117  ECHO/40                   ?0        $92                  ?0                  	;0
171 118  GOTO/253                  ?0        ?582                 ?115                	;0
172 120  INCLUDE_OR_EVAL/73        ?65       116:'session.php'    ?0                  	;2	<<0
173 121  INCLUDE_OR_EVAL/73        ?66       117:'functions.php'  ?0                  	;2
174 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'E6d500e19634d513'	;0
175 122  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
176 122  JMPZ/43                   ?0        $95                  ?178                	;0	>>178
177 123  GOTO/253                  ?0        ?180                 ?120                	;0
178 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'e72F42A93714Ba87'	;0	<<176
179 125  DO_FCALL_BY_NAME/131      ?68       ?0                   ?0                  	;0
180 127  GOTO/253                  ?0        ?319                 ?123                	;0
181 130  ECHO/40                   ?0        124:'												<div class="form-group row mb-4">
                                                    ' ?0                  	;0
182 131  FETCH_DIM_R/81            $97=      16?0                 125:'is_main'       	;0
183 131  BOOL_NOT/13               #98=      $97                  ?0                  	;0
184 131  JMPZ/43                   ?0        #98                  ?186                	;0	>>186
185 132  GOTO/253                  ?0        ?342                 ?126                	;0
186 134  ECHO/40                   ?0        127:'                                                    <label class="col-md-4 col-form-label" for="ip_field">Domain Names</label>
                                                    ' ?0                  	;0	<<184
187 135  GOTO/253                  ?0        ?343                 ?128                	;0
188 136  GOTO/253                  ?0        ?342                 ?129                	;0
189 138  ECHO/40                   ?0        130:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="col-md-6" align="right">
                                                    ' ?0                  	;0
190 140  ECHO/40                   ?0        131:'														<ul class="list-inline wizard mb-0">
															<li class="list-inline-item">
																<a href="javascript: void(0);" onClick="MoveUp()" class="btn btn-secondary"><i class="mdi mdi-chevron-up"></i></a>
																<a href="javascript: void(0);" onClick="MoveDown()" class="btn btn-secondary"><i class="mdi mdi-chevron-down"></i></a>
																<a href="javascript: void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="advanced-options">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="http_broadcast_ports">HTTP Ports <i title="Enter one or more port numbers between 80 and 65535." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
                                                        <select name="http_broadcast_ports[]" id="http_broadcast_ports" class="form-control col-md-12 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                            ' ?0                  	;0
191 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'is_numeric'    	;1
192 141  FETCH_DIM_FUNC_ARG/93     $99=      16?0                 134:'http_broadcast_port'	;1
193 141  SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
194 141  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
195 141  JMPZ_EX/46                #101=     $100                 ?199                	;0	>>199
196 141  FETCH_DIM_R/81            $102=     16?0                 135:'http_broadcast_port'	;0
197 141  IS_SMALLER_OR_EQUAL/20    #103=     136:80               $102                	;0
198 141  BOOL/52                   #101=     #103                 ?0                  	;0
199 141  JMPZ_EX/46                #101=     #101                 ?203                	;0	>>203	<<195
200 141  FETCH_DIM_R/81            $104=     16?0                 137:'http_broadcast_port'	;0
201 141  IS_SMALLER_OR_EQUAL/20    #105=     $104                 138:65535           	;0
202 141  BOOL/52                   #101=     #105                 ?0                  	;0
203 141  BOOL_NOT/13               #106=     #101                 ?0                  	;0	<<199
204 141  JMPZ/43                   ?0        #106                 ?206                	;0	>>206
205 142  GOTO/253                  ?0        ?225                 ?139                	;0
206 144  ECHO/40                   ?0        140:'                                                            <option selected value="' ?0                  	;0	<<204
207 145  GOTO/253                  ?0        ?219                 ?141                	;0
208 147  GOTO/253                  ?0        ?233                 ?142                	;0
209 149  ASSIGN/38                 ?79       16?8                 143:true            	;0
210 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'time'          	;0
211 150  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
212 150  FETCH_DIM_R/81            $109=     16?4                 146:'expiration'    	;0
213 150  IS_SMALLER/19             #110=     $108                 $109                	;0
214 150  BOOL_NOT/13               #111=     #110                 ?0                  	;0
215 150  JMPZ/43                   ?0        #111                 ?217                	;0	>>217
216 151  GOTO/253                  ?0        ?226                 ?147                	;0
217 153  ASSIGN/38                 ?84       16?1                 148:true            	;0	<<215
218 154  GOTO/253                  ?0        ?226                 ?149                	;0
219 156  FETCH_DIM_R/81            $113=     16?0                 150:'http_broadcast_port'	;0
220 156  ECHO/40                   ?0        $113                 ?0                  	;0
221 157  ECHO/40                   ?0        151:'">'             ?0                  	;0
222 158  FETCH_DIM_R/81            $114=     16?0                 152:'http_broadcast_port'	;0
223 158  ECHO/40                   ?0        $114                 ?0                  	;0
224 159  ECHO/40                   ?0        153:'</option>
                                                            ' ?0                  	;0
225 161  GOTO/253                  ?0        ?612                 ?154                	;0
226 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'date'          	;2
227 164  FETCH_DIM_FUNC_ARG/93     $115=     16?10                157:'datetime_format'	;1
228 164  SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
229 164  FETCH_DIM_FUNC_ARG/93     $116=     16?4                 158:'expiration'    	;2
230 164  SEND_VAR_EX/66            ?96       $116                 ?2                  	;0
231 164  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
232 164  ASSIGN/38                 ?90       16?9                 $117                	;0
233 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'count'         	;1
234 166  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
235 166  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
236 166  IS_EQUAL/17               #120=     $119                 161:0               	;0
237 166  BOOL_NOT/13               #121=     #120                 ?0                  	;0
238 166  JMPZ/43                   ?0        #121                 ?240                	;0	>>240
239 167  GOTO/253                  ?0        ?413                 ?162                	;0
240 169  ASSIGN/38                 ?94       16?11                163:array (
  0 => 'eth0',
)	;0	<<238
241 170  GOTO/253                  ?0        ?413                 ?164                	;0
242 172  ECHO/40                   ?0        165:'" required data-parsley-trigger="change">
													</div>
                                                </div>
                                                ' ?0                  	;0
243 173  FETCH_DIM_R/81            $123=     16?0                 166:'is_main'       	;0
244 173  BOOL_NOT/13               #124=     $123                 ?0                  	;0
245 173  JMPZ/43                   ?0        #124                 ?247                	;0	>>247
246 174  GOTO/253                  ?0        ?384                 ?167                	;0
247 176  ECHO/40                   ?0        168:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="enable_gzip">GZIP Compression <i title="Compressing server output on your main server will reduce network output significantly, but will increase CPU usage. If you have CPU to spare but your network usage is high, you should enable this." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_gzip" id="enable_gzip" type="checkbox" ' ?0                  	;0	<<245
248 177  FETCH_DIM_R/81            $125=     16?0                 169:'enable_gzip'   	;0
249 177  IS_EQUAL/17               #126=     $125                 170:1               	;0
250 177  BOOL_NOT/13               #127=     #126                 ?0                  	;0
251 177  JMPZ/43                   ?0        #127                 ?253                	;0	>>253
252 178  GOTO/253                  ?0        ?383                 ?171                	;0
253 180  ECHO/40                   ?0        172:'checked '       ?0                  	;0	<<251
254 181  GOTO/253                  ?0        ?383                 ?173                	;0
255 184  ECHO/40                   ?0        174:'														</select>
													</div>
													<label class="col-md-4 col-form-label" for="network_guaranteed_speed">Network Speed - Mbps <i title="Port speed to consider when connecting clients." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="network_guaranteed_speed" name="network_guaranteed_speed" value="' ?0                  	;0
256 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'htmlspecialchars'	;1
257 185  FETCH_DIM_FUNC_ARG/93     $128=     16?0                 177:'network_guaranteed_speed'	;1
258 185  SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
259 185  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
260 185  ECHO/40                   ?0        $129                 ?0                  	;0
261 186  ECHO/40                   ?0        178:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="geoip_type">GeoIP Priority</label>
													<div class="col-md-8">
														<select name="geoip_type" id="geoip_type" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
262 187  FE_RESET_R/77             $130=     179:array (
  'high_priority' => 'High Priority',
  'low_priority' => 'Low Priority',
  'strict' => 'Strict',
) ?279                	;0
263 187  FE_FETCH_R/78             #131=     $130                 16?12               	;279	>>279	<<278
264 187  ASSIGN/38                 ?104      16?13                #131                	;0
265 188  ECHO/40                   ?0        180:'															<option ' ?0                  	;0
266 189  FETCH_DIM_R/81            $133=     16?0                 181:'geoip_type'    	;0
267 189  IS_EQUAL/17               #134=     $133                 16?13               	;0
268 189  BOOL_NOT/13               #135=     #134                 ?0                  	;0
269 189  JMPZ/43                   ?0        #135                 ?272                	;0	>>272
270 190  NOP/0                     ?0        ?0                   ?0                  	;1
271 190  GOTO/253                  ?0        ?273                 ?182                	;0
272 192  ECHO/40                   ?0        183:'selected '      ?0                  	;0	<<269
273 194  ECHO/40                   ?0        184:'value="'        ?0                  	;0
274 195  ECHO/40                   ?0        16?13                ?0                  	;0
275 196  ECHO/40                   ?0        185:'">'             ?0                  	;0
276 197  ECHO/40                   ?0        16?12                ?0                  	;0
277 198  ECHO/40                   ?0        186:'</option>
															' ?0                  	;0
278 199  JMP/42                    ?0        ?263                 ?0                  	;0	>>263
279 199  FE_FREE/127               ?0        $130                 ?0                  	;0	<<262
280 201  GOTO/253                  ?0        ?709                 ?187                	;0
281 203  ECHO/40                   ?0        188:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="error_log">Error Log</label>
													<div class="col-md-8">
                                                        <textarea style="width: 100%;" rows="10" id="error_log" class="form-control" readonly>' ?0                  	;0
282 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'implode'       	;2
283 204  SEND_VAL_EX/116           ?80       191:'
'              ?1                  	;0
284 204  FETCH_DIM_FUNC_ARG/93     $136=     16?2                 192:'output'        	;2
285 204  SEND_VAR_EX/66            ?96       $136                 ?2                  	;0
286 204  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
287 204  ECHO/40                   ?0        $137                 ?0                  	;0
288 205  ECHO/40                   ?0        193:'</textarea>
                                                    </div>
												</div>
                                                ' ?0                  	;0
289 208  GOTO/253                  ?0        ?657                 ?194                	;0
290 210  ECHO/40                   ?0        195:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="enabled">Enabled <i title="Utilise this server for connections and streams." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input ' ?0                  	;0
291 211  FETCH_DIM_R/81            $138=     16?0                 196:'is_main'       	;0
292 211  BOOL_NOT/13               #139=     $138                 ?0                  	;0
293 211  JMPZ/43                   ?0        #139                 ?295                	;0	>>295
294 212  GOTO/253                  ?0        ?296                 ?197                	;0
295 214  ECHO/40                   ?0        198:'readonly '      ?0                  	;0	<<293
296 216  ECHO/40                   ?0        199:'name="enabled" id="enabled" type="checkbox" ' ?0                  	;0
297 217  GOTO/253                  ?0        ?26                  ?200                	;0
298 219  ECHO/40                   ?0        201:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="server_ip">Server IP <i title="This IP will be used for internal connections as well as broadcast if no domains are allocated." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="server_ip" name="server_ip" value="' ?0                  	;0
299 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'htmlspecialchars'	;1
300 220  FETCH_DIM_FUNC_ARG/93     $140=     16?0                 204:'server_ip'     	;1
301 220  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
302 220  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
303 220  ECHO/40                   ?0        $141                 ?0                  	;0
304 221  ECHO/40                   ?0        205:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="private_ip">Private IP <i title="Enter a private IP to route internal traffic between load balancers through the internal network." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="private_ip" name="private_ip" value="' ?0                  	;0
305 222  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'htmlspecialchars'	;1
306 222  FETCH_DIM_FUNC_ARG/93     $142=     16?0                 208:'private_ip'    	;1
307 222  SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
308 222  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
309 222  ECHO/40                   ?0        $143                 ?0                  	;0
310 223  ECHO/40                   ?0        209:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="total_clients">Max Clients <i title="Maximum number of simultaneous connections to allow on this server." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="total_clients" name="total_clients" value="' ?0                  	;0
311 224  GOTO/253                  ?0        ?367                 ?210                	;0
312 226  FETCH_DIM_R/81            $144=     16?0                 211:'https_broadcast_port'	;0
313 226  ECHO/40                   ?0        $144                 ?0                  	;0
314 227  ECHO/40                   ?0        212:'">'             ?0                  	;0
315 228  FETCH_DIM_R/81            $145=     16?0                 213:'https_broadcast_port'	;0
316 228  ECHO/40                   ?0        $145                 ?0                  	;0
317 229  ECHO/40                   ?0        214:'</option>
                                                            ' ?0                  	;0
318 231  GOTO/253                  ?0        ?47                  ?215                	;0
319 233  FETCH_STATIC_PROP_IS/176  $146=     216:'rRequest'       217:'XUI'           	;0
320 233  ISSET_ISEMPTY_DIM_OBJ/115 #147=     $146                 219:'id'            	;33554432
321 233  BOOL_NOT/13               #148=     #147                 ?0                  	;0
322 233  JMPNZ_EX/47               #148=     #148                 ?329                	;0	>>329
323 233  FETCH_STATIC_PROP_R/173   $149=     220:'rRequest'       221:'XUI'           	;0
324 233  FETCH_DIM_R/81            $150=     $149                 223:'id'            	;0
325 233  FETCH_DIM_R/81            $151=     16?14                $150                	;0
326 233  ASSIGN/38                 $152=     16?0                 $151                	;0
327 233  BOOL_NOT/13               #153=     $152                 ?0                  	;0
328 233  BOOL/52                   #148=     #153                 ?0                  	;0
329 233  BOOL_NOT/13               #154=     #148                 ?0                  	;0	<<322
330 233  JMPZ/43                   ?0        #154                 ?332                	;0	>>332
331 234  GOTO/253                  ?0        ?334                 ?224                	;0
332 236  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'E72F42A93714BA87'	;0	<<330
333 236  DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
334 238  ASSIGN/38                 ?128      16?11                227:array (
)       	;0
335 239  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'json_decode'   	;2
336 239  FETCH_DIM_FUNC_ARG/93     $157=     16?0                 230:'watchdog_data' 	;1
337 239  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
338 239  SEND_VAL_EX/116           ?96       231:true             ?2                  	;0
339 239  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
340 239  ASSIGN/38                 ?131      16?15                $158                	;0
341 240  GOTO/253                  ?0        ?438                 ?232                	;0
342 243  ECHO/40                   ?0        233:'													<label class="col-md-4 col-form-label" for="ip_field">Domains & IP\'s</label>
                                                    ' ?0                  	;0
343 245  ECHO/40                   ?0        234:'													<div class="col-md-8 input-group">
														<input type="text" id="ip_field" class="form-control" value="">
														<div class="input-group-append">
															<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="domain_name">&nbsp;</label>
													<div class="col-md-8">
														<select id="domain_name" name="domain_name[]" size=6 class="form-control" multiple="multiple">
														' ?0                  	;0
344 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'explode'       	;2
345 246  SEND_VAL_EX/116           ?80       237:','              ?1                  	;0
346 246  FETCH_DIM_FUNC_ARG/93     $160=     16?0                 238:'domain_name'   	;2
347 246  SEND_VAR_EX/66            ?96       $160                 ?2                  	;0
348 246  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
349 246  FE_RESET_R/77             $162=     $161                 ?365                	;0
350 246  FE_FETCH_R/78             ?0        $162                 16?16               	;365	>>365	<<364
351 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'strlen'        	;1
352 247  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
353 247  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
354 247  IS_SMALLER/19             #164=     241:0                $163                	;0
355 247  BOOL_NOT/13               #165=     #164                 ?0                  	;0
356 247  JMPZ/43                   ?0        #165                 ?359                	;0	>>359
357 248  NOP/0                     ?0        ?0                   ?0                  	;1
358 248  GOTO/253                  ?0        ?364                 ?242                	;0
359 250  ECHO/40                   ?0        243:'														<option value="' ?0                  	;0	<<356
360 251  ECHO/40                   ?0        16?16                ?0                  	;0
361 252  ECHO/40                   ?0        244:'">'             ?0                  	;0
362 253  ECHO/40                   ?0        16?16                ?0                  	;0
363 254  ECHO/40                   ?0        245:'</option>
														' ?0                  	;0
364 256  JMP/42                    ?0        ?350                 ?0                  	;0	>>350
365 256  FE_FREE/127               ?0        $162                 ?0                  	;0	<<349
366 258  GOTO/253                  ?0        ?89                  ?246                	;0
367 260  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'htmlspecialchars'	;1
368 260  FETCH_DIM_FUNC_ARG/93     $166=     16?0                 249:'total_clients' 	;1
369 260  SEND_VAR_EX/66            ?80       $166                 ?1                  	;0
370 260  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
371 260  ECHO/40                   ?0        $167                 ?0                  	;0
372 261  ECHO/40                   ?0        250:'" required data-parsley-trigger="change">
													</div>
													<label class="col-md-4 col-form-label" for="timeshift_only">Timeshift Only <i title="Don\'t allow connections to this server unless they are for timeshift." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="timeshift_only" id="timeshift_only" type="checkbox" ' ?0                  	;0
373 262  FETCH_DIM_R/81            $168=     16?0                 251:'timeshift_only'	;0
374 262  IS_EQUAL/17               #169=     $168                 252:1               	;0
375 262  BOOL_NOT/13               #170=     #169                 ?0                  	;0
376 262  JMPZ/43                   ?0        #170                 ?378                	;0	>>378
377 263  GOTO/253                  ?0        ?379                 ?253                	;0
378 265  ECHO/40                   ?0        254:'checked '       ?0                  	;0	<<376
379 267  GOTO/253                  ?0        ?290                 ?255                	;0
380 269  ECHO/40                   ?0        256:'                                                <input id="submit_server_ssl" type="button" class="btn btn-info" value="Generate SSL" />
                                                ' ?0                  	;0
381 271  ECHO/40                   ?0        257:'                                                <input name="submit_server" id="submit_button" type="submit" class="btn btn-primary" value="Save" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
382 272  GOTO/253                  ?0        ?752                 ?258                	;0
383 275  ECHO/40                   ?0        259:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                ' ?0                  	;0
384 277  INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'count'         	;1
385 277  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'json_decode'   	;2
386 277  FETCH_DIM_FUNC_ARG/93     $171=     16?0                 264:'governors'     	;1
387 277  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
388 277  SEND_VAL_EX/116           ?96       265:true             ?2                  	;0
389 277  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
390 277  SEND_VAR_NO_REF_EX/50     ?80       $172                 ?1                  	;0
391 277  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
392 277  IS_SMALLER/19             #174=     266:0                $173                	;0
393 277  BOOL_NOT/13               #175=     #174                 ?0                  	;0
394 277  JMPZ/43                   ?0        #175                 ?396                	;0	>>396
395 278  GOTO/253                  ?0        ?604                 ?267                	;0
396 280  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'json_decode'   	;2	<<394
397 280  FETCH_DIM_FUNC_ARG/93     $176=     16?0                 270:'governor'      	;1
398 280  SEND_VAR_EX/66            ?80       $176                 ?1                  	;0
399 280  SEND_VAL_EX/116           ?96       271:true             ?2                  	;0
400 280  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
401 280  ASSIGN/38                 ?150      16?7                 $177                	;0
402 281  GOTO/253                  ?0        ?144                 ?272                	;0
403 283  FETCH_DIM_R/81            $179=     16?0                 273:'id'            	;0
404 283  ECHO/40                   ?0        $179                 ?0                  	;0
405 284  ECHO/40                   ?0        274:'" />
                            <input type="hidden" id="regenerate_ssl" name="regenerate_ssl" value="0" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#server-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#additional_ips" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-web"></i>
                                            ' ?0                  	;0
406 285  FETCH_DIM_R/81            $180=     16?0                 275:'is_main'       	;0
407 285  BOOL_NOT/13               #181=     $180                 ?0                  	;0
408 285  JMPZ/43                   ?0        #181                 ?410                	;0	>>410
409 286  GOTO/253                  ?0        ?39                  ?276                	;0
410 288  ECHO/40                   ?0        277:'                                            <span class="d-none d-sm-inline">Domains</span>
                                            ' ?0                  	;0	<<408
411 289  GOTO/253                  ?0        ?40                  ?278                	;0
412 290  GOTO/253                  ?0        ?39                  ?279                	;0
413 293  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'C2B0C0f9DD458149'	;1
414 293  FETCH_DIM_FUNC_ARG/93     $182=     16?0                 282:'id'            	;1
415 293  SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
416 293  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
417 293  ASSIGN/38                 ?156      16?17                $183                	;0
418 294  ASSIGN/38                 ?157      16?18                283:false           	;0
419 295  FE_RESET_R/77             $186=     16?17                ?436                	;0
420 295  FE_FETCH_R/78             ?0        $186                 16?19               	;436	>>436	<<435
421 296  FETCH_DIM_R/81            $187=     16?19                284:'mount'         	;0
422 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'rtrim'         	;2
423 296  FETCH_CONSTANT/99         #188=     ?0                   287:'STREAMS_PATH'  	;16
424 296  SEND_VAL_EX/116           ?80       #188                 ?1                  	;0
425 296  SEND_VAL_EX/116           ?96       290:'/'              ?2                  	;0
426 296  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
427 296  IS_EQUAL/17               #190=     $187                 $189                	;0
428 296  BOOL_NOT/13               #191=     #190                 ?0                  	;0
429 296  JMPZ/43                   ?0        #191                 ?432                	;0	>>432
430 297  NOP/0                     ?0        ?0                   ?0                  	;1
431 297  GOTO/253                  ?0        ?435                 ?291                	;0
432 299  ASSIGN/38                 ?164      16?18                292:true            	;0	<<429
433 300  FE_FREE/127               ?0        $186                 ?6                  	;1
434 300  GOTO/253                  ?0        ?437                 ?293                	;0
435 302  JMP/42                    ?0        ?420                 ?0                  	;0	>>420
436 302  FE_FREE/127               ?0        $186                 ?0                  	;0	<<419
437 305  GOTO/253                  ?0        ?107                 ?294                	;0
438 307  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'intval'        	;1
439 307  FETCH_DIM_FUNC_ARG/93     $193=     16?15                297:'cpu_cores'     	;1
440 307  SEND_VAR_EX/66            ?80       $193                 ?1                  	;0
441 307  DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
442 307  IS_SMALLER/19             #195=     298:0                $194                	;0
443 307  JMPZ/43                   ?0        #195                 ?447                	;0	>>447
444 307  FETCH_DIM_R/81            $196=     16?15                299:'cpu_cores'     	;0
445 307  QM_ASSIGN/22              #197=     $196                 ?0                  	;0
446 307  JMP/42                    ?0        ?448                 ?0                  	;0	>>448
447 307  QM_ASSIGN/22              #197=     300:16               ?0                  	;0	<<443
448 307  ASSIGN/38                 ?170      16?20                #197                	;0	<<446
449 308  IS_SMALLER/19             #199=     16?20                301:4               	;0
450 308  BOOL_NOT/13               #200=     #199                 ?0                  	;0
451 308  JMPZ/43                   ?0        #200                 ?453                	;0	>>453
452 309  GOTO/253                  ?0        ?454                 ?302                	;0
453 311  ASSIGN/38                 ?173      16?20                303:4               	;0	<<451
454 313  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'json_decode'   	;2
455 313  FETCH_DIM_FUNC_ARG/93     $202=     16?0                 306:'interfaces'    	;1
456 313  SEND_VAR_EX/66            ?80       $202                 ?1                  	;0
457 313  SEND_VAL_EX/116           ?96       307:true             ?2                  	;0
458 313  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
459 313  ASSIGN/38                 ?176      16?11                $203                	;0
460 314  GOTO/253                  ?0        ?739                 ?308                	;0
461 317  ECHO/40                   ?0        309:'													<label class="col-md-4 col-form-label" for="random_ip">Serve Random IP / Domain</label>
													<div class="col-md-2">
														<input name="random_ip" id="random_ip" type="checkbox" ' ?0                  	;0
462 318  FETCH_DIM_R/81            $205=     16?0                 310:'random_ip'     	;0
463 318  IS_EQUAL/17               #206=     $205                 311:1               	;0
464 318  BOOL_NOT/13               #207=     #206                 ?0                  	;0
465 318  JMPZ/43                   ?0        #207                 ?467                	;0	>>467
466 319  GOTO/253                  ?0        ?468                 ?312                	;0
467 321  ECHO/40                   ?0        313:'checked '       ?0                  	;0	<<465
468 323  GOTO/253                  ?0        ?189                 ?314                	;0
469 325  FE_RESET_R/77             $208=     315:array (
  'high_priority' => 'High Priority',
  'low_priority' => 'Low Priority',
  'strict' => 'Strict',
) ?486                	;0
470 325  FE_FETCH_R/78             #209=     $208                 16?12               	;486	>>486	<<485
471 325  ASSIGN/38                 ?182      16?13                #209                	;0
472 326  ECHO/40                   ?0        316:'															<option ' ?0                  	;0
473 327  FETCH_DIM_R/81            $211=     16?0                 317:'isp_type'      	;0
474 327  IS_EQUAL/17               #212=     $211                 16?13               	;0
475 327  BOOL_NOT/13               #213=     #212                 ?0                  	;0
476 327  JMPZ/43                   ?0        #213                 ?479                	;0	>>479
477 328  NOP/0                     ?0        ?0                   ?0                  	;1
478 328  GOTO/253                  ?0        ?480                 ?318                	;0
479 330  ECHO/40                   ?0        319:'selected '      ?0                  	;0	<<476
480 332  ECHO/40                   ?0        320:'value="'        ?0                  	;0
481 333  ECHO/40                   ?0        16?13                ?0                  	;0
482 334  ECHO/40                   ?0        321:'">'             ?0                  	;0
483 335  ECHO/40                   ?0        16?12                ?0                  	;0
484 336  ECHO/40                   ?0        322:'</option>
															' ?0                  	;0
485 337  JMP/42                    ?0        ?470                 ?0                  	;0	>>470
486 337  FE_FREE/127               ?0        $208                 ?0                  	;0	<<469
487 340  ECHO/40                   ?0        323:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="isp_names">GeoISP Names <i title="Select which ISP\'s should be prioritised to this server. Enter the exact ISP name as it will have to match 100%, but case insensitive and only alphanumeric characters." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
                                                        <select name="isp_names[]" id="isp_names" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                            ' ?0                  	;0
488 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'json_decode'   	;2
489 341  FETCH_DIM_FUNC_ARG/93     $214=     16?0                 326:'isp_names'     	;1
490 341  SEND_VAR_EX/66            ?80       $214                 ?1                  	;0
491 341  SEND_VAL_EX/116           ?96       327:true             ?2                  	;0
492 341  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
493 341  ASSIGN/38                 ?188      16?21                $215                	;0
494 342  FE_RESET_R/77             $217=     16?21                ?502                	;0
495 342  FE_FETCH_R/78             ?0        $217                 16?22               	;502	>>502	<<501
496 343  ECHO/40                   ?0        328:'                                                            <option value="' ?0                  	;0
497 344  ECHO/40                   ?0        16?22                ?0                  	;0
498 345  ECHO/40                   ?0        329:'" selected="selected">' ?0                  	;0
499 346  ECHO/40                   ?0        16?22                ?0                  	;0
500 347  ECHO/40                   ?0        330:'</option>
                                                            ' ?0                  	;0
501 348  JMP/42                    ?0        ?495                 ?0                  	;0	>>495
502 348  FE_FREE/127               ?0        $217                 ?0                  	;0	<<494
503 350  GOTO/253                  ?0        ?563                 ?331                	;0
504 352  ECHO/40                   ?0        332:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
											</div>
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
                                                <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="performance">
										<div class="row">
											<div class="col-12">
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="php_version">PHP Version <i title="Which version of PHP 7 to use." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="php_version_num" id="php_version" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
505 353  FE_RESET_R/77             $218=     333:array (
  0 => 
  array (
    0 => '72',
    1 => 'PHP 7.2.34',
  ),
  1 => 
  array (
    0 => '74',
    1 => 'PHP 7.4.10',
  ),
) ?524                	;0
506 353  FE_FETCH_R/78             ?0        $218                 16?23               	;524	>>524	<<523
507 354  ECHO/40                   ?0        334:'															<option ' ?0                  	;0
508 355  FETCH_DIM_R/81            $219=     16?0                 335:'php_version'   	;0
509 355  FETCH_DIM_R/81            $220=     16?23                336:0               	;0
510 355  IS_EQUAL/17               #221=     $219                 $220                	;0
511 355  BOOL_NOT/13               #222=     #221                 ?0                  	;0
512 355  JMPZ/43                   ?0        #222                 ?515                	;0	>>515
513 356  NOP/0                     ?0        ?0                   ?0                  	;1
514 356  GOTO/253                  ?0        ?516                 ?337                	;0
515 358  ECHO/40                   ?0        338:'selected '      ?0                  	;0	<<512
516 360  ECHO/40                   ?0        339:'value="'        ?0                  	;0
517 361  FETCH_DIM_R/81            $223=     16?23                340:0               	;0
518 361  ECHO/40                   ?0        $223                 ?0                  	;0
519 362  ECHO/40                   ?0        341:'">'             ?0                  	;0
520 363  FETCH_DIM_R/81            $224=     16?23                342:1               	;0
521 363  ECHO/40                   ?0        $224                 ?0                  	;0
522 364  ECHO/40                   ?0        343:'</option>
															' ?0                  	;0
523 365  JMP/42                    ?0        ?506                 ?0                  	;0	>>506
524 365  FE_FREE/127               ?0        $218                 ?0                  	;0	<<505
525 368  ECHO/40                   ?0        344:'														</select>
													</div>
													<label class="col-md-4 col-form-label" for="total_services">PHP Services <i title="How many PHP-FPM daemons to run on this server. You can use up to a maximum of one per core." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="total_services" id="total_services" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
526 369  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'range'         	;2
527 369  SEND_VAL_EX/116           ?80       347:1                ?1                  	;0
528 369  SEND_VAR_EX/66            ?96       16?20                ?2                  	;0
529 369  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
530 369  FE_RESET_R/77             $226=     $225                 ?561                	;0
531 369  FE_FETCH_R/78             ?0        $226                 16?24               	;561	>>561	<<560
532 370  NOP/0                     ?0        ?0                   ?0                  	;1
533 370  GOTO/253                  ?0        ?534                 ?348                	;0
534 372  ECHO/40                   ?0        349:'															<option ' ?0                  	;0
535 373  FETCH_DIM_R/81            $227=     16?0                 350:'total_services'	;0
536 373  IS_EQUAL/17               #228=     $227                 16?24               	;0
537 373  JMPZ/43                   ?0        #228                 ?540                	;0	>>540
538 374  NOP/0                     ?0        ?0                   ?0                  	;1
539 374  GOTO/253                  ?0        ?550                 ?351                	;0
540 376  IS_EQUAL/17               #229=     16?24                352:4               	;0	<<537
541 376  BOOL_NOT/13               #230=     #229                 ?0                  	;0
542 376  JMPZ/43                   ?0        #230                 ?545                	;0	>>545
543 377  NOP/0                     ?0        ?0                   ?0                  	;1
544 377  GOTO/253                  ?0        ?546                 ?353                	;0
545 379  ECHO/40                   ?0        354:'selected '      ?0                  	;0	<<542
546 381  NOP/0                     ?0        ?0                   ?0                  	;1
547 381  GOTO/253                  ?0        ?548                 ?355                	;0
548 383  NOP/0                     ?0        ?0                   ?0                  	;1
549 383  GOTO/253                  ?0        ?551                 ?356                	;0
550 385  ECHO/40                   ?0        357:'selected '      ?0                  	;0
551 387  ECHO/40                   ?0        358:'value="'        ?0                  	;0
552 388  NOP/0                     ?0        ?0                   ?0                  	;1
553 388  GOTO/253                  ?0        ?554                 ?359                	;0
554 390  ECHO/40                   ?0        16?24                ?0                  	;0
555 391  ECHO/40                   ?0        360:'">'             ?0                  	;0
556 392  ECHO/40                   ?0        16?24                ?0                  	;0
557 393  ECHO/40                   ?0        361:'</option>
															' ?0                  	;0
558 395  NOP/0                     ?0        ?0                   ?0                  	;1
559 395  GOTO/253                  ?0        ?560                 ?362                	;0
560 396  JMP/42                    ?0        ?531                 ?0                  	;0	>>531
561 396  FE_FREE/127               ?0        $226                 ?0                  	;0	<<530
562 398  GOTO/253                  ?0        ?1                   ?363                	;0
563 401  ECHO/40                   ?0        364:'                                                        </select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="enable_isp">GeoISP Load Balancing <i title="Route connections to this server based on the ISP of the client." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_isp" id="enable_isp" type="checkbox" ' ?0                  	;0
564 402  FETCH_DIM_R/81            $231=     16?0                 365:'enable_isp'    	;0
565 402  IS_EQUAL/17               #232=     $231                 366:1               	;0
566 402  BOOL_NOT/13               #233=     #232                 ?0                  	;0
567 402  JMPZ/43                   ?0        #233                 ?569                	;0	>>569
568 403  GOTO/253                  ?0        ?570                 ?367                	;0
569 405  ECHO/40                   ?0        368:'checked '       ?0                  	;0	<<567
570 407  GOTO/253                  ?0        ?504                 ?369                	;0
571 409  BOOL_NOT/13               #234=     16?1                 ?0                  	;0
572 409  JMPZ/43                   ?0        #234                 ?574                	;0	>>574
573 410  GOTO/253                  ?0        ?575                 ?370                	;0
574 412  ECHO/40                   ?0        371:'                                                <input id="submit_server_ssl" type="button" class="btn btn-info" value="Force Update SSL" />
                                                ' ?0                  	;0	<<572
575 414  GOTO/253                  ?0        ?381                 ?372                	;0
576 416  GOTO/253                  ?0        ?380                 ?373                	;0
577 418  ECHO/40                   ?0        374:' style="display: none;"' ?0                  	;0
578 420  ECHO/40                   ?0        375:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
579 421  INCLUDE_OR_EVAL/73        ?207      376:'topbar.php'     ?0                  	;2
580 422  ECHO/40                   ?0        377:'					</div>
					<h4 class="page-title">Edit Server</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							<input type="hidden" name="edit" value="' ?0                  	;0
581 423  GOTO/253                  ?0        ?403                 ?378                	;0
582 425  ECHO/40                   ?0        379:'</option>
															' ?0                  	;0
583 426  INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'json_decode'   	;2
584 426  FETCH_DIM_FUNC_ARG/93     $236=     16?0                 382:'governors'     	;1
585 426  SEND_VAR_EX/66            ?80       $236                 ?1                  	;0
586 426  SEND_VAL_EX/116           ?96       383:true             ?2                  	;0
587 426  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
588 426  FE_RESET_R/77             $238=     $237                 ?602                	;0
589 426  FE_FETCH_R/78             ?0        $238                 16?25               	;602	>>602	<<601
590 427  FETCH_DIM_R/81            $239=     16?7                 384:2               	;0
591 427  IS_NOT_EQUAL/18           #240=     16?25                $239                	;0
592 427  BOOL_NOT/13               #241=     #240                 ?0                  	;0
593 427  JMPZ/43                   ?0        #241                 ?596                	;0	>>596
594 428  NOP/0                     ?0        ?0                   ?0                  	;1
595 428  GOTO/253                  ?0        ?601                 ?385                	;0
596 430  ECHO/40                   ?0        386:'															<option value="' ?0                  	;0	<<593
597 431  ECHO/40                   ?0        16?25                ?0                  	;0
598 432  ECHO/40                   ?0        387:'">'             ?0                  	;0
599 433  ECHO/40                   ?0        16?25                ?0                  	;0
600 434  ECHO/40                   ?0        388:'</option>
															' ?0                  	;0
601 436  JMP/42                    ?0        ?589                 ?0                  	;0	>>589
602 436  FE_FREE/127               ?0        $238                 ?0                  	;0	<<588
603 439  ECHO/40                   ?0        389:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
604 441  GOTO/253                  ?0        ?605                 ?390                	;0
605 443  ECHO/40                   ?0        391:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="sysctl">Custom Sysctl.conf  <i title="Write a custom sysctl.conf to the server. You can break your server by inputting incorrect values here, this is for advanced usage only. The Default template is provided for restorative and informative purposes." class="tooltip text-secondary far fa-circle"></i><br/><br/><input onClick="setDefault();" type="button" class="btn btn-light btn-xs" value="Default" /></label>
													<div class="col-md-8">
														<textarea class="form-control" id="sysctl" name="sysctl" rows="16">' ?0                  	;0
606 444  FETCH_DIM_R/81            $242=     16?0                 392:'sysctl'        	;0
607 444  ECHO/40                   ?0        $242                 ?0                  	;0
608 445  ECHO/40                   ?0        393:'</textarea>
													</div>
												</div>
											</div>
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
                                                <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="ssl-certificate">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="expiration_date">Expiration Date</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="expiration_date" value="' ?0                  	;0
609 446  ECHO/40                   ?0        16?9                 ?0                  	;0
610 447  ECHO/40                   ?0        394:'" readonly>
													</div>
												</div>
                                                ' ?0                  	;0
611 448  GOTO/253                  ?0        ?97                  ?395                	;0
612 450  INIT_FCALL_BY_NAME/59     ?0        ?0                   396:'explode'       	;2
613 450  SEND_VAL_EX/116           ?80       398:','              ?1                  	;0
614 450  FETCH_DIM_FUNC_ARG/93     $243=     16?0                 399:'http_ports_add'	;2
615 450  SEND_VAR_EX/66            ?96       $243                 ?2                  	;0
616 450  DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
617 450  FE_RESET_R/77             $245=     $244                 ?638                	;0
618 450  FE_FETCH_R/78             ?0        $245                 16?3                	;638	>>638	<<637
619 451  INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'is_numeric'    	;1
620 451  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
621 451  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
622 451  JMPZ_EX/46                #247=     $246                 ?625                	;0	>>625
623 451  IS_SMALLER_OR_EQUAL/20    #248=     402:80               16?3                	;0
624 451  BOOL/52                   #247=     #248                 ?0                  	;0
625 451  JMPZ_EX/46                #247=     #247                 ?628                	;0	>>628	<<622
626 451  IS_SMALLER_OR_EQUAL/20    #249=     16?3                 403:65535           	;0
627 451  BOOL/52                   #247=     #249                 ?0                  	;0
628 451  BOOL_NOT/13               #250=     #247                 ?0                  	;0	<<625
629 451  JMPZ/43                   ?0        #250                 ?632                	;0	>>632
630 452  NOP/0                     ?0        ?0                   ?0                  	;1
631 452  GOTO/253                  ?0        ?637                 ?404                	;0
632 454  ECHO/40                   ?0        405:'                                                            <option selected value="' ?0                  	;0	<<629
633 455  ECHO/40                   ?0        16?3                 ?0                  	;0
634 456  ECHO/40                   ?0        406:'">'             ?0                  	;0
635 457  ECHO/40                   ?0        16?3                 ?0                  	;0
636 458  ECHO/40                   ?0        407:'</option>
                                                            ' ?0                  	;0
637 460  JMP/42                    ?0        ?618                 ?0                  	;0	>>618
638 460  FE_FREE/127               ?0        $245                 ?0                  	;0	<<617
639 463  ECHO/40                   ?0        408:'                                                        </select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="https_broadcast_ports">HTTPS Ports <i title="Enter one or more port numbers between 80 and 65535." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="https_broadcast_ports[]" id="https_broadcast_ports" class="form-control col-md-12 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                            ' ?0                  	;0
640 464  INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'is_numeric'    	;1
641 464  FETCH_DIM_FUNC_ARG/93     $251=     16?0                 411:'https_broadcast_port'	;1
642 464  SEND_VAR_EX/66            ?80       $251                 ?1                  	;0
643 464  DO_FCALL_BY_NAME/131      $252=     ?0                   ?0                  	;0
644 464  JMPZ_EX/46                #253=     $252                 ?648                	;0	>>648
645 464  FETCH_DIM_R/81            $254=     16?0                 412:'https_broadcast_port'	;0
646 464  IS_SMALLER_OR_EQUAL/20    #255=     413:80               $254                	;0
647 464  BOOL/52                   #253=     #255                 ?0                  	;0
648 464  JMPZ_EX/46                #253=     #253                 ?652                	;0	>>652	<<644
649 464  FETCH_DIM_R/81            $256=     16?0                 414:'https_broadcast_port'	;0
650 464  IS_SMALLER_OR_EQUAL/20    #257=     $256                 415:65535           	;0
651 464  BOOL/52                   #253=     #257                 ?0                  	;0
652 464  BOOL_NOT/13               #258=     #253                 ?0                  	;0	<<648
653 464  JMPZ/43                   ?0        #258                 ?655                	;0	>>655
654 465  GOTO/253                  ?0        ?318                 ?416                	;0
655 467  ECHO/40                   ?0        417:'                                                            <option selected value="' ?0                  	;0	<<653
656 468  GOTO/253                  ?0        ?312                 ?418                	;0
657 470  JMPZ/43                   ?0        16?1                 ?659                	;0	>>659
658 471  GOTO/253                  ?0        ?660                 ?419                	;0
659 473  ECHO/40                   ?0        420:'                                                <div class="alert alert-info mb-4" role="alert">
                                                    You can use Certbot to automatically generate a valid SSL certificate for your server by clicking the Generate Certificate button below. This will instruct XUI to attempt to generate certificates for each of the domain names listed in the Domains section.<br/><br/><strong>Please save your changes before clicking the Generate button to ensure the correct domains are used.</strong>
                                                </div>
                                                ' ?0                  	;0	<<657
660 475  ECHO/40                   ?0        421:'											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
                                            <li class="list-inline-item float-right">
                                                ' ?0                  	;0
661 476  BOOL_NOT/13               #259=     16?1                 ?0                  	;0
662 476  JMPZ_EX/46                #259=     #259                 ?673                	;0	>>673
663 476  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'count'         	;1
664 476  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'explode'       	;2
665 476  SEND_VAL_EX/116           ?80       426:','              ?1                  	;0
666 476  FETCH_DIM_FUNC_ARG/93     $260=     16?0                 427:'domain_name'   	;2
667 476  SEND_VAR_EX/66            ?96       $260                 ?2                  	;0
668 476  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
669 476  SEND_VAR_NO_REF_EX/50     ?80       $261                 ?1                  	;0
670 476  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
671 476  IS_SMALLER/19             #263=     428:0                $262                	;0
672 476  BOOL/52                   #259=     #263                 ?0                  	;0
673 476  JMPZ/43                   ?0        #259                 ?675                	;0	>>675	<<662
674 477  GOTO/253                  ?0        ?576                 ?429                	;0
675 479  GOTO/253                  ?0        ?571                 ?430                	;0	<<673
676 481  JMPZ/43                   ?0        16?18                ?678                	;0	>>678
677 482  GOTO/253                  ?0        ?679                 ?431                	;0
678 484  ECHO/40                   ?0        432:'checked '       ?0                  	;0	<<676
679 486  ECHO/40                   ?0        433:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="network_interface">Network Interface <i title="Which network interface to use for statistics." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="network_interface" id="network_interface" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
680 487  INIT_FCALL_BY_NAME/59     ?0        ?0                   434:'array_merge'   	;2
681 487  SEND_VAL_EX/116           ?80       436:array (
  0 => 'auto',
) ?1                  	;0
682 487  INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'json_decode'   	;2
683 487  FETCH_DIM_FUNC_ARG/93     $264=     16?0                 439:'interfaces'    	;1
684 487  SEND_VAR_EX/66            ?80       $264                 ?1                  	;0
685 487  SEND_VAL_EX/116           ?96       440:true             ?2                  	;0
686 487  DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
687 487  JMP_SET/152               #266=     $265                 ?689                	;0
688 487  QM_ASSIGN/22              #266=     441:array (
)        ?0                  	;0
689 487  SEND_VAL_EX/116           ?96       #266                 ?2                  	;0
690 487  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
691 487  FE_RESET_R/77             $268=     $267                 ?707                	;0
692 487  FE_FETCH_R/78             ?0        $268                 16?26               	;707	>>707	<<706
693 488  ECHO/40                   ?0        442:'															<option ' ?0                  	;0
694 489  FETCH_DIM_R/81            $269=     16?0                 443:'network_interface'	;0
695 489  IS_EQUAL/17               #270=     $269                 16?26               	;0
696 489  BOOL_NOT/13               #271=     #270                 ?0                  	;0
697 489  JMPZ/43                   ?0        #271                 ?700                	;0	>>700
698 490  NOP/0                     ?0        ?0                   ?0                  	;1
699 490  GOTO/253                  ?0        ?701                 ?444                	;0
700 492  ECHO/40                   ?0        445:'selected '      ?0                  	;0	<<697
701 494  ECHO/40                   ?0        446:'value="'        ?0                  	;0
702 495  ECHO/40                   ?0        16?26                ?0                  	;0
703 496  ECHO/40                   ?0        447:'">'             ?0                  	;0
704 497  ECHO/40                   ?0        16?26                ?0                  	;0
705 498  ECHO/40                   ?0        448:'</option>
															' ?0                  	;0
706 499  JMP/42                    ?0        ?692                 ?0                  	;0	>>692
707 499  FE_FREE/127               ?0        $268                 ?0                  	;0	<<691
708 501  GOTO/253                  ?0        ?255                 ?449                	;0
709 504  ECHO/40                   ?0        450:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="geoip_countries">GeoIP Countries <i title="Select which countries should be prioritised to this server." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="geoip_countries[]" id="geoip_countries" class="form-control select2 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
710 505  INIT_FCALL_BY_NAME/59     ?0        ?0                   451:'json_decode'   	;2
711 505  FETCH_DIM_FUNC_ARG/93     $272=     16?0                 453:'geoip_countries'	;1
712 505  SEND_VAR_EX/66            ?80       $272                 ?1                  	;0
713 505  SEND_VAL_EX/116           ?96       454:true             ?2                  	;0
714 505  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
715 505  ASSIGN/38                 ?246      16?21                $273                	;0
716 506  FE_RESET_R/77             $275=     16?5                 ?737                	;0
717 506  FE_FETCH_R/78             ?0        $275                 16?27               	;737	>>737	<<736
718 507  ECHO/40                   ?0        455:'															<option ' ?0                  	;0
719 508  INIT_FCALL_BY_NAME/59     ?0        ?0                   456:'in_array'      	;2
720 508  FETCH_DIM_FUNC_ARG/93     $276=     16?27                458:'id'            	;1
721 508  SEND_VAR_EX/66            ?80       $276                 ?1                  	;0
722 508  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
723 508  DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
724 508  BOOL_NOT/13               #278=     $277                 ?0                  	;0
725 508  JMPZ/43                   ?0        #278                 ?728                	;0	>>728
726 509  NOP/0                     ?0        ?0                   ?0                  	;1
727 509  GOTO/253                  ?0        ?729                 ?459                	;0
728 511  ECHO/40                   ?0        460:'selected '      ?0                  	;0	<<725
729 513  ECHO/40                   ?0        461:'value="'        ?0                  	;0
730 514  FETCH_DIM_R/81            $279=     16?27                462:'id'            	;0
731 514  ECHO/40                   ?0        $279                 ?0                  	;0
732 515  ECHO/40                   ?0        463:'">'             ?0                  	;0
733 516  FETCH_DIM_R/81            $280=     16?27                464:'name'          	;0
734 516  ECHO/40                   ?0        $280                 ?0                  	;0
735 517  ECHO/40                   ?0        465:'</option>
															' ?0                  	;0
736 518  JMP/42                    ?0        ?717                 ?0                  	;0	>>717
737 518  FE_FREE/127               ?0        $275                 ?0                  	;0	<<716
738 521  GOTO/253                  ?0        ?135                 ?466                	;0
739 523  INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'json_decode'   	;2
740 523  FETCH_DIM_FUNC_ARG/93     $281=     16?0                 469:'certbot_ssl'   	;1
741 523  SEND_VAR_EX/66            ?80       $281                 ?1                  	;0
742 523  SEND_VAL_EX/116           ?96       470:true             ?2                  	;0
743 523  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
744 523  ASSIGN/38                 ?255      16?4                 $282                	;0
745 524  ASSIGN/38                 ?256      16?1                 471:false           	;0
746 525  FETCH_DIM_R/81            $285=     16?4                 472:'expiration'    	;0
747 525  JMPZ/43                   ?0        $285                 ?749                	;0	>>749
748 526  GOTO/253                  ?0        ?209                 ?473                	;0
749 528  ASSIGN/38                 ?258      16?8                 474:false           	;0	<<747
750 529  ASSIGN/38                 ?259      16?9                 475:'No Certificate Installed'	;0
751 530  GOTO/253                  ?0        ?208                 ?476                	;0
752 532  INCLUDE_OR_EVAL/73        ?260      477:'footer.php'     ?0                  	;2
753 533  NOP/0                     ?0        478:1                ?0                  	;4294967295
*/

?>