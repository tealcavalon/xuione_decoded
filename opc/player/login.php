<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?187                 ?0                  	;0	>>187
1   5    FETCH_DIM_R/81            $9=       16?0                 1:'isp_is_server'   	;0
2   5    JMPZ_EX/46                #10=      $9                   ?6                  	;0	>>6
3   5    FETCH_DIM_R/81            $11=      16?0                 2:'is_restreamer'   	;0
4   5    BOOL_NOT/13               #12=      $11                  ?0                  	;0
5   5    BOOL/52                   #10=      #12                  ?0                  	;0
6   5    BOOL_NOT/13               #13=      #10                  ?0                  	;0	<<2
7   5    JMPZ/43                   ?0        #13                  ?9                  	;0	>>9
8   6    GOTO/253                  ?0        ?12                  ?3                  	;0
9   8    FETCH_CONSTANT/99         #14=      ?0                   4:'CLIENT_DISALLOWED'	;16	<<7
10  8    ASSIGN/38                 ?6        16?1                 #14                 	;0
11  9    GOTO/253                  ?0        ?224                 ?7                  	;0
12  11   FETCH_DIM_R/81            $18=      16?0                 10:'id'             	;0
13  11   FETCH_W/83                $16=      8:'_SESSION'         ?0                  	;0
14  11   ASSIGN_DIM/147            ?8        $16                  9:'phash'           	;0
15  11   OP_DATA/137               ?0        $18                  ?0                  	;0
16  12   GOTO/253                  ?0        ?211                 ?11                 	;0
17  15   ISSET_ISEMPTY_CV/197      #19=      16?2                 ?0                  	;16777216
18  15   JMPZ/43                   ?0        #19                  ?20                 	;0	>>20
19  16   GOTO/253                  ?0        ?107                 ?12                 	;0
20  18   ISSET_ISEMPTY_DIM_OBJ/115 #20=      16?0                 13:'forced_country' 	;16777216	<<18
21  18   BOOL_NOT/13               #21=      #20                  ?0                  	;0
22  18   ASSIGN/38                 ?13       16?3                 #21                 	;0
23  19   JMPZ_EX/46                #23=      16?3                 ?27                 	;0	>>27
24  19   FETCH_DIM_R/81            $24=      16?0                 14:'forced_country' 	;0
25  19   IS_NOT_EQUAL/18           #25=      $24                  15:'ALL'            	;0
26  19   BOOL/52                   #23=      #25                  ?0                  	;0
27  19   JMPZ_EX/46                #23=      #23                  ?31                 	;0	>>31	<<23
28  19   FETCH_DIM_R/81            $26=      16?0                 16:'forced_country' 	;0
29  19   IS_NOT_EQUAL/18           #27=      16?2                 $26                 	;0
30  19   BOOL/52                   #23=      #27                  ?0                  	;0
31  19   BOOL_NOT/13               #28=      #23                  ?0                  	;0	<<27
32  19   JMPZ/43                   ?0        #28                  ?34                 	;0	>>34
33  20   GOTO/253                  ?0        ?125                 ?17                 	;0
34  22   FETCH_CONSTANT/99         #29=      ?0                   18:'CLIENT_DISALLOWED'	;16	<<32
35  22   ASSIGN/38                 ?21       16?1                 #29                 	;0
36  23   GOTO/253                  ?0        ?124                 ?21                 	;0
37  25   INIT_STATIC_METHOD_CALL/113 ?0        22:'XUI'             24:'aeeA5d3137274f80'	;0
38  25   DO_FCALL/60               ?22       ?0                   ?0                  	;0
39  28   ECHO/40                   ?0        26:'<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<title>' ?0                  	;0
40  29   FETCH_STATIC_PROP_R/173   $32=      27:'rSettings'       28:'XUI'            	;0
41  29   FETCH_DIM_R/81            $33=      $32                  30:'server_name'    	;0
42  29   ECHO/40                   ?0        $33                  ?0                  	;0
43  30   GOTO/253                  ?0        ?174                 ?31                 	;0
44  32   INIT_STATIC_METHOD_CALL/113 ?0        32:'XUI'             34:'verifyLicense'  	;0
45  32   DO_FCALL/60               ?25       ?0                   ?0                  	;0
46  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'DBC3e29f55C945AB'	;0
47  33   DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
48  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'define'         	;2
49  34   SEND_VAL_EX/116           ?80       40:'CLIENT_INVALID'  ?1                  	;0
50  34   SEND_VAL_EX/116           ?96       41:0                 ?2                  	;0
51  34   DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
52  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'define'         	;2
53  35   SEND_VAL_EX/116           ?80       44:'CLIENT_IS_E2'    ?1                  	;0
54  35   SEND_VAL_EX/116           ?96       45:1                 ?2                  	;0
55  35   DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
56  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'define'         	;2
57  36   SEND_VAL_EX/116           ?80       48:'CLIENT_IS_MAG'   ?1                  	;0
58  36   SEND_VAL_EX/116           ?96       49:2                 ?2                  	;0
59  36   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
60  37   GOTO/253                  ?0        ?247                 ?50                 	;0
61  39   FETCH_DIM_R/81            $39=      16?0                 51:'is_stalker'     	;0
62  39   BOOL_NOT/13               #40=      $39                  ?0                  	;0
63  39   JMPZ/43                   ?0        #40                  ?65                 	;0	>>65
64  40   GOTO/253                  ?0        ?68                  ?52                 	;0
65  42   FETCH_CONSTANT/99         #41=      ?0                   53:'CLIENT_IS_STALKER'	;16	<<63
66  42   ASSIGN/38                 ?33       16?1                 #41                 	;0
67  43   GOTO/253                  ?0        ?224                 ?56                 	;0
68  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'is_null'        	;1
69  45   FETCH_DIM_FUNC_ARG/93     $43=      16?0                 59:'exp_date'       	;1
70  45   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
71  45   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
72  45   BOOL_NOT/13               #45=      $44                  ?0                  	;0
73  45   JMPZ_EX/46                #45=      #45                  ?79                 	;0	>>79
74  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'time'           	;0
75  45   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
76  45   FETCH_DIM_R/81            $47=      16?0                 62:'exp_date'       	;0
77  45   IS_SMALLER_OR_EQUAL/20    #48=      $47                  $46                 	;0
78  45   BOOL/52                   #45=      #48                  ?0                  	;0
79  45   BOOL_NOT/13               #49=      #45                  ?0                  	;0	<<73
80  45   JMPZ/43                   ?0        #49                  ?82                 	;0	>>82
81  46   GOTO/253                  ?0        ?231                 ?63                 	;0
82  48   GOTO/253                  ?0        ?228                 ?64                 	;0	<<80
83  51   ASSIGN/38                 ?41       16?4                 65:false            	;0
84  52   ISSET_ISEMPTY_DIM_OBJ/115 #51=      16?0                 66:'allowed_ips'    	;16777216
85  52   BOOL_NOT/13               #52=      #51                  ?0                  	;0
86  52   JMPZ_EX/46                #52=      #52                  ?98                 	;0	>>98
87  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'in_array'       	;2
88  52   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
89  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'array_map'      	;2
90  52   SEND_VAL_EX/116           ?80       71:'gethostbyname'   ?1                  	;0
91  52   FETCH_DIM_FUNC_ARG/93     $53=      16?0                 72:'allowed_ips'    	;2
92  52   SEND_VAR_EX/66            ?96       $53                  ?2                  	;0
93  52   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
94  52   SEND_VAR_NO_REF_EX/50     ?96       $54                  ?2                  	;0
95  52   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
96  52   BOOL_NOT/13               #56=      $55                  ?0                  	;0
97  52   BOOL/52                   #52=      #56                  ?0                  	;0
98  52   BOOL_NOT/13               #57=      #52                  ?0                  	;0	<<86
99  52   JMPZ/43                   ?0        #57                  ?101                	;0	>>101
100 53   GOTO/253                  ?0        ?17                  ?73                 	;0
101 55   FETCH_CONSTANT/99         #58=      ?0                   74:'CLIENT_DISALLOWED'	;16	<<99
102 55   ASSIGN/38                 ?50       16?1                 #58                 	;0
103 56   GOTO/253                  ?0        ?224                 ?77                 	;0
104 57   GOTO/253                  ?0        ?17                  ?78                 	;0
105 60   ECHO/40                   ?0        79:'                        <div class="alert bg-animate" style="color: #fff;padding-top: 80px; padding-bottom: 80px;">
                            Installation has been completed!<br/><br/>Please delete <strong>install.php</strong> to continue.
                        </div>
                        ' ?0                  	;0
