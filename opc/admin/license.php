<?php


function getServerInfo()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   314  BIND_GLOBAL/168           ?0        16?0                 0:'B011a3b12114e3e5'	;0
	1   315  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'json_decode'     	;2
	2   315  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'shell_exec'      	;1
	3   315  SEND_VAL_EX/116           ?80       5:'ip --json address list' ?1                  	;0
	4   315  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	5   315  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
	6   315  SEND_VAL_EX/116           ?96       6:true               ?2                  	;0
	7   315  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	8   315  ASSIGN/38                 ?2        16?1                 $8                  	;0
	9   316  ASSIGN/38                 ?3        16?2                 7:false             	;0
	10  317  ASSIGN/38                 ?4        16?3                 8:NULL              	;0
	11  318  ASSIGN/38                 ?5        16?4                 9:NULL              	;0
	12  319  FE_RESET_R/77             $13=      16?1                 ?70                 	;0
	13  319  FE_FETCH_R/78             ?0        $13                  16?5                	;70	>>70	<<69
	14  320  FETCH_DIM_R/81            $14=      16?5                 10:'addr_info'      	;0
	15  320  FE_RESET_R/77             $15=      $14                  ?68                 	;0
	16  320  FE_FETCH_R/78             ?0        $15                  16?6                	;68	>>68	<<67
	17  321  NOP/0                     ?0        ?0                   ?0                  	;1
	18  321  NOP/0                     ?0        ?0                   ?0                  	;1
	19  321  GOTO/253                  ?0        ?20                  ?11                 	;0
	20  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'filter_var'     	;2
	21  323  FETCH_DIM_FUNC_ARG/93     $16=      16?5                 14:'address'        	;1
	22  323  SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
	23  323  FETCH_CONSTANT/99         #17=      ?0                   15:'FILTER_VALIDATE_MAC'	;16
	24  323  SEND_VAL_EX/116           ?96       #17                  ?2                  	;0
	25  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	26  323  JMPZ_EX/46                #19=      $18                  ?30                 	;0	>>30
	27  323  FETCH_DIM_R/81            $20=      16?5                 18:'address'        	;0
	28  323  IS_NOT_EQUAL/18           #21=      $20                  19:'00:00:00:00:00:00'	;0
	29  323  BOOL/52                   #19=      #21                  ?0                  	;0
	30  323  BOOL_NOT/13               #22=      #19                  ?0                  	;0	<<26
	31  323  JMPZ/43                   ?0        #22                  ?35                 	;0	>>35
	32  324  NOP/0                     ?0        ?0                   ?0                  	;1
	33  324  NOP/0                     ?0        ?0                   ?0                  	;1
	34  324  GOTO/253                  ?0        ?55                  ?20                 	;0
	35  326  FETCH_DIM_R/81            $23=      16?6                 21:'local'          	;0	<<31
	36  326  IS_EQUAL/17               #24=      $23                  16?0                	;0
	37  326  JMPZ/43                   ?0        #24                  ?41                 	;0	>>41
	38  327  NOP/0                     ?0        ?0                   ?0                  	;1
	39  327  NOP/0                     ?0        ?0                   ?0                  	;1
	40  327  GOTO/253                  ?0        ?61                  ?22                 	;0
	41  329  JMPZ/43                   ?0        16?3                 ?45                 	;0	>>45	<<37
	42  330  NOP/0                     ?0        ?0                   ?0                  	;1
	43  330  NOP/0                     ?0        ?0                   ?0                  	;1
	44  330  GOTO/253                  ?0        ?58                  ?23                 	;0
	45  332  FETCH_DIM_R/81            $25=      16?5                 24:'address'        	;0	<<41
	46  332  ASSIGN/38                 ?19       16?3                 $25                 	;0
	47  333  FETCH_DIM_R/81            $27=      16?6                 25:'local'          	;0
	48  333  ASSIGN/38                 ?21       16?4                 $27                 	;0
	49  334  NOP/0                     ?0        ?0                   ?0                  	;1
	50  334  NOP/0                     ?0        ?0                   ?0                  	;1
	51  334  GOTO/253                  ?0        ?58                  ?26                 	;0
	52  336  FE_FREE/127               ?0        $15                  ?1                  	;1
	53  336  FE_FREE/127               ?0        $13                  ?0                  	;1
	54  336  GOTO/253                  ?0        ?71                  ?27                 	;0
	55  340  NOP/0                     ?0        ?0                   ?0                  	;1
	56  340  NOP/0                     ?0        ?0                   ?0                  	;1
	57  340  GOTO/253                  ?0        ?67                  ?28                 	;0
	58  343  NOP/0                     ?0        ?0                   ?0                  	;1
	59  343  NOP/0                     ?0        ?0                   ?0                  	;1
	60  343  GOTO/253                  ?0        ?55                  ?29                 	;0
	61  345  FETCH_DIM_R/81            $29=      16?5                 30:'address'        	;0
	62  345  ASSIGN/38                 ?23       16?3                 $29                 	;0
	63  346  ASSIGN/38                 ?24       16?2                 31:true             	;0
	64  347  NOP/0                     ?0        ?0                   ?0                  	;1
	65  347  NOP/0                     ?0        ?0                   ?0                  	;1
	66  347  GOTO/253                  ?0        ?52                  ?32                 	;0
	67  348  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
	68  348  FE_FREE/127               ?0        $15                  ?0                  	;0	<<15
	69  351  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
	70  351  FE_FREE/127               ?0        $13                  ?0                  	;0	<<12
	71  354  INIT_ARRAY/71             #32=      16?3                 ?0                  	;16
	72  354  ADD_ARRAY_ELEMENT/72      #32=      16?2                 ?0                  	;0
	73  354  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'trim'           	;1
	74  354  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'explode'        	;2
	75  354  SEND_VAL_EX/116           ?80       37:'
