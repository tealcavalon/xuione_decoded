<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?169                 ?0                  	;0	>>169
1   5    INIT_STATIC_METHOD_CALL/113 ?0        1:'Xui\\Functions'   3:'checkReissues'   	;1
2   5    SEND_VAL_EX/116           ?80       5:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
3   5    DO_FCALL/60               $10=      ?0                   ?0                  	;0
4   5    ASSIGN/38                 ?1        16?0                 $10                 	;0
5   6    INIT_METHOD_CALL/112      ?0        16?1                 6:'query'           	;2
6   6    SEND_VAL_EX/116           ?80       8:'UPDATE `settings` SET `reissues` = ?' ?1                  	;0
7   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'json_encode'     	;1
8   6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
9   6    DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
10  6    SEND_VAR_NO_REF_EX/50     ?96       $12                  ?2                  	;0
11  6    DO_FCALL/60               ?3        ?0                   ?0                  	;0
12  8    ISSET_ISEMPTY_CV/197      #14=      16?0                 ?0                  	;33554432
13  8    JMPZ/43                   ?0        #14                  ?15                 	;0	>>15
14  9    GOTO/253                  ?0        ?178                 ?11                 	;0
15  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'json_decode'    	;2	<<13
16  11   FETCH_STATIC_PROP_FUNC_ARG/177 $15=      14:'rSettings'       15:'XUI'            	;1
17  11   FETCH_DIM_FUNC_ARG/93     $16=      $15                  17:'reissues'       	;1
18  11   SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
19  11   SEND_VAL_EX/116           ?96       18:true              ?2                  	;0
20  11   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
21  11   JMP_SET/152               #18=      $17                  ?23                 	;0
22  11   QM_ASSIGN/22              #18=      19:array (
)         ?0                  	;0
23  11   ASSIGN/38                 ?9        16?0                 #18                 	;0
24  12   GOTO/253                  ?0        ?178                 ?20                 	;0
25  15   ECHO/40                   ?0        21:'                <div class="card-box">
                    <form action="./license_info" method="POST" data-parsley-validate="">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row mb-4">
                                    <label class="col-md-3 col-form-label" for="whmcs_license">WHMCS License</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control text-center" id="whmcs_license" name="whmcs_license" maxlength="16" value="' ?0                  	;0
26  16   FETCH_STATIC_PROP_R/173   $20=      22:'rConfig'         23:'XUI'            	;0
27  16   FETCH_DIM_R/81            $21=      $20                  25:'license'        	;0
28  16   ECHO/40                   ?0        $21                  ?0                  	;0
29  17   ECHO/40                   ?0        26:'" readonly>
                                    </div>
                                    <label class="col-md-3 col-form-label" for="whmcs_account">WHMCS Account</label>
                                    <div class="col-md-3">
                                        <input id="whmcs_account" type="text" class="form-control text-center"  value="' ?0                  	;0
30  18   FETCH_DIM_R/81            $22=      16?2                 27:1                	;0
31  18   ECHO/40                   ?0        $22                  ?0                  	;0
32  19   GOTO/253                  ?0        ?227                 ?28                 	;0
33  22   ECHO/40                   ?0        29:'                            </div>
                        </div> 
                        <ul class="list-inline wizard mb-4">
                            <li class="list-inline-item float-right">
                                <input name="update_license" type="submit" class="btn btn-primary" value="Refresh License" />
                                ' ?0                  	;0
34  23   JMPZ_EX/46                #23=      16?3                 ?40                 	;0	>>40
35  23   FETCH_CONSTANT/99         #24=      ?0                   30:'SERVER_ID'      	;16
36  23   FETCH_DIM_R/81            $25=      16?4                 #24                 	;0
37  23   FETCH_DIM_R/81            $26=      $25                  33:'status'         	;0
38  23   IS_NOT_EQUAL/18           #27=      $26                  34:5                	;0
39  23   BOOL/52                   #23=      #27                  ?0                  	;0
40  23   BOOL_NOT/13               #28=      #23                  ?0                  	;0	<<34
41  23   JMPZ/43                   ?0        #28                  ?43                 	;0	>>43
42  24   GOTO/253                  ?0        ?44                  ?35                 	;0
43  26   ECHO/40                   ?0        36:'                                <input name="update_xui" type="submit" class="btn btn-info" value="Update XUI" />
                                ' ?0                  	;0	<<41