106 62   GOTO/253                  ?0        ?339                 ?80                 	;0
107 66   ISSET_ISEMPTY_DIM_OBJ/115 #60=      16?0                 81:'allowed_ua'     	;16777216
108 66   BOOL_NOT/13               #61=      #60                  ?0                  	;0
109 66   JMPZ_EX/46                #61=      #61                  ?117                	;0	>>117
110 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'in_array'       	;2
111 66   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
112 66   FETCH_DIM_FUNC_ARG/93     $62=      16?0                 84:'allowed_ua'     	;2
113 66   SEND_VAR_EX/66            ?96       $62                  ?2                  	;0
114 66   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
115 66   BOOL_NOT/13               #64=      $63                  ?0                  	;0
116 66   BOOL/52                   #61=      #64                  ?0                  	;0
117 66   BOOL_NOT/13               #65=      #61                  ?0                  	;0	<<109
118 66   JMPZ/43                   ?0        #65                  ?120                	;0	>>120
119 67   GOTO/253                  ?0        ?166                 ?85                 	;0
120 69   FETCH_CONSTANT/99         #66=      ?0                   86:'CLIENT_DISALLOWED'	;16	<<118
121 69   ASSIGN/38                 ?58       16?1                 #66                 	;0
122 70   GOTO/253                  ?0        ?224                 ?89                 	;0
123 71   GOTO/253                  ?0        ?166                 ?90                 	;0
124 73   GOTO/253                  ?0        ?224                 ?91                 	;0
125 75   BOOL_NOT/13               #68=      16?3                 ?0                  	;0
126 75   JMPZ_EX/46                #68=      #68                  ?135                	;0	>>135
127 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'in_array'       	;2
128 75   SEND_VAL_EX/116           ?80       94:'ALL'             ?1                  	;0
129 75   FETCH_STATIC_PROP_FUNC_ARG/177 $69=      95:'rSettings'       96:'XUI'            	;2
130 75   FETCH_DIM_FUNC_ARG/93     $70=      $69                  98:'allow_countries'	;2
131 75   SEND_VAR_EX/66            ?96       $70                  ?2                  	;0
132 75   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
133 75   BOOL_NOT/13               #72=      $71                  ?0                  	;0
134 75   BOOL/52                   #68=      #72                  ?0                  	;0
135 75   JMPZ_EX/46                #68=      #68                  ?144                	;0	>>144	<<126
136 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'in_array'       	;2
137 75   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
138 75   FETCH_STATIC_PROP_FUNC_ARG/177 $73=      101:'rSettings'      102:'XUI'           	;2
139 75   FETCH_DIM_FUNC_ARG/93     $74=      $73                  104:'allow_countries'	;2
140 75   SEND_VAR_EX/66            ?96       $74                  ?2                  	;0
141 75   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
142 75   BOOL_NOT/13               #76=      $75                  ?0                  	;0
143 75   BOOL/52                   #68=      #76                  ?0                  	;0
144 75   BOOL_NOT/13               #77=      #68                  ?0                  	;0	<<135
145 75   JMPZ/43                   ?0        #77                  ?147                	;0	>>147
146 76   GOTO/253                  ?0        ?107                 ?105                	;0
147 78   FETCH_CONSTANT/99         #78=      ?0                   106:'CLIENT_DISALLOWED'	;16	<<145
148 78   ASSIGN/38                 ?70       16?1                 #78                 	;0
149 79   GOTO/253                  ?0        ?224                 ?109                	;0
150 80   GOTO/253                  ?0        ?107                 ?110                	;0
151 82   GOTO/253                  ?0        ?224                 ?111                	;0
152 84   FETCH_DIM_R/81            $80=      16?0                 112:'is_e2'         	;0
153 84   BOOL_NOT/13               #81=      $80                  ?0                  	;0
154 84   JMPZ/43                   ?0        #81                  ?156                	;0	>>156
155 85   GOTO/253                  ?0        ?239                 ?113                	;0
156 87   FETCH_CONSTANT/99         #82=      ?0                   114:'CLIENT_IS_E2'  	;16	<<154
157 87   ASSIGN/38                 ?74       16?1                 #82                 	;0
158 88   GOTO/253                  ?0        ?224                 ?117                	;0
159 89   GOTO/253                  ?0        ?239                 ?118                	;0
160 91   FETCH_DIM_R/81            $84=      16?7                 16?1                	;0
161 91   ECHO/40                   ?0        $84                  ?0                  	;0
162 92   ECHO/40                   ?0        119:'                            </div>
                            ' ?0                  	;0