'               ?1                  	;0
	76  354  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'shell_exec'     	;1
	77  354  SEND_VAL_EX/116           ?80       40:'../bin/blkid -o value -s UUID' ?1                  	;0
	78  354  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	79  354  SEND_VAR_NO_REF_EX/50     ?96       $33                  ?2                  	;0
	80  354  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	81  354  SEPARATE/156              $34=      $34                  ?0                  	;0
	82  354  FETCH_DIM_FUNC_ARG/93     $35=      $34                  41:0                	;1
	83  354  SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
	84  354  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	85  354  ADD_ARRAY_ELEMENT/72      #32=      $36                  ?0                  	;0
	86  354  ADD_ARRAY_ELEMENT/72      #32=      16?4                 ?0                  	;0
	87  354  RETURN/62                 ?0        #32                  ?0                  	;0
	88  355  NOP/0                     ?0        42:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?322                 ?0                  	;0	>>322
1   5    FETCH_DIM_R/81            $13=      16?0                 1:'error'           	;0
2   5    IS_EQUAL/17               #14=      $13                  2:'STATUS_INVALID_LICENSE'	;0
3   5    JMPZ/43                   ?0        #14                  ?5                  	;0	>>5
4   6    GOTO/253                  ?0        ?43                  ?3                  	;0
5   8    FETCH_DIM_R/81            $15=      16?0                 4:'error'           	;0	<<3
6   8    IS_EQUAL/17               #16=      $15                  5:'STATUS_BILLING_INACTIVE'	;0
7   8    JMPZ/43                   ?0        #16                  ?9                  	;0	>>9
8   9    GOTO/253                  ?0        ?133                 ?6                  	;0
9   11   FETCH_DIM_R/81            $17=      16?0                 7:'error'           	;0	<<7
10  11   IS_EQUAL/17               #18=      $17                  8:'STATUS_INVALID_MAC'	;0
11  11   JMPZ/43                   ?0        #18                  ?13                 	;0	>>13
12  12   GOTO/253                  ?0        ?131                 ?9                  	;0
13  14   FETCH_DIM_R/81            $19=      16?0                 10:'error'          	;0	<<11
14  14   IS_EQUAL/17               #20=      $19                  11:'STATUS_INVALID_IP'	;0
15  14   JMPZ/43                   ?0        #20                  ?17                 	;0	>>17
16  15   GOTO/253                  ?0        ?242                 ?12                 	;0
17  17   FETCH_DIM_R/81            $21=      16?0                 13:'error'          	;0	<<15
18  17   IS_EQUAL/17               #22=      $21                  14:'STATUS_REVOKED' 	;0
19  17   JMPZ/43                   ?0        #22                  ?21                 	;0	>>21
20  18   GOTO/253                  ?0        ?287                 ?15                 	;0
21  20   GOTO/253                  ?0        ?186                 ?16                 	;0	<<19
22  22   ECHO/40                   ?0        17:'                                        <div class="form-group row mt-4 mb-4">
                                            <label class="col-md-4 col-form-label" for="whmcs_license">WHMCS License</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="whmcs_license" name="whmcs_license" maxlength="16" value="' ?0                  	;0
23  23   ECHO/40                   ?0        16?1                 ?0                  	;0
24  24   ECHO/40                   ?0        18:'">
                                            </div>
                                        </div>
                                        ' ?0                  	;0
25  26   JMPZ/43                   ?0        16?2                 ?27                 	;0	>>27
26  27   GOTO/253                  ?0        ?284                 ?19                 	;0
27  29   GOTO/253                  ?0        ?31                  ?20                 	;0	<<25
28  32   ECHO/40                   ?0        21:'<strong>Licensing Failed:</strong> Licensing system failed to decrypt the request.' ?0                  	;0
29  34   GOTO/253                  ?0        ?85                  ?22                 	;0
30  36   GOTO/253                  ?0        ?84                  ?23                 	;0
31  38   FETCH_DIM_R/81            $23=      16?3                 24:0                	;0
32  38   BOOL_NOT/13               #24=      $23                  ?0                  	;0
33  38   JMPZ/43                   ?0        #24                  ?35                 	;0	>>35
34  39   GOTO/253                  ?0        ?283                 ?25                 	;0
35  41   ECHO/40                   ?0        26:'                                        <div class="form-group row mb-4">
                                            <label class="col-md-4 col-form-label" for="server_ip">Server IP</label>
                                            <div class="col-md-8">
                                                <input id="server_ip" type="text" class="form-control"  value="' ?0                  	;0	<<33