44  28   GOTO/253                  ?0        ?100                 ?37                 	;0
45  30   ECHO/40                   ?0        38:'                    Your load balancers and proxies will automatically update once the main server has updated.
                    ' ?0                  	;0
46  32   GOTO/253                  ?0        ?202                 ?39                 	;0
47  34   ECHO/40                   ?0        40:'                    XUI is currently waiting to be updated... Your server will become unavailable once the process begins.
                    ' ?0                  	;0
48  35   GOTO/253                  ?0        ?202                 ?41                 	;0
49  37   ECHO/40                   ?0        42:' is available for download now! Click the update button below when you\'re ready to update your main server, the process won\'t take long however the server will go offline while the update is in progress.<br/><br/>
                    ' ?0                  	;0
50  38   FETCH_DIM_R/81            $29=      16?5                 43:'auto_update_lb' 	;0
51  38   JMPZ/43                   ?0        $29                  ?53                 	;0	>>53
52  39   GOTO/253                  ?0        ?55                  ?44                 	;0
53  41   ECHO/40                   ?0        45:'                    Your load balancers and proxies can be manually updated by clicking the Download icon next to them.
                    ' ?0                  	;0	<<51
54  42   GOTO/253                  ?0        ?46                  ?46                 	;0
55  44   GOTO/253                  ?0        ?45                  ?47                 	;0
56  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'time'           	;0
57  46   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
58  46   FETCH_DIM_R/81            $31=      16?2                 50:3                	;0
59  46   IS_SMALLER/19             #32=      $31                  $30                 	;0
60  46   JMPZ_EX/46                #32=      #32                  ?66                 	;0	>>66
61  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'time'           	;0
62  46   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
63  46   FETCH_DIM_R/81            $34=      16?2                 53:4                	;0
64  46   IS_SMALLER_OR_EQUAL/20    #35=      $33                  $34                 	;0
65  46   BOOL/52                   #32=      #35                  ?0                  	;0
66  46   BOOL_NOT/13               #36=      #32                  ?0                  	;0	<<60
67  46   JMPZ/43                   ?0        #36                  ?69                 	;0	>>69
68  47   GOTO/253                  ?0        ?99                  ?54                 	;0
69  49   ECHO/40                   ?0        55:'                <div class="alert alert-danger mb-4" role="alert">
                    Your license has expired! XUI will shut down in ' ?0                  	;0	<<67
70  50   FETCH_DIM_R/81            $37=      16?2                 56:4                	;0
71  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'time'           	;0
72  50   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
73  50   SUB/2                     #39=      $37                  $38                 	;0
74  50   IS_SMALLER/19             #40=      59:86400             #39                 	;0
75  50   JMPZ/43                   ?0        #40                  ?87                 	;0	>>87
76  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'intval'         	;1
77  50   FETCH_DIM_R/81            $41=      16?2                 62:4                	;0
78  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'time'           	;0
79  50   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
80  50   SUB/2                     #43=      $41                  $42                 	;0
81  50   DIV/4                     #44=      #43                  65:86400            	;0
82  50   SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
83  50   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
84  50   CONCAT/8                  #46=      $45                  66:' days'          	;0
85  50   QM_ASSIGN/22              #47=      #46                  ?0                  	;0
86  50   JMP/42                    ?0        ?97                  ?0                  	;0	>>97
87  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'intval'         	;1	<<75
88  50   FETCH_DIM_R/81            $48=      16?2                 69:4                	;0
89  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'time'           	;0
90  50   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
91  50   SUB/2                     #50=      $48                  $49                 	;0
92  50   DIV/4                     #51=      #50                  72:3600             	;0
93  50   SEND_VAL_EX/116           ?80       #51                  ?1                  	;0
94  50   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
95  50   CONCAT/8                  #53=      $52                  73:' hours'         	;0
96  50   QM_ASSIGN/22              #47=      #53                  ?0                  	;0
97  50   ECHO/40                   ?0        #47                  ?0                  	;0	<<86
98  51   ECHO/40                   ?0        74:'.
                </div>
                ' ?0                  	;0
99  53   GOTO/253                  ?0        ?241                 ?75                 	;0
100 55   ECHO/40                   ?0        76:'                            </li>
                        </ul>
                    </form>
                </div>
            </div> 
        </div>
	</div>