163 94   ECHO/40                   ?0        120:'                            <button class="sign__btn" type="submit">LOGIN</button>
						</form>
                        ' ?0                  	;0
164 95   GOTO/253                  ?0        ?106                 ?121                	;0
165 96   GOTO/253                  ?0        ?105                 ?122                	;0
166 99   FETCH_DIM_R/81            $85=      16?0                 123:'isp_violate'   	;0
167 99   BOOL_NOT/13               #86=      $85                  ?0                  	;0
168 99   JMPZ/43                   ?0        #86                  ?170                	;0	>>170
169 100  GOTO/253                  ?0        ?173                 ?124                	;0
170 102  FETCH_CONSTANT/99         #87=      ?0                   125:'CLIENT_DISALLOWED'	;16	<<168
171 102  ASSIGN/38                 ?79       16?1                 #87                 	;0
172 103  GOTO/253                  ?0        ?224                 ?128                	;0
173 105  GOTO/253                  ?0        ?1                   ?129                	;0
174 107  ECHO/40                   ?0        130:'</title>
</head>
<body class="body" style="padding-bottom: 0 !important;">
	<div class="sign">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
                        ' ?0                  	;0
175 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'file_exists'   	;1
176 108  SEND_VAL_EX/116           ?80       133:'install.php'    ?1                  	;0
177 108  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
178 108  JMPZ/43                   ?0        $89                  ?180                	;0	>>180
179 109  GOTO/253                  ?0        ?105                 ?134                	;0
180 111  ECHO/40                   ?0        135:'						<form action="./login.php" class="sign__form" method="post">
							<span class="sign__logo">
                                <img src="img/logo.png" alt="" height="80px">
                            </span>
							<div class="sign__group">
								<input type="text" name="username" class="sign__input" placeholder="Username">
							</div>
							<div class="sign__group">
								<input type="password" name="password" class="sign__input" placeholder="Password">
							</div>
                            ' ?0                  	;0	<<178