36  42   ECHO/40                   ?0        16?4                 ?0                  	;0
37  43   ECHO/40                   ?0        27:'" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-md-4 col-form-label" for="mac_address">MAC Address</label>
                                            <div class="col-md-8">
                                                <input id="mac_address" type="text" class="form-control"  value="' ?0                  	;0
38  44   FETCH_DIM_R/81            $25=      16?3                 28:0                	;0
39  44   ECHO/40                   ?0        $25                  ?0                  	;0
40  45   GOTO/253                  ?0        ?282                 ?29                 	;0
41  47   ECHO/40                   ?0        30:'<strong>Licensing Failed:</strong> This license is no longer active, please check your billing details.' ?0                  	;0
42  49   GOTO/253                  ?0        ?155                 ?31                 	;0
43  51   ECHO/40                   ?0        32:'<strong>Licensing Failed:</strong> Invalid license key entered.' ?0                  	;0
44  52   GOTO/253                  ?0        ?155                 ?33                 	;0
45  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'explode'        	;2
46  54   SEND_VAL_EX/116           ?80       36:'
'               ?1                  	;0
47  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'file_get_contents'	;1
48  54   SEND_VAL_EX/116           ?80       39:'../config/config.ini' ?1                  	;0
49  54   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
50  54   SEND_VAR_NO_REF_EX/50     ?96       $26                  ?2                  	;0
51  54   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
52  54   ASSIGN/38                 ?15       16?5                 $27                 	;0
53  55   FE_RESET_R/77             $29=      16?5                 ?75                 	;0
54  55   FE_FETCH_R/78             ?0        $29                  16?6                	;75	>>75	<<74
55  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'strtolower'     	;1
56  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'substr'         	;3
57  56   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
58  56   SEND_VAL_EX/116           ?96       44:0                 ?2                  	;0
59  56   SEND_VAL_EX/116           ?112      45:7                 ?3                  	;0
60  56   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
61  56   SEND_VAR_NO_REF_EX/50     ?80       $30                  ?1                  	;0
62  56   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
63  56   IS_EQUAL/17               #32=      $31                  46:'license'        	;0
64  56   BOOL_NOT/13               #33=      #32                  ?0                  	;0
65  56   JMPZ/43                   ?0        #33                  ?68                 	;0	>>68
66  57   NOP/0                     ?0        ?0                   ?0                  	;1
67  57   GOTO/253                  ?0        ?72                  ?47                 	;0
68  59   CONCAT/8                  #34=      48:'license     =   "' 16?1                	;0	<<65
69  59   CONCAT/8                  #35=      #34                  49:'"'              	;0
70  59   ASSIGN/38                 ?23       16?6                 #35                 	;0
71  60   ASSIGN/38                 ?24       16?7                 50:true             	;0
72  62   ASSIGN_DIM/147            ?25       16?8                 ?1148050880         	;0
73  62   OP_DATA/137               ?0        16?6                 ?0                  	;0
74  63   JMP/42                    ?0        ?54                  ?0                  	;0	>>54
75  63   FE_FREE/127               ?0        $29                  ?0                  	;0	<<53
76  66   JMPZ/43                   ?0        16?7                 ?78                 	;0	>>78
77  67   GOTO/253                  ?0        ?118                 ?51                 	;0
78  69   ASSIGN/38                 ?26       16?0                 52:array (
  'status' => false,
  'error' => 'STATUS_WRITE_FAILED',
)	;0	<<76
79  70   GOTO/253                  ?0        ?117                 ?53                 	;0
80  72   GOTO/253                  ?0        ?82                  ?54                 	;0
81  74   ECHO/40                   ?0        55:'No license has been generated for this server. If the <strong>WHMCS License</strong> below is correct and matches your XUI Account, click the <strong>Update License</strong> button to force an update.' ?0                  	;0
82  76   GOTO/253                  ?0        ?108                 ?56                 	;0
83  77   GOTO/253                  ?0        ?102                 ?57                 	;0
84  79   ECHO/40                   ?0        58:'<strong>Licensing Failed:</strong> Your IP has been banned by the flood detection system.' ?0                  	;0
85  81   ECHO/40                   ?0        59:'                                                </div>
                                            ' ?0                  	;0
86  84   GOTO/253                  ?0        ?110                 ?60                 	;0
87  88   ASSIGN/38                 ?27       16?9                 61:true             	;0
88  91   GOTO/253                  ?0        ?228                 ?62                 	;0
89  93   ASSIGN/38                 ?28       16?10                63:false            	;0
90  94   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'trim'           	;1
91  94   FETCH_DIM_FUNC_ARG/93     $42=      16?2                 66:5                	;1
92  94   SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
93  94   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
94  94   FETCH_DIM_R/81            $44=      16?3                 67:2                	;0
95  94   IS_NOT_EQUAL/18           #45=      $43                  $44                 	;0
96  94   BOOL_NOT/13               #46=      #45                  ?0                  	;0
97  94   JMPZ/43                   ?0        #46                  ?99                 	;0	>>99
98  95   GOTO/253                  ?0        ?100                 ?68                 	;0
99  97   ASSIGN/38                 ?34       16?10                69:true             	;0	<<97
100 99   ECHO/40                   ?0        70:'<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>XUI | License</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header id="topnav">
            <div class="navbar-overlay bg-animate"></div>
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div class="logo-box">
                        <a href="javascript: void(0);" class="logo text-center">
                            <span class="logo-lg">
                                <img src="assets/images/logo-topbar.png" alt="" height="26">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-topbar.png" alt="" height="28">
                            </span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <div class="wrapper boxed-layout"' ?0                  	;0