</div>
' ?0                  	;0
101 56   GOTO/253                  ?0        ?356                 ?77                 	;0
102 58   BOOL_NOT/13               #54=      16?3                 ?0                  	;0
103 58   JMPZ/43                   ?0        #54                  ?105                	;0	>>105
104 59   GOTO/253                  ?0        ?203                 ?78                 	;0
105 61   ECHO/40                   ?0        79:'                <div class="alert alert-info mb-4" role="alert">
                    ' ?0                  	;0	<<103
106 62   FETCH_CONSTANT/99         #55=      ?0                   80:'SERVER_ID'      	;16
107 62   FETCH_DIM_R/81            $56=      16?4                 #55                 	;0
108 62   FETCH_DIM_R/81            $57=      $56                  83:'status'         	;0
109 62   IS_EQUAL/17               #58=      $57                  84:5                	;0
110 62   JMPZ/43                   ?0        #58                  ?112                	;0	>>112
111 63   GOTO/253                  ?0        ?47                  ?85                 	;0
112 65   ECHO/40                   ?0        86:'                    XUI v' ?0                  	;0	<<110
113 66   FETCH_DIM_R/81            $59=      16?5                 87:'update_version' 	;0
114 66   ECHO/40                   ?0        $59                  ?0                  	;0
115 67   GOTO/253                  ?0        ?49                  ?88                 	;0
116 69   ECHO/40                   ?0        89:'                <div class="alert alert-warning mb-4" role="alert">
                    You\'ve almost used all of your license reissues, you can only move this license to one more server.</br><br/>Please raise a ticket on the Billing Panel in order to get the reissues for your license reset.
                </div>
                ' ?0                  	;0
117 71   GOTO/253                  ?0        ?25                  ?90                 	;0
118 73   ECHO/40                   ?0        91:'                <div class="alert alert-danger mb-4" role="alert">
                    You\'ve used all of your license reissues, if you attempt to move the license to a new server or reinstall this server and re-license it, you will be met with an error and will be unable to do so.</br><br/>Please raise a ticket on the Billing Panel in order to get the reissues for your license reset.
                </div>
                ' ?0                  	;0
119 74   GOTO/253                  ?0        ?25                  ?92                 	;0
120 76   ECHO/40                   ?0        93:' style="display: none;"' ?0                  	;0
121 78   ECHO/40                   ?0        94:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">License Info</h4>
				</div>
			</div>
		</div>
		<div class="row">
            <div class="col-xl-12">
                ' ?0                  	;0
122 79   ISSET_ISEMPTY_CV/197      #60=      16?6                 ?0                  	;33554432
123 79   JMPZ/43                   ?0        #60                  ?125                	;0	>>125
124 80   GOTO/253                  ?0        ?197                 ?95                 	;0
125 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'time'           	;0	<<123
126 82   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
127 82   FETCH_DIM_R/81            $62=      16?2                 98:3                	;0
128 82   IS_SMALLER/19             #63=      $61                  $62                 	;0
129 82   JMPZ_EX/46                #63=      #63                  ?136                	;0	>>136
130 82   FETCH_DIM_R/81            $64=      16?2                 99:3                	;0
131 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'time'          	;0
132 82   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
133 82   SUB/2                     #66=      $64                  $65                 	;0
134 82   IS_SMALLER/19             #67=      #66                  102:604800          	;0
135 82   BOOL/52                   #63=      #67                  ?0                  	;0
136 82   JMPZ/43                   ?0        #63                  ?138                	;0	>>138	<<129
137 83   GOTO/253                  ?0        ?242                 ?103                	;0
138 85   GOTO/253                  ?0        ?56                  ?104                	;0	<<136
139 87   FETCH_DIM_R/81            $68=      16?0                 105:'max'           	;0
140 87   ECHO/40                   ?0        $68                  ?0                  	;0
141 88   ECHO/40                   ?0        106:'" readonly>
                                    </div>
                                    <label class="col-md-3 col-form-label" for="current_reissues">Current Reissues</label>
                                    <div class="col-md-3">
                                        <input id="current_reissues" type="text" class="form-control text-center" value="' ?0                  	;0
142 89   FETCH_DIM_R/81            $69=      16?0                 107:'reissues'      	;0
143 89   ECHO/40                   ?0        $69                  ?0                  	;0
144 90   ECHO/40                   ?0        108:'" readonly>
                                    </div>
                                </div>
                                ' ?0                  	;0