181 112  ISSET_ISEMPTY_CV/197      #90=      16?1                 ?0                  	;33554432
182 112  BOOL_NOT/13               #91=      #90                  ?0                  	;0
183 112  JMPZ/43                   ?0        #91                  ?185                	;0	>>185
184 113  GOTO/253                  ?0        ?163                 ?136                	;0
185 115  ECHO/40                   ?0        137:'                            <div class="alert alert-danger">
                                ' ?0                  	;0	<<183
186 116  GOTO/253                  ?0        ?160                 ?138                	;0
187 118  ASSIGN/38                 ?83       16?8                 139:true            	;0	<<0
188 119  INCLUDE_OR_EVAL/73        ?84       140:'functions.php'  ?0                  	;2
189 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'file_exists'   	;1
190 120  SEND_VAL_EX/116           ?80       143:'install.php'    ?1                  	;0
191 120  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
192 120  JMPZ_EX/46                #95=      $94                  ?198                	;0	>>198
193 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'file_exists'   	;1
194 120  SEND_VAL_EX/116           ?80       146:'config.php'     ?1                  	;0
195 120  DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
196 120  BOOL_NOT/13               #97=      $96                  ?0                  	;0
197 120  BOOL/52                   #95=      #97                  ?0                  	;0
198 120  JMPZ_EX/46                #95=      #95                  ?204                	;0	>>204	<<192
199 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'extension_loaded'	;1
200 120  SEND_VAL_EX/116           ?80       149:'xui'            ?1                  	;0
201 120  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
202 120  BOOL_NOT/13               #99=      $98                  ?0                  	;0
203 120  BOOL/52                   #95=      #99                  ?0                  	;0
204 120  BOOL_NOT/13               #100=     #95                  ?0                  	;0	<<198
205 120  JMPZ/43                   ?0        #100                 ?207                	;0	>>207
206 121  GOTO/253                  ?0        ?210                 ?150                	;0
207 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'header'        	;1	<<205
208 123  SEND_VAL_EX/116           ?80       153:'Location: install.php' ?1                  	;0
209 123  DO_FCALL_BY_NAME/131      ?92       ?0                   ?0                  	;0
210 125  GOTO/253                  ?0        ?44                  ?154                	;0
211 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'md5'           	;1
212 127  FETCH_DIM_R/81            $104=     16?0                 159:'username'      	;0
213 127  CONCAT/8                  #105=     $104                 160:'||'            	;0
214 127  FETCH_DIM_R/81            $106=     16?0                 161:'password'      	;0
215 127  CONCAT/8                  #107=     #105                 $106                	;0
216 127  SEND_VAL_EX/116           ?80       #107                 ?1                  	;0
217 127  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
218 127  FETCH_W/83                $102=     155:'_SESSION'       ?0                  	;0
219 127  ASSIGN_DIM/147            ?94       $102                 156:'pverify'       	;0
220 127  OP_DATA/137               ?0        $108                 ?0                  	;0
221 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'header'        	;1
222 128  SEND_VAL_EX/116           ?80       164:'Location: index.php' ?1                  	;0
223 128  DO_FCALL_BY_NAME/131      ?100      ?0                   ?0                  	;0
224 131  BOOL_NOT/13               #110=     16?4                 ?0                  	;0
225 131  JMPZ/43                   ?0        #110                 ?227                	;0	>>227
226 132  GOTO/253                  ?0        ?39                  ?165                	;0
227 134  GOTO/253                  ?0        ?37                  ?166                	;0	<<225
228 136  FETCH_CONSTANT/99         #111=     ?0                   167:'CLIENT_EXPIRED'	;16
229 136  ASSIGN/38                 ?103      16?1                 #111                	;0
230 137  GOTO/253                  ?0        ?224                 ?170                	;0
231 139  FETCH_DIM_R/81            $113=     16?0                 171:'admin_enabled' 	;0
232 139  IS_EQUAL/17               #114=     $113                 172:0               	;0
233 139  BOOL_NOT/13               #115=     #114                 ?0                  	;0
234 139  JMPZ/43                   ?0        #115                 ?236                	;0	>>236
235 140  GOTO/253                  ?0        ?269                 ?173                	;0
236 142  FETCH_CONSTANT/99         #116=     ?0                   174:'CLIENT_BANNED' 	;16	<<234
237 142  ASSIGN/38                 ?108      16?1                 #116                	;0
238 143  GOTO/253                  ?0        ?268                 ?177                	;0
239 146  FETCH_DIM_R/81            $118=     16?0                 178:'is_mag'        	;0
240 146  BOOL_NOT/13               #119=     $118                 ?0                  	;0
241 146  JMPZ/43                   ?0        #119                 ?243                	;0	>>243
242 147  GOTO/253                  ?0        ?246                 ?179                	;0
243 149  FETCH_CONSTANT/99         #120=     ?0                   180:'CLIENT_IS_MAG' 	;16	<<241
244 149  ASSIGN/38                 ?112      16?1                 #120                	;0
245 150  GOTO/253                  ?0        ?224                 ?183                	;0
246 152  GOTO/253                  ?0        ?61                  ?184                	;0
247 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'define'        	;2
248 154  SEND_VAL_EX/116           ?80       187:'CLIENT_IS_STALKER' ?1                  	;0
249 154  SEND_VAL_EX/116           ?96       188:3                ?2                  	;0
250 154  DO_FCALL_BY_NAME/131      ?113      ?0                   ?0                  	;0
251 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'define'        	;2
252 155  SEND_VAL_EX/116           ?80       191:'CLIENT_EXPIRED' ?1                  	;0
253 155  SEND_VAL_EX/116           ?96       192:4                ?2                  	;0
254 155  DO_FCALL_BY_NAME/131      ?114      ?0                   ?0                  	;0
255 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'define'        	;2
256 156  SEND_VAL_EX/116           ?80       195:'CLIENT_BANNED'  ?1                  	;0
257 156  SEND_VAL_EX/116           ?96       196:5                ?2                  	;0
258 156  DO_FCALL_BY_NAME/131      ?115      ?0                   ?0                  	;0
259 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'define'        	;2
260 157  SEND_VAL_EX/116           ?80       199:'CLIENT_DISABLED' ?1                  	;0
261 157  SEND_VAL_EX/116           ?96       200:6                ?2                  	;0
262 157  DO_FCALL_BY_NAME/131      ?116      ?0                   ?0                  	;0
263 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'define'        	;2
264 158  SEND_VAL_EX/116           ?80       203:'CLIENT_DISALLOWED' ?1                  	;0
265 158  SEND_VAL_EX/116           ?96       204:7                ?2                  	;0
266 158  DO_FCALL_BY_NAME/131      ?117      ?0                   ?0                  	;0
267 159  GOTO/253                  ?0        ?300                 ?205                	;0
268 161  GOTO/253                  ?0        ?224                 ?206                	;0
269 163  FETCH_DIM_R/81            $127=     16?0                 207:'enabled'       	;0
270 163  IS_EQUAL/17               #128=     $127                 208:0               	;0
271 163  BOOL_NOT/13               #129=     #128                 ?0                  	;0
272 163  JMPZ/43                   ?0        #129                 ?274                	;0	>>274
273 164  GOTO/253                  ?0        ?83                  ?209                	;0
274 166  FETCH_CONSTANT/99         #130=     ?0                   210:'CLIENT_DISABLED'	;16	<<272
275 166  ASSIGN/38                 ?122      16?1                 #130                	;0
276 167  GOTO/253                  ?0        ?224                 ?213                	;0
277 168  GOTO/253                  ?0        ?83                  ?214                	;0
278 170  ASSIGN/38                 ?123      16?4                 215:true            	;0
279 171  FETCH_IS/89               $133=     216:'_SERVER'        ?0                  	;0
280 171  ISSET_ISEMPTY_DIM_OBJ/115 #134=     $133                 217:'HTTP_USER_AGENT'	;16777216
281 171  JMPZ/43                   ?0        #134                 ?284                	;0	>>284
282 171  QM_ASSIGN/22              #135=     218:''               ?0                  	;0
283 171  JMP/42                    ?0        ?293                 ?0                  	;0	>>293
284 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'htmlentities'  	;1	<<281
285 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'trim'          	;1
286 171  FETCH_FUNC_ARG/92         $136=     223:'_SERVER'        ?0                  	;1
287 171  FETCH_DIM_FUNC_ARG/93     $137=     $136                 224:'HTTP_USER_AGENT'	;1
288 171  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
289 171  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
290 171  SEND_VAR_NO_REF_EX/50     ?80       $138                 ?1                  	;0
291 171  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
292 171  QM_ASSIGN/22              #135=     $139                 ?0                  	;0
293 171  ASSIGN/38                 ?131      16?6                 #135                	;0	<<283
294 172  JMPZ/43                   ?0        16?0                 ?296                	;0	>>296
295 173  GOTO/253                  ?0        ?152                 ?225                	;0
296 175  FETCH_CONSTANT/99         #141=     ?0                   226:'CLIENT_INVALID'	;16	<<294
297 175  ASSIGN/38                 ?133      16?1                 #141                	;0
298 176  GOTO/253                  ?0        ?224                 ?229                	;0
299 177  GOTO/253                  ?0        ?151                 ?230                	;0
300 179  ASSIGN/38                 ?134      16?7                 231:array (
  0 => 'Invalid username or password.',
  1 => 'Enigma lines are not permitted here.',
  2 => 'MAG lines are not permitted here.',
  3 => 'Stalker lines are not permitted here.',
  4 => 'Your line has expired.',
  5 => 'Your line has been banned.',
  6 => 'Your line has been disabled.',
  7 => 'You are not allowed to access this player.',
)	;0
301 180  FETCH_STATIC_PROP_IS/176  $144=     232:'rRequest'       233:'XUI'           	;0
302 180  ISSET_ISEMPTY_DIM_OBJ/115 #145=     $144                 235:'username'      	;16777216
303 180  BOOL_NOT/13               #146=     #145                 ?0                  	;0
304 180  JMPNZ_EX/47               #146=     #146                 ?309                	;0	>>309
305 180  FETCH_STATIC_PROP_IS/176  $147=     236:'rRequest'       237:'XUI'           	;0
306 180  ISSET_ISEMPTY_DIM_OBJ/115 #148=     $147                 239:'password'      	;16777216
307 180  BOOL_NOT/13               #149=     #148                 ?0                  	;0
308 180  BOOL/52                   #146=     #149                 ?0                  	;0
309 180  BOOL_NOT/13               #150=     #146                 ?0                  	;0	<<304
310 180  JMPZ/43                   ?0        #150                 ?312                	;0	>>312
311 181  GOTO/253                  ?0        ?39                  ?240                	;0
312 183  INIT_STATIC_METHOD_CALL/113 ?0        241:'XUI'            243:'aD72B4259ca295b2'	;0	<<310
313 183  DO_FCALL/60               $151=     ?0                   ?0                  	;0
314 183  ASSIGN/38                 ?143      16?5                 $151                	;0
315 184  FETCH_CONSTANT/99         #153=     ?0                   245:'PLATFORM'      	;16
316 184  IS_EQUAL/17               #154=     #153                 248:'xui'           	;0
317 184  JMPZ/43                   ?0        #154                 ?325                	;0	>>325
318 184  INIT_STATIC_METHOD_CALL/113 ?0        249:'XUI'            251:'AEd9009B5dc15cAE'	;1
319 184  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
320 184  DO_FCALL/60               $155=     ?0                   ?0                  	;0
321 184  FETCH_DIM_R/81            $156=     $155                 253:'country'       	;0
322 184  FETCH_DIM_R/81            $157=     $156                 254:'iso_code'      	;0
323 184  QM_ASSIGN/22              #158=     $157                 ?0                  	;0
324 184  JMP/42                    ?0        ?326                 ?0                  	;0	>>326
325 184  QM_ASSIGN/22              #158=     255:NULL             ?0                  	;0	<<317
326 184  ASSIGN/38                 ?150      16?2                 #158                	;0	<<324
327 185  INIT_STATIC_METHOD_CALL/113 ?0        256:'XUI'            258:'cC988751eeBBF271'	;4
328 185  SEND_VAL_EX/116           ?80       260:NULL             ?1                  	;0
329 185  FETCH_STATIC_PROP_FUNC_ARG/177 $160=     261:'rRequest'       262:'XUI'           	;2
330 185  FETCH_DIM_FUNC_ARG/93     $161=     $160                 264:'username'      	;2
331 185  SEND_VAR_EX/66            ?96       $161                 ?2                  	;0
332 185  FETCH_STATIC_PROP_FUNC_ARG/177 $162=     265:'rRequest'       266:'XUI'           	;3
333 185  FETCH_DIM_FUNC_ARG/93     $163=     $162                 268:'password'      	;3
334 185  SEND_VAR_EX/66            ?112      $163                 ?3                  	;0
335 185  SEND_VAL_EX/116           ?128      269:true             ?4                  	;0
336 185  DO_FCALL/60               $164=     ?0                   ?0                  	;0
337 185  ASSIGN/38                 ?156      16?0                 $164                	;0
338 186  GOTO/253                  ?0        ?278                 ?270                	;0
339 188  ECHO/40                   ?0        271:'					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>' ?0                  	;0
340 189  NOP/0                     ?0        272:1                ?0                  	;4294967295
*/

?>