101 100  GOTO/253                  ?0        ?245                 ?71                 	;0
102 103  FETCH_DIM_R/81            $48=      16?3                 72:3                	;0
103 103  CONCAT/8                  #49=      73:'The stored IP address information on your server is showing a different IP (' $48                 	;0
104 103  CONCAT/8                  #50=      #49                  74:') to what XUI expected ('	;0
105 103  CONCAT/8                  #51=      #50                  16?4                	;0
106 103  CONCAT/8                  #52=      #51                  75:'). This will likely mean a license won\'t generate. Contact support with both IP addresses and we will map them to your account.'	;0
107 103  ECHO/40                   ?0        #52                  ?0                  	;0
108 105  GOTO/253                  ?0        ?365                 ?76                 	;0
109 107  GOTO/253                  ?0        ?364                 ?77                 	;0
110 109  GOTO/253                  ?0        ?112                 ?78                 	;0
111 111  ECHO/40                   ?0        79:'                                        <div class="alert alert-warning" role="alert">
                                            The WHMCS License key you entered isn\'t valid, please ensure it is a 16 character hexadecimal string.
                                        </div>
                                        ' ?0                  	;0
112 113  FETCH_DIM_R/81            $53=      16?3                 80:0                	;0
113 113  BOOL_NOT/13               #54=      $53                  ?0                  	;0
114 113  JMPZ/43                   ?0        #54                  ?116                	;0	>>116
115 114  GOTO/253                  ?0        ?25                  ?81                 	;0
116 116  GOTO/253                  ?0        ?22                  ?82                 	;0	<<114
117 118  GOTO/253                  ?0        ?87                  ?83                 	;0
118 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'implode'        	;2
119 120  SEND_VAL_EX/116           ?80       86:'
'               ?1                  	;0
120 120  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
121 120  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
122 120  ASSIGN/38                 ?43       16?5                 $55                 	;0
123 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'file_put_contents'	;2
124 121  SEND_VAL_EX/116           ?80       89:'../config/config.ini' ?1                  	;0
125 121  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
126 121  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
127 121  JMPZ/43                   ?0        $57                  ?129                	;0	>>129
128 122  GOTO/253                  ?0        ?334                 ?90                 	;0
129 124  ASSIGN/38                 ?45       16?0                 91:array (
  'status' => false,
  'error' => 'STATUS_WRITE_FAILED',
)	;0	<<127
130 125  GOTO/253                  ?0        ?333                 ?92                 	;0
131 128  ECHO/40                   ?0        93:'<strong>Licensing Failed:</strong> Couldn\'t match your MAC address to your system.' ?0                  	;0
132 130  GOTO/253                  ?0        ?42                  ?94                 	;0
133 132  GOTO/253                  ?0        ?41                  ?95                 	;0
134 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'parse_ini_file' 	;1
135 134  SEND_VAL_EX/116           ?80       98:'../config/config.ini' ?1                  	;0
136 134  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
137 134  FETCH_DIM_R/81            $60=      $59                  99:'license'        	;0
138 134  ASSIGN/38                 ?48       16?1                 $60                 	;0
139 135  GOTO/253                  ?0        ?88                  ?100                	;0
140 137  FETCH_R/80                $62=      101:'_POST'          ?0                  	;0
141 137  FETCH_DIM_R/81            $63=      $62                  102:'whmcs_license' 	;0
142 137  ASSIGN/38                 ?51       16?1                 $63                 	;0
143 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'strlen'        	;1
144 138  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
145 138  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
146 138  IS_EQUAL/17               #66=      $65                  105:16              	;0
147 138  JMPZ_EX/46                #66=      #66                  ?152                	;0	>>152
148 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'ctype_xdigit'  	;1
149 138  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
150 138  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
151 138  BOOL/52                   #66=      $67                  ?0                  	;0
152 138  JMPZ/43                   ?0        #66                  ?154                	;0	>>154	<<147
153 139  GOTO/253                  ?0        ?183                 ?108                	;0
154 141  GOTO/253                  ?0        ?181                 ?109                	;0	<<152
155 144  GOTO/253                  ?0        ?157                 ?110                	;0
156 146  ECHO/40                   ?0        111:'<strong>Licensing Failed:</strong> No network configuration details detected.' ?0                  	;0
157 148  GOTO/253                  ?0        ?307                 ?112                	;0
158 150  ECHO/40                   ?0        113:'                                        <div class="alert alert-info" role="alert">
                                            Your license has expired, and it also seems your server configuration has changed since first generating your license. Please visit the <strong><a href="https://xui.one/billing/">XUI Billing Panel</a></strong>, pay your invoices, then click the <strong>Update License</strong> button to generate a new license.
                                        </div>
                                        ' ?0                  	;0