145 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'count'         	;1
146 91   FETCH_DIM_FUNC_ARG/93     $70=      16?0                 111:'log'           	;1
147 91   SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
148 91   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
149 91   IS_SMALLER/19             #72=      112:0                $71                 	;0
150 91   BOOL_NOT/13               #73=      #72                  ?0                  	;0
151 91   JMPZ/43                   ?0        #73                  ?153                	;0	>>153
152 92   GOTO/253                  ?0        ?33                  ?113                	;0
153 94   GOTO/253                  ?0        ?273                 ?114                	;0	<<151
154 97   GOTO/253                  ?0        ?12                  ?115                	;0
155 99   INIT_STATIC_METHOD_CALL/113 ?0        116:'Xui\\Functions' 118:'updateLicense' 	;2
156 99   SEND_VAL_EX/116           ?80       120:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
157 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'intval'        	;1
158 99   FETCH_FUNC_ARG/92         $74=      123:'_SERVER'        ?0                  	;1
159 99   FETCH_DIM_FUNC_ARG/93     $75=      $74                  124:'SERVER_PORT'   	;1
160 99   SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
161 99   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
162 99   SEND_VAR_NO_REF_EX/50     ?96       $76                  ?2                  	;0
163 99   DO_FCALL/60               $77=      ?0                   ?0                  	;0
164 99   ASSIGN/38                 ?68       16?6                 $77                 	;0
165 100  INIT_STATIC_METHOD_CALL/113 ?0        125:'Xui\\Functions' 127:'getLicense'    	;0
166 100  DO_FCALL/60               $79=      ?0                   ?0                  	;0
167 100  ASSIGN/38                 ?70       16?2                 $79                 	;0
168 101  GOTO/253                  ?0        ?1                   ?129                	;0
169 103  INCLUDE_OR_EVAL/73        ?71       130:'session.php'    ?0                  	;2	<<0
170 104  INCLUDE_OR_EVAL/73        ?72       131:'functions.php'  ?0                  	;2
171 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'E6d500e19634d513'	;0
172 105  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
173 105  JMPZ/43                   ?0        $83                  ?175                	;0	>>175
174 106  GOTO/253                  ?0        ?177                 ?134                	;0
175 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'e72f42A93714BA87'	;0	<<173
176 108  DO_FCALL_BY_NAME/131      ?74       ?0                   ?0                  	;0
177 110  GOTO/253                  ?0        ?321                 ?137                	;0
178 113  ASSIGN/38                 ?75       16?7                 138:'License Info'  	;0
179 114  INCLUDE_OR_EVAL/73        ?76       139:'header.php'     ?0                  	;2
180 115  ECHO/40                   ?0        140:'<div class="wrapper boxed-layout"' ?0                  	;0
181 116  FETCH_IS/89               $87=      141:'_SERVER'        ?0                  	;0
182 116  ISSET_ISEMPTY_DIM_OBJ/115 #88=      $87                  142:'HTTP_X_REQUESTED_WITH'	;16777216
183 116  BOOL_NOT/13               #89=      #88                  ?0                  	;0
184 116  JMPZ_EX/46                #89=      #89                  ?192                	;0	>>192
185 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'strtolower'    	;1
186 116  FETCH_FUNC_ARG/92         $90=      145:'_SERVER'        ?0                  	;1
187 116  FETCH_DIM_FUNC_ARG/93     $91=      $90                  146:'HTTP_X_REQUESTED_WITH'	;1
188 116  SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
189 116  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
190 116  IS_EQUAL/17               #93=      $92                  147:'xmlhttprequest'	;0
191 116  BOOL/52                   #89=      #93                  ?0                  	;0
192 116  BOOL_NOT/13               #94=      #89                  ?0                  	;0	<<184
193 116  JMPZ/43                   ?0        #94                  ?195                	;0	>>195
194 117  GOTO/253                  ?0        ?121                 ?148                	;0
195 119  GOTO/253                  ?0        ?120                 ?149                	;0	<<193
196 122  GOTO/253                  ?0        ?226                 ?150                	;0
197 124  FETCH_DIM_R/81            $95=      16?6                 151:'status'        	;0
198 124  JMPZ/43                   ?0        $95                  ?200                	;0	>>200
199 125  GOTO/253                  ?0        ?225                 ?152                	;0
200 127  ECHO/40                   ?0        153:'                <div class="alert alert-danger mb-4" role="alert">
                    A new license could not be generated, please raise a ticket if you think this is an error.
                </div>
                ' ?0                  	;0	<<198