159 152  GOTO/253                  ?0        ?86                  ?114                	;0
160 154  JMPZ/43                   ?0        16?9                 ?162                	;0	>>162
161 155  GOTO/253                  ?0        ?367                 ?115                	;0
162 157  GOTO/253                  ?0        ?264                 ?116                	;0	<<160
163 159  GOTO/253                  ?0        ?165                 ?117                	;0
164 161  ECHO/40                   ?0        118:'<strong>Licensing Failed:</strong> Config file couldn\'t be written to safely. Please check permissions.' ?0                  	;0
165 163  GOTO/253                  ?0        ?373                 ?119                	;0
166 164  GOTO/253                  ?0        ?372                 ?120                	;0
167 166  FETCH_R/80                $68=      121:'_SERVER'        ?0                  	;0
168 166  FETCH_DIM_R/81            $69=      $68                  122:'SERVER_ADDR'   	;0
169 166  ASSIGN/38                 ?57       16?4                 $69                 	;0
170 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'getServerInfo' 	;0
171 167  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
172 167  ASSIGN/38                 ?59       16?3                 $71                 	;0
173 168  ASSIGN/38                 ?60       16?9                 125:false           	;0
174 169  ASSIGN/38                 ?61       16?11                126:false           	;0
175 170  FETCH_IS/89               $75=      127:'_POST'          ?0                  	;0
176 170  ISSET_ISEMPTY_DIM_OBJ/115 #76=      $75                  128:'update_license'	;33554432
177 170  JMPZ/43                   ?0        #76                  ?179                	;0	>>179
178 171  GOTO/253                  ?0        ?140                 ?129                	;0
179 173  GOTO/253                  ?0        ?134                 ?130                	;0	<<177
180 176  GOTO/253                  ?0        ?375                 ?131                	;0
181 178  ASSIGN/38                 ?64       16?11                132:true            	;0
182 179  GOTO/253                  ?0        ?88                  ?133                	;0
183 181  ASSIGN/38                 ?65       16?7                 134:false           	;0
184 182  ASSIGN/38                 ?66       16?8                 135:array (
)       	;0
185 183  GOTO/253                  ?0        ?45                  ?136                	;0
186 185  FETCH_DIM_R/81            $80=      16?0                 137:'error'         	;0
187 185  IS_EQUAL/17               #81=      $80                  138:'STATUS_REISSUES_USED'	;0
188 185  JMPZ/43                   ?0        #81                  ?190                	;0	>>190
189 186  GOTO/253                  ?0        ?370                 ?139                	;0
190 188  FETCH_DIM_R/81            $82=      16?0                 140:'error'         	;0	<<188
191 188  IS_EQUAL/17               #83=      $82                  141:'STATUS_INVALID_PRODUCT'	;0
192 188  JMPZ/43                   ?0        #83                  ?194                	;0	>>194
193 189  GOTO/253                  ?0        ?374                 ?142                	;0
194 191  FETCH_DIM_R/81            $84=      16?0                 143:'error'         	;0	<<192
195 191  IS_EQUAL/17               #85=      $84                  144:'STATUS_LICENSE_FAILED'	;0
196 191  JMPZ/43                   ?0        #85                  ?198                	;0	>>198
197 192  GOTO/253                  ?0        ?372                 ?145                	;0
198 194  FETCH_DIM_R/81            $86=      16?0                 146:'error'         	;0	<<196
199 194  IS_EQUAL/17               #87=      $86                  147:'STATUS_WRITE_FAILED'	;0
200 194  JMPZ/43                   ?0        #87                  ?202                	;0	>>202
201 195  GOTO/253                  ?0        ?164                 ?148                	;0
202 197  ECHO/40                   ?0        149:'Could not generate a license, please checked your <strong>WHMCS License</strong> below and ensure your license is set to <strong>Reissued</strong> in the billing panel. If it still doesn\'t work, contact support.' ?0                  	;0	<<200
203 198  GOTO/253                  ?0        ?163                 ?150                	;0
204 200  FETCH_DIM_R/81            $88=      16?2                 151:1               	;0
205 200  ECHO/40                   ?0        $88                  ?0                  	;0
206 201  ECHO/40                   ?0        152:'" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-md-4 col-form-label" for="server_ip">Licensed Server IP</label>
                                            <div class="col-md-8">
                                                <input id="server_ip" type="text" class="form-control" value="' ?0                  	;0
207 202  FETCH_DIM_R/81            $89=      16?2                 153:2               	;0
208 202  ECHO/40                   ?0        $89                  ?0                  	;0
209 203  ECHO/40                   ?0        154:'" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-md-4 col-form-label" for="expiration_date">Expiration Date</label>
                                            <div class="col-md-8">
                                                <input id="expiration_date" type="text" class="form-control" value="' ?0                  	;0
210 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'date'          	;2
211 204  SEND_VAL_EX/116           ?80       157:'jS F Y'         ?1                  	;0
212 204  FETCH_DIM_FUNC_ARG/93     $90=      16?2                 158:3               	;2
213 204  SEND_VAR_EX/66            ?96       $90                  ?2                  	;0
214 204  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
215 204  ECHO/40                   ?0        $91                  ?0                  	;0
216 205  GOTO/253                  ?0        ?220                 ?159                	;0
217 208  ECHO/40                   ?0        160:'                                        <div class="alert alert-info" role="alert">
                                            Your license has expired. Please visit the <strong><a href="https://xui.one/billing/">XUI Billing Panel</a></strong> and pay your invoices, you can then click the <strong>Update License</strong> button to generate a new license.
                                        </div>
                                        ' ?0                  	;0
218 210  GOTO/253                  ?0        ?159                 ?161                	;0
219 212  GOTO/253                  ?0        ?158                 ?162                	;0
220 214  ECHO/40                   ?0        163:'" readonly>
                                            </div>
                                        </div>
                                        ' ?0                  	;0
221 216  ECHO/40                   ?0        164:'                                    </div> 
                                </div> 
                                ' ?0                  	;0
222 217  FETCH_DIM_R/81            $92=      16?3                 165:0               	;0
223 217  BOOL_NOT/13               #93=      $92                  ?0                  	;0
224 217  JMPZ/43                   ?0        #93                  ?226                	;0	>>226
225 218  GOTO/253                  ?0        ?180                 ?166                	;0
226 220  ECHO/40                   ?0        167:'                                <ul class="list-inline wizard mb-4">
                                    <li class="list-inline-item float-right">
                                        <input name="update_license" type="submit" class="btn btn-primary" value="Update License" />
                                    </li>
                                </ul>
                                ' ?0                  	;0	<<224
227 221  GOTO/253                  ?0        ?180                 ?168                	;0
228 223  INIT_STATIC_METHOD_CALL/113 ?0        169:'Xui\\Functions' 171:'getLicense'    	;0
229 223  DO_FCALL/60               $94=      ?0                   ?0                  	;0
230 223  ASSIGN/38                 ?82       16?2                 $94                 	;0
231 224  ASSIGN/38                 ?83       16?12                173:false           	;0
232 225  FETCH_DIM_R/81            $97=      16?2                 174:3               	;0
233 225  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'time'          	;0
234 225  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
235 225  IS_SMALLER/19             #99=      $97                  $98                 	;0
236 225  BOOL_NOT/13               #100=     #99                  ?0                  	;0
237 225  JMPZ/43                   ?0        #100                 ?239                	;0	>>239
238 226  GOTO/253                  ?0        ?240                 ?177                	;0
239 228  ASSIGN/38                 ?88       16?12                178:true            	;0	<<237
240 230  GOTO/253                  ?0        ?89                  ?179                	;0
241 232  GOTO/253                  ?0        ?243                 ?180                	;0
242 234  ECHO/40                   ?0        181:'<strong>Licensing Failed:</strong> Couldn\'t match your outgoing IP address to your system.' ?0                  	;0
243 236  GOTO/253                  ?0        ?132                 ?182                	;0
244 237  GOTO/253                  ?0        ?131                 ?183                	;0
245 239  FETCH_IS/89               $102=     184:'_SERVER'        ?0                  	;0
246 239  ISSET_ISEMPTY_DIM_OBJ/115 #103=     $102                 185:'HTTP_X_REQUESTED_WITH'	;16777216
247 239  BOOL_NOT/13               #104=     #103                 ?0                  	;0
248 239  JMPZ_EX/46                #104=     #104                 ?256                	;0	>>256
249 239  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'strtolower'    	;1
250 239  FETCH_FUNC_ARG/92         $105=     188:'_SERVER'        ?0                  	;1
251 239  FETCH_DIM_FUNC_ARG/93     $106=     $105                 189:'HTTP_X_REQUESTED_WITH'	;1
252 239  SEND_VAR_EX/66            ?80       $106                 ?1                  	;0
253 239  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
254 239  IS_EQUAL/17               #108=     $107                 190:'xmlhttprequest'	;0
255 239  BOOL/52                   #104=     #108                 ?0                  	;0
256 239  BOOL_NOT/13               #109=     #104                 ?0                  	;0	<<248
257 239  JMPZ/43                   ?0        #109                 ?259                	;0	>>259
258 240  GOTO/253                  ?0        ?260                 ?191                	;0
259 242  ECHO/40                   ?0        192:' style="display: none;"' ?0                  	;0	<<257
260 244  ECHO/40                   ?0        193:'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">XUI License</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <form action="./license" method="POST" data-parsley-validate="">
                                <div class="row">
                                    <div class="col-12">
                                        ' ?0                  	;0
261 245  JMPZ/43                   ?0        16?11                ?263                	;0	>>263
262 246  GOTO/253                  ?0        ?111                 ?194                	;0
263 248  GOTO/253                  ?0        ?352                 ?195                	;0	<<261
264 250  ECHO/40                   ?0        196:'                                                <div class="alert alert-info" role="alert">
                                                    ' ?0                  	;0