201 128  GOTO/253                  ?0        ?224                 ?154                	;0
202 131  ECHO/40                   ?0        155:'                </div>
                ' ?0                  	;0
203 133  FETCH_DIM_R/81            $96=      16?0                 156:'max'           	;0
204 133  IS_SMALLER/19             #97=      157:0                $96                 	;0
205 133  JMPZ_EX/46                #97=      #97                  ?210                	;0	>>210
206 133  FETCH_DIM_R/81            $98=      16?0                 158:'reissues'      	;0
207 133  FETCH_DIM_R/81            $99=      16?0                 159:'max'           	;0
208 133  IS_SMALLER_OR_EQUAL/20    #100=     $99                  $98                 	;0
209 133  BOOL/52                   #97=      #100                 ?0                  	;0
210 133  JMPZ/43                   ?0        #97                  ?212                	;0	>>212	<<205
211 134  GOTO/253                  ?0        ?118                 ?160                	;0
212 136  FETCH_DIM_R/81            $101=     16?0                 161:'max'           	;0	<<210
213 136  IS_SMALLER/19             #102=     162:0                $101                	;0
214 136  JMPZ_EX/46                #102=     #102                 ?220                	;0	>>220
215 136  FETCH_DIM_R/81            $103=     16?0                 163:'reissues'      	;0
216 136  FETCH_DIM_R/81            $104=     16?0                 164:'max'           	;0
217 136  SUB/2                     #105=     $104                 165:1               	;0
218 136  IS_EQUAL/17               #106=     $103                 #105                	;0
219 136  BOOL/52                   #102=     #106                 ?0                  	;0
220 136  BOOL_NOT/13               #107=     #102                 ?0                  	;0	<<214
221 136  JMPZ/43                   ?0        #107                 ?223                	;0	>>223
222 137  GOTO/253                  ?0        ?117                 ?166                	;0
223 139  GOTO/253                  ?0        ?116                 ?167                	;0	<<221
224 141  GOTO/253                  ?0        ?226                 ?168                	;0
225 143  ECHO/40                   ?0        169:'                <div class="alert alert-success mb-4" role="alert">
                    A new license has been generated and your details have been updated.
                </div>
                ' ?0                  	;0
226 146  GOTO/253                  ?0        ?102                 ?170                	;0
227 148  ECHO/40                   ?0        171:'" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-3 col-form-label" for="server_ip">Licensed Server IP</label>
                                    <div class="col-md-3">
                                        <input id="server_ip" type="text" class="form-control text-center" value="' ?0                  	;0
228 149  FETCH_DIM_R/81            $108=     16?2                 172:2               	;0
229 149  ECHO/40                   ?0        $108                 ?0                  	;0
230 150  ECHO/40                   ?0        173:'" readonly>
                                    </div>
                                    <label class="col-md-3 col-form-label" for="expiration_date">Expiration Date</label>
                                    <div class="col-md-3">
                                        <input id="expiration_date" type="text" class="form-control text-center" value="' ?0                  	;0
231 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'date'          	;2
232 151  FETCH_STATIC_PROP_FUNC_ARG/177 $109=     176:'rSettings'      177:'XUI'           	;1
233 151  FETCH_DIM_FUNC_ARG/93     $110=     $109                 179:'datetime_format'	;1
234 151  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
235 151  FETCH_DIM_FUNC_ARG/93     $111=     16?2                 180:3               	;2
236 151  SEND_VAR_EX/66            ?96       $111                 ?2                  	;0
237 151  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
238 151  ECHO/40                   ?0        $112                 ?0                  	;0
239 152  ECHO/40                   ?0        181:'" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-3 col-form-label" for="max_reissues">Max Reissues</label>
                                    <div class="col-md-3">
                                        <input id="max_reissues" type="text" class="form-control text-center" value="' ?0                  	;0
240 153  GOTO/253                  ?0        ?139                 ?182                	;0
241 155  GOTO/253                  ?0        ?196                 ?183                	;0
242 157  ECHO/40                   ?0        184:'                <div class="alert alert-warning mb-4" role="alert">
                    Your license expires in ' ?0                  	;0
243 158  FETCH_DIM_R/81            $113=     16?2                 185:3               	;0
244 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'time'          	;0
245 158  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
246 158  SUB/2                     #115=     $113                 $114                	;0
247 158  IS_SMALLER/19             #116=     188:86400            #115                	;0
248 158  JMPZ/43                   ?0        #116                 ?260                	;0	>>260
249 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'intval'        	;1
250 158  FETCH_DIM_R/81            $117=     16?2                 191:3               	;0
251 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'time'          	;0
252 158  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
253 158  SUB/2                     #119=     $117                 $118                	;0
254 158  DIV/4                     #120=     #119                 194:86400           	;0
255 158  SEND_VAL_EX/116           ?80       #120                 ?1                  	;0
256 158  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
257 158  CONCAT/8                  #122=     $121                 195:' days'         	;0
258 158  QM_ASSIGN/22              #123=     #122                 ?0                  	;0
259 158  JMP/42                    ?0        ?270                 ?0                  	;0	>>270
260 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'intval'        	;1	<<248
261 158  FETCH_DIM_R/81            $124=     16?2                 198:3               	;0
262 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'time'          	;0
263 158  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
264 158  SUB/2                     #126=     $124                 $125                	;0
265 158  DIV/4                     #127=     #126                 201:3600            	;0
266 158  SEND_VAL_EX/116           ?80       #127                 ?1                  	;0
267 158  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
268 158  CONCAT/8                  #129=     $128                 202:' hours'        	;0
269 158  QM_ASSIGN/22              #123=     #129                 ?0                  	;0
270 158  ECHO/40                   ?0        #123                 ?0                  	;0	<<259
271 159  ECHO/40                   ?0        203:'.
                </div>
                ' ?0                  	;0
272 160  GOTO/253                  ?0        ?196                 ?204                	;0
273 162  ECHO/40                   ?0        205:'                                <table class="table table-striped table-borderless dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">IP Address</th>
                                            <th class="text-center">MAC Address</th>
                                            <th class="text-center">Issue Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' ?0                  	;0
274 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'count'         	;1
275 163  FETCH_DIM_FUNC_ARG/93     $130=     16?0                 208:'log'           	;1
276 163  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
277 163  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
278 163  ADD/1                     #132=     $131                 209:1               	;0
279 163  ASSIGN/38                 ?123      16?8                 #132                	;0
280 164  FETCH_DIM_R/81            $134=     16?0                 210:'log'           	;0
281 164  FE_RESET_R/77             $135=     $134                 ?318                	;0
282 164  FE_FETCH_R/78             ?0        $135                 16?9                	;318	>>318	<<317
283 165  NOP/0                     ?0        ?0                   ?0                  	;1
284 165  GOTO/253                  ?0        ?285                 ?211                	;0
285 167  POST_DEC/37               #136=     16?8                 ?0                  	;0
286 167  FREE/70                   ?0        #136                 ?0                  	;0
287 168  ECHO/40                   ?0        212:'                                        <tr>
                                            <td class="text-center">' ?0                  	;0
288 169  ECHO/40                   ?0        16?8                 ?0                  	;0
289 170  ECHO/40                   ?0        213:'</td>
                                            <td class="text-center">' ?0                  	;0
290 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'htmlentities'  	;1
291 171  FETCH_DIM_FUNC_ARG/93     $137=     16?9                 216:'ip'            	;1
292 171  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
293 171  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
294 171  ECHO/40                   ?0        $138                 ?0                  	;0
295 172  NOP/0                     ?0        ?0                   ?0                  	;1
296 172  GOTO/253                  ?0        ?299                 ?217                	;0
297 175  NOP/0                     ?0        ?0                   ?0                  	;1
298 175  GOTO/253                  ?0        ?317                 ?218                	;0
299 177  ECHO/40                   ?0        219:'</td>
                                            <td class="text-center">' ?0                  	;0
300 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'htmlentities'  	;1
301 178  FETCH_DIM_FUNC_ARG/93     $139=     16?9                 222:'mac'           	;1
302 178  SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
303 178  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
304 178  ECHO/40                   ?0        $140                 ?0                  	;0
305 179  ECHO/40                   ?0        223:'</td>
                                            <td class="text-center">' ?0                  	;0