265 251  FETCH_DIM_R/81            $110=     16?3                 197:0               	;0
266 251  BOOL_NOT/13               #111=     $110                 ?0                  	;0
267 251  IS_SMALLER/19             #112=     198:0                #111                	;0
268 251  JMPZ/43                   ?0        #112                 ?270                	;0	>>270
269 252  GOTO/253                  ?0        ?109                 ?199                	;0
270 254  FETCH_DIM_R/81            $113=     16?3                 200:1               	;0	<<268
271 254  BOOL_NOT/13               #114=     $113                 ?0                  	;0
272 254  JMPZ/43                   ?0        #114                 ?274                	;0	>>274
273 255  GOTO/253                  ?0        ?102                 ?201                	;0
274 257  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'strlen'        	;1	<<272
275 257  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
276 257  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
277 257  IS_SMALLER/19             #116=     204:0                $115                	;0
278 257  JMPZ/43                   ?0        #116                 ?280                	;0	>>280
279 258  GOTO/253                  ?0        ?81                  ?205                	;0
280 260  ECHO/40                   ?0        206:'Welcome to XUI! Please visit the <strong><a href="https://xui.one/billing/">XUI Billing Panel</a></strong> to find your license number and enter it in the box below, then click <strong>Update License</strong> to generate your license file.' ?0                  	;0	<<278
281 261  GOTO/253                  ?0        ?80                  ?207                	;0
282 263  ECHO/40                   ?0        208:'" readonly>
                                            </div>
                                        </div>
                                        ' ?0                  	;0
283 265  GOTO/253                  ?0        ?221                 ?209                	;0
284 267  ECHO/40                   ?0        210:'                                        <div class="form-group row mb-4">
                                            <label class="col-md-4 col-form-label" for="whmcs_account">WHMCS Account</label>
                                            <div class="col-md-8">
                                                <input id="whmcs_account" type="text" class="form-control"  value="' ?0                  	;0
285 268  GOTO/253                  ?0        ?204                 ?211                	;0
286 271  GOTO/253                  ?0        ?288                 ?212                	;0
287 273  ECHO/40                   ?0        213:'<strong>Licensing Failed:</strong> License has been revoked! Please check the billing panel.' ?0                  	;0
288 275  GOTO/253                  ?0        ?241                 ?214                	;0
289 277  ECHO/40                   ?0        215:'                                                    <div class="alert alert-danger" role="alert">
                                                    ' ?0                  	;0