306 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'date'          	;2
307 180  FETCH_STATIC_PROP_FUNC_ARG/177 $141=     226:'rSettings'      227:'XUI'           	;1
308 180  FETCH_DIM_FUNC_ARG/93     $142=     $141                 229:'datetime_format'	;1
309 180  SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
310 180  FETCH_DIM_FUNC_ARG/93     $143=     16?9                 230:'date'          	;2
311 180  SEND_VAR_EX/66            ?96       $143                 ?2                  	;0
312 180  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
313 180  ECHO/40                   ?0        $144                 ?0                  	;0
314 181  ECHO/40                   ?0        231:'</td>
                                        </tr>
                                        ' ?0                  	;0
315 182  NOP/0                     ?0        ?0                   ?0                  	;1
316 182  GOTO/253                  ?0        ?297                 ?232                	;0
317 183  JMP/42                    ?0        ?282                 ?0                  	;0	>>282
318 183  FE_FREE/127               ?0        $135                 ?0                  	;0	<<281
319 186  ECHO/40                   ?0        233:'                                    </tbody>
                                </table>
                                ' ?0                  	;0
320 187  GOTO/253                  ?0        ?33                  ?234                	;0
321 189  FETCH_IS/89               $145=     235:'_POST'          ?0                  	;0
322 189  ISSET_ISEMPTY_DIM_OBJ/115 #146=     $145                 236:'update_license'	;33554432
323 189  JMPZ/43                   ?0        #146                 ?325                	;0	>>325
324 190  GOTO/253                  ?0        ?155                 ?237                	;0
325 192  FETCH_IS/89               $147=     238:'_POST'          ?0                  	;0	<<323
326 192  ISSET_ISEMPTY_DIM_OBJ/115 #148=     $147                 239:'update_xui'    	;33554432
327 192  BOOL_NOT/13               #149=     #148                 ?0                  	;0
328 192  JMPZ/43                   ?0        #149                 ?330                	;0	>>330
329 193  GOTO/253                  ?0        ?154                 ?240                	;0
330 195  INIT_METHOD_CALL/112      ?0        16?1                 241:'query'         	;3	<<328
331 195  SEND_VAL_EX/116           ?80       243:'DELETE FROM `signals` WHERE `server_id` = ? AND `custom_data` = ?;' ?1                  	;0
332 195  FETCH_CONSTANT/99         #150=     ?0                   244:'SERVER_ID'     	;16
333 195  SEND_VAL_EX/116           ?96       #150                 ?2                  	;0
334 195  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'json_encode'   	;1
335 195  SEND_VAL_EX/116           ?80       249:array (
  'action' => 'update',
) ?1                  	;0
336 195  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
337 195  SEND_VAR_NO_REF_EX/50     ?112      $151                 ?3                  	;0
338 195  DO_FCALL/60               ?142      ?0                   ?0                  	;0
339 196  INIT_METHOD_CALL/112      ?0        16?1                 250:'query'         	;4
340 196  SEND_VAL_EX/116           ?80       252:'INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);' ?1                  	;0
341 196  FETCH_CONSTANT/99         #153=     ?0                   253:'SERVER_ID'     	;16
342 196  SEND_VAL_EX/116           ?96       #153                 ?2                  	;0
343 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'time'          	;0
344 196  DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
345 196  SEND_VAR_NO_REF_EX/50     ?112      $154                 ?3                  	;0
346 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'json_encode'   	;1
347 196  SEND_VAL_EX/116           ?80       260:array (
  'action' => 'update',
) ?1                  	;0
348 196  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
349 196  SEND_VAR_NO_REF_EX/50     ?128      $155                 ?4                  	;0
350 196  DO_FCALL/60               ?146      ?0                   ?0                  	;0
351 197  FETCH_CONSTANT/99         #157=     ?0                   261:'SERVER_ID'     	;16
352 197  FETCH_DIM_W/84            $158=     16?4                 #157                	;0
353 197  ASSIGN_DIM/147            ?149      $158                 264:'status'        	;0
354 197  OP_DATA/137               ?0        265:5                ?0                  	;0
355 198  GOTO/253                  ?0        ?154                 ?266                	;0
356 200  INCLUDE_OR_EVAL/73        ?150      267:'footer.php'     ?0                  	;2
357 201  NOP/0                     ?0        268:1                ?0                  	;4294967295
*/

?>