290 278  FETCH_DIM_R/81            $117=     16?0                 216:'error'         	;0
291 278  IS_EQUAL/17               #118=     $117                 217:'STATUS_IP_BANNED'	;0
292 278  JMPZ/43                   ?0        #118                 ?294                	;0	>>294
293 279  GOTO/253                  ?0        ?30                  ?218                	;0
294 281  FETCH_DIM_R/81            $119=     16?0                 219:'error'         	;0	<<292
295 281  IS_EQUAL/17               #120=     $119                 220:'STATUS_DECRYPT_FAILED'	;0
296 281  JMPZ/43                   ?0        #120                 ?298                	;0	>>298
297 282  GOTO/253                  ?0        ?28                  ?221                	;0
298 284  FETCH_DIM_R/81            $121=     16?0                 222:'error'         	;0	<<296
299 284  IS_EQUAL/17               #122=     $121                 223:'STATUS_NO_SERVER_ID'	;0
300 284  JMPZ/43                   ?0        #122                 ?302                	;0	>>302
301 285  GOTO/253                  ?0        ?308                 ?224                	;0
302 287  FETCH_DIM_R/81            $123=     16?0                 225:'error'         	;0	<<300
303 287  IS_EQUAL/17               #124=     $123                 226:'STATUS_NO_NETWORK'	;0
304 287  JMPZ/43                   ?0        #124                 ?306                	;0	>>306
305 288  GOTO/253                  ?0        ?156                 ?227                	;0
306 290  GOTO/253                  ?0        ?1                   ?228                	;0	<<304
307 292  GOTO/253                  ?0        ?309                 ?229                	;0
308 294  ECHO/40                   ?0        230:'<strong>Licensing Failed:</strong> No server ID detected, check your configuration file.' ?0                  	;0
309 296  GOTO/253                  ?0        ?29                  ?231                	;0
310 297  GOTO/253                  ?0        ?28                  ?232                	;0
311 299  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'shell_exec'    	;1
312 299  SEND_VAL_EX/116           ?80       235:'/home/xui/bin/php/bin/php /home/xui/crons/license.php' ?1                  	;0
313 299  DO_FCALL_BY_NAME/131      ?112      ?0                   ?0                  	;0
314 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'shell_exec'    	;1
315 300  SEND_VAL_EX/116           ?80       238:'/home/xui/bin/php/bin/php /home/xui/includes/cli/startup.php' ?1                  	;0
316 300  DO_FCALL_BY_NAME/131      ?113      ?0                   ?0                  	;0
317 301  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'header'        	;1
318 301  SEND_VAL_EX/116           ?80       241:'Location: ./index' ?1                  	;0
319 301  DO_FCALL_BY_NAME/131      ?114      ?0                   ?0                  	;0
320 302  EXIT/79                   ?0        ?0                   ?0                  	;0
321 304  GOTO/253                  ?0        ?87                  ?242                	;0
322 306  INIT_STATIC_METHOD_CALL/113 ?0        243:'Xui\\Functions' 245:'verifyLicense' 	;0	<<0
323 306  DO_FCALL/60               $128=     ?0                   ?0                  	;0
324 306  BOOL_NOT/13               #129=     $128                 ?0                  	;0
325 306  JMPZ/43                   ?0        #129                 ?327                	;0	>>327
326 307  GOTO/253                  ?0        ?331                 ?247                	;0
327 309  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'header'        	;1	<<325
328 309  SEND_VAL_EX/116           ?80       250:'Location: ./index' ?1                  	;0
329 309  DO_FCALL_BY_NAME/131      ?117      ?0                   ?0                  	;0
330 310  EXIT/79                   ?0        ?0                   ?0                  	;0
331 312  NOP/0                     ?0        ?0                   ?0                  	;0
332 356  GOTO/253                  ?0        ?167                 ?251                	;0
333 358  GOTO/253                  ?0        ?87                  ?252                	;0
334 360  INIT_STATIC_METHOD_CALL/113 ?0        253:'Xui\\Functions' 255:'updateLicense' 	;2
335 360  SEND_VAL_EX/116           ?80       257:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
336 360  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'intval'        	;1
337 360  FETCH_FUNC_ARG/92         $131=     260:'_SERVER'        ?0                  	;1
338 360  FETCH_DIM_FUNC_ARG/93     $132=     $131                 261:'SERVER_PORT'   	;1
339 360  SEND_VAR_EX/66            ?80       $132                 ?1                  	;0
340 360  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
341 360  SEND_VAR_NO_REF_EX/50     ?96       $133                 ?2                  	;0
342 360  DO_FCALL/60               $134=     ?0                   ?0                  	;0
343 360  ASSIGN/38                 ?122      16?0                 $134                	;0
344 361  FETCH_DIM_R/81            $136=     16?0                 262:'status'        	;0
345 361  BOOL_NOT/13               #137=     $136                 ?0                  	;0
346 361  JMPZ/43                   ?0        #137                 ?348                	;0	>>348
347 362  GOTO/253                  ?0        ?321                 ?263                	;0
348 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'shell_exec'    	;1	<<346
349 364  SEND_VAL_EX/116           ?80       266:'/home/xui/bin/php/bin/php /home/xui/crons/epg.php > /dev/null 2>/dev/null &' ?1                  	;0
350 364  DO_FCALL_BY_NAME/131      ?125      ?0                   ?0                  	;0
351 365  GOTO/253                  ?0        ?311                 ?267                	;0
352 367  BOOL_NOT/13               #139=     16?2                 ?0                  	;0
353 367  JMPZ/43                   ?0        #139                 ?355                	;0	>>355
354 368  GOTO/253                  ?0        ?160                 ?268                	;0
355 370  JMPZ_EX/46                #140=     16?12                ?357                	;0	>>357	<<353
356 370  BOOL/52                   #140=     16?10                ?0                  	;0
357 370  JMPZ/43                   ?0        #140                 ?359                	;0	>>359	<<355
358 371  GOTO/253                  ?0        ?219                 ?269                	;0
359 373  JMPZ/43                   ?0        16?12                ?361                	;0	>>361	<<357
360 374  GOTO/253                  ?0        ?217                 ?270                	;0
361 376  ECHO/40                   ?0        271:'                                        <div class="alert alert-info" role="alert">
                                            Your server configuration has changed since first generating your license. You can click the <strong>Update License</strong> button to generate a new license, this will reissue your license ensuring you have enough reissues to continue.
                                        </div>
                                        ' ?0                  	;0	<<359
362 377  GOTO/253                  ?0        ?218                 ?272                	;0
363 378  GOTO/253                  ?0        ?217                 ?273                	;0
364 380  ECHO/40                   ?0        274:'Your server isn\'t giving XUI information about the installed network devices, such as your external IP Address and MAC Address. Please contact support!' ?0                  	;0
365 382  ECHO/40                   ?0        275:'                                                </div>
                                            ' ?0                  	;0
366 383  GOTO/253                  ?0        ?86                  ?276                	;0
367 385  GOTO/253                  ?0        ?289                 ?277                	;0
368 387  ECHO/40                   ?0        278:'<strong>Licensing Failed:</strong> Invalid product selected. Please contact support.' ?0                  	;0
369 389  GOTO/253                  ?0        ?286                 ?279                	;0
370 391  ECHO/40                   ?0        280:'<strong>Licensing Failed:</strong> Maximum number of reissues has been used. Please contact support.' ?0                  	;0
371 392  GOTO/253                  ?0        ?286                 ?281                	;0
372 395  ECHO/40                   ?0        282:'<strong>Licensing Failed:</strong> License failed to generate with an unknown error. Please contact support.' ?0                  	;0
373 397  GOTO/253                  ?0        ?369                 ?283                	;0
374 399  GOTO/253                  ?0        ?368                 ?284                	;0
375 401  ECHO/40                   ?0        285:'                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 copyright text-center">&copy; <img height=\'20px\' style=\'padding-left: 10px; padding-right: 10px; margin-top: -2px;\' class=\'whiteout\' src=\'./assets/images/logo-topbar.png\' /> 2021</div>
                </div>
            </div>
        </footer>
    </body>
</html>' ?0                  	;0
376 402  NOP/0                     ?0        286:1                ?0                  	;4294967295
*/

?>