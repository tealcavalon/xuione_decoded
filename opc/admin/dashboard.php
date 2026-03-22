<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?1944                ?0                  	;0	>>1944
1    6     FETCH_STATIC_PROP_IS/176  $38=      1:'rRequest'         2:'XUI'             	;0
2    6     ISSET_ISEMPTY_DIM_OBJ/115 #39=      $38                  4:'server_id'       	;33554432
3    6     JMPZ/43                   ?0        #39                  ?5                  	;0	>>5
4    7     GOTO/253                  ?0        ?1258                ?5                  	;0
5    9     ASSIGN/38                 ?2        16?0                 6:3600              	;0	<<3
6    10    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'time'            	;0
7    10    DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
8    10    ASSIGN/38                 ?4        16?1                 $41                 	;0
9    11    SUB/2                     #43=      16?1                 16?0                	;0
10   11    ASSIGN/38                 ?6        16?2                 #43                 	;0
11   12    GOTO/253                  ?0        ?1371                ?9                  	;0
12   15    ECHO/40                   ?0        10:' text-white">
                    <div class="card-body active-streams">
                        <div class="media align-items-center">
                            <div class="col-3">
                                <div class="avatar-sm bg-light">
                                    <i class="fe-play avatar-title font-22 ' ?0                  	;0
13   16    FETCH_DIM_R/81            $45=      16?3                 11:'theme'          	;0
14   16    IS_EQUAL/17               #46=      $45                  12:1                	;0
15   16    JMPZ/43                   ?0        #46                  ?17                 	;0	>>17
16   17    GOTO/253                  ?0        ?151                 ?13                 	;0
17   19    ECHO/40                   ?0        14:'text-info'       ?0                  	;0	<<15
18   20    GOTO/253                  ?0        ?152                 ?15                 	;0
19   21    GOTO/253                  ?0        ?151                 ?16                 	;0
20   23    IS_SMALLER_OR_EQUAL/20    #47=      17:1000000           16?4                	;0
21   23    BOOL_NOT/13               #48=      #47                  ?0                  	;0
22   23    JMPZ/43                   ?0        #48                  ?24                 	;0	>>24
23   24    GOTO/253                  ?0        ?32                  ?18                 	;0
24   26    ASSIGN/38                 ?11       16?5                 19:true             	;0	<<22
25   27    INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'number_format'  	;2
26   27    SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
27   27    SEND_VAL_EX/116           ?96       22:0                 ?2                  	;0
28   27    DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
29   27    CONCAT/8                  #51=      23:'<div class="timeline-item">
                                            <i class="timeline-icon bg-dark"></i>
                                            <div class="timeline-item-info">
                                                <a href="stream_errors" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Stream Error Logs</strong></a>
                                                <small>You have <strong>' $50                 	;0
30   27    CONCAT/8                  #52=      #51                  24:' logs</strong> stored. <span class="text-secondary">This may indiciate some serious stream issues. You should investigate and clear old logs.</span></small><br/>
                                                <p><br/></p>
                                            </div>
                                        </div>'	;0
31   27    ECHO/40                   ?0        #52                  ?0                  	;0
32   30    GOTO/253                  ?0        ?1309                ?25                 	;0
33   32    ECHO/40                   ?0        26:'text-white'      ?0                  	;0
34   34    ECHO/40                   ?0        27:'"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="text-right">
                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span> <small>Mbps</small></h3>
                                    <p class="text-white mb-1 text-truncate">Network Output</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card cta-box ' ?0                  	;0
35   35    FETCH_DIM_R/81            $53=      16?3                 28:'theme'          	;0
36   35    IS_EQUAL/17               #54=      $53                  29:0                	;0
37   35    BOOL_NOT/13               #55=      #54                  ?0                  	;0
38   35    JMPZ/43                   ?0        #55                  ?40                 	;0	>>40
39   36    GOTO/253                  ?0        ?1184                ?30                 	;0
40   38    ECHO/40                   ?0        31:'bg-danger'       ?0                  	;0	<<38
41   39    GOTO/253                  ?0        ?1184                ?32                 	;0
42   41    ASSIGN/38                 ?18       16?6                 33:'Dashboard'      	;0
43   42    INCLUDE_OR_EVAL/73        ?19       34:'header.php'      ?0                  	;2
44   43    ECHO/40                   ?0        35:'<div class="wrapper">
    <div class="container-fluid">
		' ?0                  	;0
45   44    INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'e589A4bf54a2DAd1'	;2
46   44    SEND_VAL_EX/116           ?80       38:'adv'             ?1                  	;0
47   44    SEND_VAL_EX/116           ?96       39:'index'           ?2                  	;0
48   44    DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
49   44    JMPZ/43                   ?0        $58                  ?51                 	;0	>>51
50   45    GOTO/253                  ?0        ?1897                ?40                 	;0
51   47    ECHO/40                   ?0        41:'		<div class="alert alert-danger show text-center" role="alert" style="margin-top:20px;">
			' ?0                  	;0	<<49
52   48    GOTO/253                  ?0        ?1115                ?42                 	;0
53   50    GOTO/253                  ?0        ?55                  ?43                 	;0
54   52    ECHO/40                   ?0        44:'text-white'      ?0                  	;0
55   54    ECHO/40                   ?0        45:'"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="text-right">
                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                    <p class="text-white mb-1 text-truncate">Active Lines</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ' ?0                  	;0
56   55    GOTO/253                  ?0        ?1354                ?46                 	;0
57   57    GOTO/253                  ?0        ?32                  ?47                 	;0
58   59    INIT_METHOD_CALL/112      ?0        16?7                 48:'query'          	;1
59   59    SEND_VAL_EX/116           ?80       50:'SELECT COUNT(*) AS `count` FROM `lines_activity`;' ?1                  	;0
60   59    DO_FCALL/60               ?21       ?0                   ?0                  	;0
61   60    INIT_METHOD_CALL/112      ?0        16?7                 51:'get_row'        	;0
62   60    DO_FCALL/60               $60=      ?0                   ?0                  	;0
63   60    FETCH_DIM_R/81            $61=      $60                  53:'count'          	;0
64   60    JMP_SET/152               #62=      $61                  ?66                 	;0
65   60    QM_ASSIGN/22              #62=      54:0                 ?0                  	;0
66   60    ASSIGN/38                 ?25       16?8                 #62                 	;0
67   61    IS_SMALLER_OR_EQUAL/20    #64=      55:1000000           16?8                	;0
68   61    BOOL_NOT/13               #65=      #64                  ?0                  	;0
69   61    JMPZ/43                   ?0        #65                  ?71                 	;0	>>71
70   62    GOTO/253                  ?0        ?1280                ?56                 	;0
71   64    GOTO/253                  ?0        ?1272                ?57                 	;0	<<69
72   66    ECHO/40                   ?0        58:'</strong>.<br/>The panel will continue operating until the timer runs out, however if you plan on continuing using XUI you\'ll need to pay your invoice with enough time left for it to verify and update your expiration date on the server.<br/>You can manually update your license by clicking License Info in the Settings dropdown menu.</p>
                                <a href="https://xui.one/billing/" class="text-white font-weight-semibold text-uppercase">Go to Billing Panel <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                            <img class="ml-3 whiteout" src="./assets/images/logo-topbar.png" width="80" style="margin-right: 20px;">
                        </div>
                    </div>
                </div>
                ' ?0                  	;0
73   68    GOTO/253                  ?0        ?1294                ?59                 	;0
74   70    ECHO/40                   ?0        60:'                <div class="card cta-box bg-info text-white">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                ' ?0                  	;0
75   71    GOTO/253                  ?0        ?1133                ?61                 	;0
76   74    GOTO/253                  ?0        ?78                  ?62                 	;0
77   76    ASSIGN/38                 ?28       16?9                 63:'Trial'          	;0
78   78    GOTO/253                  ?0        ?42                  ?64                 	;0
79   81    ECHO/40                   ?0        65:'            </div>
            <div class="col-md-4">
                <div class="card cta-box ' ?0                  	;0
80   82    FETCH_DIM_R/81            $67=      16?3                 66:'theme'          	;0
81   82    IS_EQUAL/17               #68=      $67                  67:0                	;0
82   82    BOOL_NOT/13               #69=      #68                  ?0                  	;0
83   82    JMPZ/43                   ?0        #69                  ?85                 	;0	>>85
84   83    GOTO/253                  ?0        ?86                  ?68                 	;0
85   85    ECHO/40                   ?0        69:'bg-primary'      ?0                  	;0	<<83
86   87    GOTO/253                  ?0        ?1222                ?70                 	;0
87   90    ECHO/40                   ?0        71:'value="">All Servers</option>
                                ' ?0                  	;0
88   91    FE_RESET_R/77             $70=      16?10                ?125                	;0
89   91    FE_FETCH_R/78             ?0        $70                  16?11               	;125	>>125	<<124
90   92    NOP/0                     ?0        ?0                   ?0                  	;1
91   92    GOTO/253                  ?0        ?92                  ?72                 	;0
92   94    FETCH_DIM_R/81            $71=      16?11                73:'enabled'        	;0
93   94    BOOL_NOT/13               #72=      $71                  ?0                  	;0
94   94    JMPZ/43                   ?0        #72                  ?97                 	;0	>>97
95   95    NOP/0                     ?0        ?0                   ?0                  	;1
96   95    GOTO/253                  ?0        ?122                 ?74                 	;0
97   97    ECHO/40                   ?0        75:'                                    <option value="' ?0                  	;0	<<94
98   98    FETCH_DIM_R/81            $73=      16?11                76:'id'             	;0
99   98    ECHO/40                   ?0        $73                  ?0                  	;0
100  99    ECHO/40                   ?0        77:'"'               ?0                  	;0
101  100   FETCH_STATIC_PROP_IS/176  $74=      78:'rRequest'        79:'XUI'            	;0
102  100   ISSET_ISEMPTY_DIM_OBJ/115 #75=      $74                  81:'server_id'      	;33554432
103  100   JMPZ_EX/46                #75=      #75                  ?109                	;0	>>109
104  100   FETCH_STATIC_PROP_R/173   $76=      82:'rRequest'        83:'XUI'            	;0
105  100   FETCH_DIM_R/81            $77=      $76                  85:'server_id'      	;0
106  100   FETCH_DIM_R/81            $78=      16?11                86:'id'             	;0
107  100   IS_EQUAL/17               #79=      $77                  $78                 	;0
108  100   BOOL/52                   #75=      #79                  ?0                  	;0
109  100   BOOL_NOT/13               #80=      #75                  ?0                  	;0	<<103
110  100   JMPZ/43                   ?0        #80                  ?113                	;0	>>113
111  101   NOP/0                     ?0        ?0                   ?0                  	;1
112  101   GOTO/253                  ?0        ?116                 ?87                 	;0
113  103   NOP/0                     ?0        ?0                   ?0                  	;1	<<110
114  103   GOTO/253                  ?0        ?115                 ?88                 	;0
115  105   ECHO/40                   ?0        89:' selected'       ?0                  	;0
116  107   ECHO/40                   ?0        90:'>'               ?0                  	;0
117  108   FETCH_DIM_R/81            $81=      16?11                91:'server_name'    	;0
118  108   ECHO/40                   ?0        $81                  ?0                  	;0
119  109   ECHO/40                   ?0        92:'</option>
                                ' ?0                  	;0
120  110   NOP/0                     ?0        ?0                   ?0                  	;1
121  110   GOTO/253                  ?0        ?122                 ?93                 	;0
122  114   NOP/0                     ?0        ?0                   ?0                  	;1
123  114   GOTO/253                  ?0        ?124                 ?94                 	;0
124  115   JMP/42                    ?0        ?89                  ?0                  	;0	>>89
125  115   FE_FREE/127               ?0        $70                  ?0                  	;0	<<88
126  118   ECHO/40                   ?0        95:'                            </select>
                        </ol>
                    </div>
                    ' ?0                  	;0
127  119   GOTO/253                  ?0        ?161                 ?96                 	;0
128  121   JMPZ/43                   ?0        16?5                 ?130                	;0	>>130
129  122   GOTO/253                  ?0        ?131                 ?97                 	;0
130  124   ECHO/40                   ?0        98:'                                <div class="timeline-item">
                                    <i class="timeline-icon bg-dark"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-body font-weight-semibold mb-1 d-block bg"><strong>No potential issues have been detected!</strong></a>
                                        <p><br/></p>
                                    </div>
                                </div>
                                ' ?0                  	;0	<<128
131  126   ECHO/40                   ?0        99:'                            </div>
                        </div>
                    </div>
                </div>
            </div>
			' ?0                  	;0
132  128   GOTO/253                  ?0        ?1413                ?100                	;0
133  131   ECHO/40                   ?0        101:'		</div>
		'    ?0                  	;0
134  133   ECHO/40                   ?0        102:'	</div>
</div>
' ?0                  	;0
135  134   GOTO/253                  ?0        ?1963                ?103                	;0
136  136   ECHO/40                   ?0        104:'</a>'           ?0                  	;0
137  138   ECHO/40                   ?0        105:'            </div>
            <div class="col-md-4">
                ' ?0                  	;0
138  139   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'E589A4BF54A2dAd1'	;2
139  139   SEND_VAL_EX/116           ?80       108:'adv'            ?1                  	;0
140  139   SEND_VAL_EX/116           ?96       109:'streams'        ?2                  	;0
141  139   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
142  139   BOOL_NOT/13               #83=      $82                  ?0                  	;0
143  139   JMPZ/43                   ?0        #83                  ?145                	;0	>>145
144  140   GOTO/253                  ?0        ?1295                ?110                	;0
145  142   ECHO/40                   ?0        111:'<a href="./streams?filter=2">' ?0                  	;0	<<143
146  143   GOTO/253                  ?0        ?1295                ?112                	;0
147  145   ECHO/40                   ?0        113:'                                A new invoice should have been generated for you in the billing panel, please ensure you pay with enough time left for it to verify and update your expiration date on the server.<br/>You can manually update your license by clicking License Info in the Settings dropdown menu.</p>
                                ' ?0                  	;0
148  146   GOTO/253                  ?0        ?150                 ?114                	;0
149  148   ECHO/40                   ?0        115:'                                Your Beta license is linked to your Main license, to renew this license you should renew your Main license instead via the billing panel.</p>
                                ' ?0                  	;0
150  150   GOTO/253                  ?0        ?1432                ?116                	;0
151  153   ECHO/40                   ?0        117:'text-white'     ?0                  	;0
152  155   ECHO/40                   ?0        118:'"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="text-right">
                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                    <p class="text-white mb-1 text-truncate">Live Streams</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ' ?0                  	;0
153  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'e589A4BF54A2DaD1'	;2
154  156   SEND_VAL_EX/116           ?80       121:'adv'            ?1                  	;0
155  156   SEND_VAL_EX/116           ?96       122:'streams'        ?2                  	;0
156  156   DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
157  156   BOOL_NOT/13               #85=      $84                  ?0                  	;0
158  156   JMPZ/43                   ?0        #85                  ?160                	;0	>>160
159  157   GOTO/253                  ?0        ?137                 ?123                	;0
160  159   GOTO/253                  ?0        ?136                 ?124                	;0	<<158
161  161   JMPZ/43                   ?0        16?12                ?163                	;0	>>163
162  162   GOTO/253                  ?0        ?1217                ?125                	;0
163  164   ECHO/40                   ?0        126:'                    <h4 class="page-title">
                    ' ?0                  	;0	<<161
164  165   FETCH_STATIC_PROP_IS/176  $86=      127:'rRequest'       128:'XUI'           	;0
165  165   ISSET_ISEMPTY_DIM_OBJ/115 #87=      $86                  130:'server_id'     	;33554432
166  165   JMPZ/43                   ?0        #87                  ?168                	;0	>>168
167  166   GOTO/253                  ?0        ?1192                ?131                	;0
168  168   ECHO/40                   ?0        132:'Dashboard'      ?0                  	;0	<<166
169  169   GOTO/253                  ?0        ?1216                ?133                	;0
170  170   GOTO/253                  ?0        ?1192                ?134                	;0
171  172   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'file_exists'   	;1
172  172   FETCH_CONSTANT/99         #88=      ?0                   137:'CONFIG_PATH'   	;16
173  172   CONCAT/8                  #89=      #88                  140:'signals.last'  	;0
174  172   SEND_VAL_EX/116           ?80       #89                  ?1                  	;0
175  172   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
176  172   BOOL_NOT/13               #91=      $90                  ?0                  	;0
177  172   JMPNZ_EX/47               #91=      #91                  ?188                	;0	>>188
178  172   INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'time'          	;0
179  172   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
180  172   INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'filemtime'     	;1
181  172   FETCH_CONSTANT/99         #93=      ?0                   145:'CONFIG_PATH'   	;16
182  172   CONCAT/8                  #94=      #93                  148:'signals.last'  	;0
183  172   SEND_VAL_EX/116           ?80       #94                  ?1                  	;0
184  172   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
185  172   SUB/2                     #96=      $92                  $95                 	;0
186  172   IS_SMALLER/19             #97=      149:600              #96                 	;0
187  172   BOOL/52                   #91=      #97                  ?0                  	;0
188  172   BOOL_NOT/13               #98=      #91                  ?0                  	;0	<<177
189  172   JMPZ/43                   ?0        #98                  ?191                	;0	>>191
190  173   GOTO/253                  ?0        ?193                 ?150                	;0
191  175   ASSIGN/38                 ?61       16?5                 151:true            	;0	<<189
192  176   ECHO/40                   ?0        152:'<div class="timeline-item">
                                        <i class="timeline-icon bg-dark"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Root Crons Missing</strong></a>
                                            <small>Root cronjob hasn\'t run recently, please check root crontab or run <strong>/home/xui/status</strong></small><br/>
                                            <p><br/></p>
                                        </div>
                                    </div>' ?0                  	;0
193  178   FETCH_STATIC_PROP_R/173   $100=     153:'rSettings'      154:'XUI'           	;0
194  178   FETCH_DIM_R/81            $101=     $100                 156:'use_buffer'    	;0
195  178   BOOL_NOT/13               #102=     $101                 ?0                  	;0
196  178   JMPZ/43                   ?0        #102                 ?198                	;0	>>198
197  179   GOTO/253                  ?0        ?1453                ?157                	;0
198  181   GOTO/253                  ?0        ?1451                ?158                	;0	<<196
199  184   INIT_METHOD_CALL/112      ?0        16?7                 159:'num_rows'      	;0
200  184   DO_FCALL/60               $103=     ?0                   ?0                  	;0
201  184   IS_SMALLER/19             #104=     161:0                $103                	;0
202  184   BOOL_NOT/13               #105=     #104                 ?0                  	;0
203  184   JMPZ/43                   ?0        #105                 ?205                	;0	>>205
204  185   GOTO/253                  ?0        ?1                   ?162                	;0
205  187   ASSIGN/38                 ?68       16?13                163:0               	;0	<<203
206  188   INIT_METHOD_CALL/112      ?0        16?7                 164:'get_rows'      	;0
207  188   DO_FCALL/60               $107=     ?0                   ?0                  	;0
208  188   FE_RESET_R/77             $108=     $107                 ?259                	;0
209  188   FE_FETCH_R/78             ?0        $108                 16?14               	;259	>>259	<<258
210  189   NOP/0                     ?0        ?0                   ?0                  	;1
211  189   GOTO/253                  ?0        ?224                 ?166                	;0
212  191   FETCH_DIM_R/81            $110=     16?14                168:'geoip_country_code'	;0
213  191   FETCH_DIM_R/81            $111=     16?15                $110                	;0
214  191   ASSIGN_DIM/147            ?71       16?14                167:'name'          	;0
215  191   OP_DATA/137               ?0        $111                 ?0                  	;0
216  193   FETCH_DIM_R/81            $112=     16?14                169:'count'         	;0
217  193   ASSIGN_ADD/23             ?75       16?16                $112                	;0
218  194   ASSIGN_DIM/147            ?76       16?17                ?4397406            	;0
219  194   OP_DATA/137               ?0        16?14                ?0                  	;0
220  195   POST_INC/36               #115=     16?13                ?0                  	;0
221  195   FREE/70                   ?0        #115                 ?0                  	;0
222  196   NOP/0                     ?0        ?0                   ?0                  	;1
223  196   GOTO/253                  ?0        ?245                 ?170                	;0
224  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'count'         	;1
225  198   SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
226  198   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
227  198   IS_SMALLER/19             #117=     16?13                $116                	;0
228  198   JMPZ/43                   ?0        #117                 ?231                	;0	>>231
229  199   NOP/0                     ?0        ?0                   ?0                  	;1
230  199   GOTO/253                  ?0        ?240                 ?173                	;0
231  201   INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'count'         	;1	<<228
232  201   SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
233  201   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
234  201   SUB/2                     #120=     $119                 177:1               	;0
235  201   FETCH_DIM_R/81            $121=     16?18                #120                	;0
236  201   ASSIGN_DIM/147            ?80       16?14                174:'colour'        	;0
237  201   OP_DATA/137               ?0        $121                 ?0                  	;0
238  202   NOP/0                     ?0        ?0                   ?0                  	;1
239  202   GOTO/253                  ?0        ?247                 ?178                	;0
240  204   FETCH_DIM_R/81            $123=     16?18                16?13               	;0
241  204   ASSIGN_DIM/147            ?84       16?14                179:'colour'        	;0
242  204   OP_DATA/137               ?0        $123                 ?0                  	;0
243  205   NOP/0                     ?0        ?0                   ?0                  	;1
244  205   GOTO/253                  ?0        ?247                 ?180                	;0
245  208   NOP/0                     ?0        ?0                   ?0                  	;1
246  208   GOTO/253                  ?0        ?258                 ?181                	;0
247  211   FETCH_DIM_R/81            $124=     16?14                182:'geoip_country_code'	;0
248  211   ISSET_ISEMPTY_DIM_OBJ/115 #125=     16?15                $124                	;33554432
249  211   JMPZ/43                   ?0        #125                 ?252                	;0	>>252
250  212   NOP/0                     ?0        ?0                   ?0                  	;1
251  212   GOTO/253                  ?0        ?256                 ?183                	;0
252  214   ASSIGN_DIM/147            ?88       16?14                184:'name'          	;0	<<249
253  214   OP_DATA/137               ?0        185:'Unknown Country' ?0                  	;0
254  215   NOP/0                     ?0        ?0                   ?0                  	;1
255  215   GOTO/253                  ?0        ?216                 ?186                	;0
256  217   NOP/0                     ?0        ?0                   ?0                  	;1
257  217   GOTO/253                  ?0        ?212                 ?187                	;0
258  218   JMP/42                    ?0        ?209                 ?0                  	;0	>>209
259  218   FE_FREE/127               ?0        $108                 ?0                  	;0	<<208
260  221   GOTO/253                  ?0        ?1                   ?188                	;0
261  223   INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'time'          	;0
262  223   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
263  223   FETCH_DIM_R/81            $128=     16?19                191:3               	;0
264  223   IS_SMALLER/19             #129=     $128                 $127                	;0
265  223   JMPZ_EX/46                #129=     #129                 ?271                	;0	>>271
266  223   INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'time'          	;0
267  223   DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
268  223   FETCH_DIM_R/81            $131=     16?19                194:4               	;0
269  223   IS_SMALLER_OR_EQUAL/20    #132=     $130                 $131                	;0
270  223   BOOL/52                   #129=     #132                 ?0                  	;0
271  223   BOOL_NOT/13               #133=     #129                 ?0                  	;0	<<265
272  223   JMPZ/43                   ?0        #133                 ?274                	;0	>>274
273  224   GOTO/253                  ?0        ?73                  ?195                	;0
274  226   ECHO/40                   ?0        196:'                <div class="card cta-box bg-danger text-white">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title"><strong>' ?0                  	;0	<<272
275  227   ECHO/40                   ?0        16?9                 ?0                  	;0
276  228   ECHO/40                   ?0        197:' Expired!</strong></h3>
                                <p class="text-light mt-2 ">XUI will shut down in <strong>' ?0                  	;0
277  229   INIT_STATIC_METHOD_CALL/113 ?0        198:'XUI'            200:'A5D0A3407690f047'	;1
278  229   FETCH_DIM_R/81            $134=     16?19                202:4               	;0
279  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'time'          	;0
280  229   DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
281  229   SUB/2                     #136=     $134                 $135                	;0
282  229   SEND_VAL_EX/116           ?80       #136                 ?1                  	;0
283  229   DO_FCALL/60               $137=     ?0                   ?0                  	;0
284  229   ECHO/40                   ?0        $137                 ?0                  	;0
285  230   GOTO/253                  ?0        ?72                  ?205                	;0
286  232   ECHO/40                   ?0        206:' will expire in <strong>' ?0                  	;0
287  233   INIT_STATIC_METHOD_CALL/113 ?0        207:'XUI'            209:'A5D0a3407690f047'	;1
288  233   FETCH_DIM_R/81            $138=     16?19                211:3               	;0
289  233   INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'time'          	;0
290  233   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
291  233   SUB/2                     #140=     $138                 $139                	;0
292  233   SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
293  233   DO_FCALL/60               $141=     ?0                   ?0                  	;0
294  233   ECHO/40                   ?0        $141                 ?0                  	;0
295  234   ECHO/40                   ?0        214:'</strong>.<br/><br/>
                                ' ?0                  	;0
296  235   IS_EQUAL/17               #142=     16?9                 215:'Trial'         	;0
297  235   JMPZ/43                   ?0        #142                 ?299                	;0	>>299
298  236   GOTO/253                  ?0        ?1433                ?216                	;0
299  238   IS_EQUAL/17               #143=     16?9                 217:'Beta License'  	;0	<<297
300  238   JMPZ/43                   ?0        #143                 ?302                	;0	>>302
301  239   GOTO/253                  ?0        ?149                 ?218                	;0
302  241   GOTO/253                  ?0        ?147                 ?219                	;0	<<300
303  243   ECHO/40                   ?0        220:'text-white'     ?0                  	;0
304  245   ECHO/40                   ?0        221:'"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="text-right">
                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                    <p class="text-white mb-1 text-truncate">Down Streams</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ' ?0                  	;0
305  246   INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'e589A4bF54a2daD1'	;2
306  246   SEND_VAL_EX/116           ?80       224:'adv'            ?1                  	;0
307  246   SEND_VAL_EX/116           ?96       225:'streams'        ?2                  	;0
308  246   DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
309  246   BOOL_NOT/13               #145=     $144                 ?0                  	;0
310  246   JMPZ/43                   ?0        #145                 ?312                	;0	>>312
311  247   GOTO/253                  ?0        ?79                  ?226                	;0
312  249   ECHO/40                   ?0        227:'</a>'           ?0                  	;0	<<310
313  250   GOTO/253                  ?0        ?79                  ?228                	;0
314  252   FE_RESET_R/77             $146=     16?20                ?650                	;0
315  252   FE_FETCH_R/78             ?0        $146                 16?21               	;650	>>650	<<649
316  253   NOP/0                     ?0        ?0                   ?0                  	;1
317  253   GOTO/253                  ?0        ?463                 ?229                	;0
318  255   ECHO/40                   ?0        230:'_requests" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button>
                        </div>
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">' ?0                  	;0
319  256   FETCH_DIM_R/81            $147=     16?22                231:'uptime'        	;0
320  256   ECHO/40                   ?0        $147                 ?0                  	;0
321  257   ECHO/40                   ?0        232:'</h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <button id="s_' ?0                  	;0
322  258   FETCH_DIM_R/81            $148=     16?21                233:'id'            	;0
323  258   ECHO/40                   ?0        $148                 ?0                  	;0
324  259   ECHO/40                   ?0        234:'_uptime" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0d 0h</button>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="progress-w-left">
                                <h4 class="progress-value header-title">IO</h4>
                                <div class="progress progress-xl">
                                    <div class="progress-bar" id="s_' ?0                  	;0
325  260   NOP/0                     ?0        ?0                   ?0                  	;1
326  260   GOTO/253                  ?0        ?344                 ?235                	;0
327  262   NOP/0                     ?0        ?0                   ?0                  	;1
328  262   GOTO/253                  ?0        ?598                 ?236                	;0
329  264   ECHO/40                   ?0        237:'            <div class="col-xl-6 col-md-12">
                <a href="./server_view?id=' ?0                  	;0
330  265   FETCH_DIM_R/81            $149=     16?21                238:'id'            	;0
331  265   ECHO/40                   ?0        $149                 ?0                  	;0
332  266   ECHO/40                   ?0        239:'">
                    <div class="card-header bg-' ?0                  	;0
333  267   NOP/0                     ?0        ?0                   ?0                  	;1
334  267   GOTO/253                  ?0        ?453                 ?240                	;0
335  269   ECHO/40                   ?0        241:'_conns" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>
                        </div>
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">' ?0                  	;0
336  270   FETCH_DIM_R/81            $150=     16?22                242:'users'         	;0
337  270   ECHO/40                   ?0        $150                 ?0                  	;0
338  271   ECHO/40                   ?0        243:'</h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <a href="live_connections?server=' ?0                  	;0
339  272   FETCH_DIM_R/81            $151=     16?21                244:'id'            	;0
340  272   ECHO/40                   ?0        $151                 ?0                  	;0
341  273   ECHO/40                   ?0        245:'"><button id="s_' ?0                  	;0
342  274   NOP/0                     ?0        ?0                   ?0                  	;1
343  274   GOTO/253                  ?0        ?481                 ?246                	;0
344  276   FETCH_DIM_R/81            $152=     16?21                247:'id'            	;0
345  276   ECHO/40                   ?0        $152                 ?0                  	;0
346  277   ECHO/40                   ?0        248:'_io" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">' ?0                  	;0
347  278   FETCH_DIM_R/81            $153=     16?22                249:'input'         	;0
348  278   ECHO/40                   ?0        $153                 ?0                  	;0
349  279   ECHO/40                   ?0        250:'<small>&nbsp;(Mbps)</small></h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <button id="s_' ?0                  	;0
350  280   FETCH_DIM_R/81            $154=     16?21                251:'id'            	;0
351  280   ECHO/40                   ?0        $154                 ?0                  	;0
352  281   NOP/0                     ?0        ?0                   ?0                  	;1
353  281   GOTO/253                  ?0        ?578                 ?252                	;0
354  283   ECHO/40                   ?0        253:'_users">0</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
355  284   FETCH_DIM_R/81            $155=     16?22                254:'online'        	;0
356  284   ECHO/40                   ?0        $155                 ?0                  	;0
357  285   ECHO/40                   ?0        255:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
358  286   FETCH_DIM_R/81            $156=     16?21                256:'id'            	;0
359  286   ECHO/40                   ?0        $156                 ?0                  	;0
360  287   ECHO/40                   ?0        257:'_online">0</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
361  288   NOP/0                     ?0        ?0                   ?0                  	;1
362  288   GOTO/253                  ?0        ?602                 ?258                	;0
363  290   FETCH_DIM_R/81            $157=     16?21                259:'enabled'       	;0
364  290   JMPZ/43                   ?0        $157                 ?367                	;0	>>367
365  291   NOP/0                     ?0        ?0                   ?0                  	;1
366  291   GOTO/253                  ?0        ?370                 ?260                	;0
367  293   ASSIGN/38                 ?120      16?23                261:'Server Disabled'	;0	<<364
368  294   NOP/0                     ?0        ?0                   ?0                  	;1
369  294   GOTO/253                  ?0        ?373                 ?262                	;0
370  296   ASSIGN/38                 ?121      16?23                263:'Load Balancer' 	;0
371  297   NOP/0                     ?0        ?0                   ?0                  	;1
372  297   GOTO/253                  ?0        ?373                 ?264                	;0
373  300   NOP/0                     ?0        ?0                   ?0                  	;1
374  300   GOTO/253                  ?0        ?376                 ?265                	;0
375  302   ASSIGN/38                 ?122      16?23                266:'Main Server'   	;0
376  304   NOP/0                     ?0        ?0                   ?0                  	;1
377  304   GOTO/253                  ?0        ?631                 ?267                	;0
378  306   ECHO/40                   ?0        268:' bg-white'      ?0                  	;0
379  308   ECHO/40                   ?0        269:'">
                        <div class="row" style="margin-bottom:-20px;">
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
380  309   FETCH_DIM_R/81            $161=     16?22                270:'conns'         	;0
381  309   ECHO/40                   ?0        $161                 ?0                  	;0
382  310   ECHO/40                   ?0        271:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
383  311   NOP/0                     ?0        ?0                   ?0                  	;1
384  311   GOTO/253                  ?0        ?568                 ?272                	;0
385  313   ECHO/40                   ?0        273:'</small></h5>
                    </div>
                </a>
                <div class="card-header no-margin-bottom py-3 text-white' ?0                  	;0
386  314   FETCH_DIM_R/81            $162=     16?3                 274:'theme'         	;0
387  314   IS_EQUAL/17               #163=     $162                 275:0               	;0
388  314   BOOL_NOT/13               #164=     #163                 ?0                  	;0
389  314   JMPZ/43                   ?0        #164                 ?392                	;0	>>392
390  315   NOP/0                     ?0        ?0                   ?0                  	;1
391  315   GOTO/253                  ?0        ?393                 ?276                	;0
392  317   ECHO/40                   ?0        277:' bg-white'      ?0                  	;0	<<389
393  319   ECHO/40                   ?0        278:'">
                    <div class="row">
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">' ?0                  	;0
394  320   NOP/0                     ?0        ?0                   ?0                  	;1
395  320   GOTO/253                  ?0        ?546                 ?279                	;0
396  322   ECHO/40                   ?0        280:'" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                            </div>
                            <div class="col-md-4 col-4" align="center">
                                <h4 class="header-title">MEM %</h4>
                                <input class="knob" id="s_' ?0                  	;0
397  323   FETCH_DIM_R/81            $165=     16?21                281:'id'            	;0
398  323   ECHO/40                   ?0        $165                 ?0                  	;0
399  324   ECHO/40                   ?0        282:'_mem" data-plugin="knob" data-width="64" data-height="64" data-fgColor="' ?0                  	;0
400  325   FETCH_DIM_R/81            $166=     16?24                16?13               	;0
401  325   FETCH_DIM_R/81            $167=     $166                 283:1               	;0
402  325   ECHO/40                   ?0        $167                 ?0                  	;0
403  326   ECHO/40                   ?0        284:'" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                            </div>
                            <div class="col-md-4 col-4" align="center">
                                <h4 class="header-title">DISK %</h4>
                                <input class="knob" id="s_' ?0                  	;0
404  327   NOP/0                     ?0        ?0                   ?0                  	;1
405  327   GOTO/253                  ?0        ?491                 ?285                	;0
406  329   FETCH_DIM_R/81            $168=     16?21                286:'server_type'   	;0
407  329   IS_EQUAL/17               #169=     $168                 287:0               	;0
408  329   JMPZ/43                   ?0        #169                 ?411                	;0	>>411
409  330   NOP/0                     ?0        ?0                   ?0                  	;1
410  330   GOTO/253                  ?0        ?615                 ?288                	;0
411  332   FETCH_DIM_R/81            $170=     16?21                289:'enabled'       	;0	<<408
412  332   JMPZ/43                   ?0        $170                 ?415                	;0	>>415
413  333   NOP/0                     ?0        ?0                   ?0                  	;1
414  333   GOTO/253                  ?0        ?418                 ?290                	;0
415  335   ASSIGN/38                 ?133      16?23                291:'Proxy Disabled'	;0	<<412
416  336   NOP/0                     ?0        ?0                   ?0                  	;1
417  336   GOTO/253                  ?0        ?613                 ?292                	;0
418  338   NOP/0                     ?0        ?0                   ?0                  	;1
419  338   GOTO/253                  ?0        ?612                 ?293                	;0
420  340   ECHO/40                   ?0        294:'" data-stroke="' ?0                  	;0
421  341   FETCH_DIM_R/81            $172=     16?24                16?13               	;0
422  341   FETCH_DIM_R/81            $173=     $172                 295:2               	;0
423  341   ECHO/40                   ?0        $173                 ?0                  	;0
424  342   ECHO/40                   ?0        296:'" data-width="100%" data-height="50" data-min="0" data-max="100">' ?0                  	;0
425  343   INIT_FCALL_BY_NAME/59     ?0        ?0                   297:'is_array'      	;1
426  343   FETCH_DIM_R/81            $174=     16?21                299:'id'            	;0
427  343   FETCH_DIM_FUNC_ARG/93     $175=     16?25                $174                	;1
428  343   SEND_VAR_EX/66            ?80       $175                 ?1                  	;0
429  343   DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
430  343   JMPZ/43                   ?0        $176                 ?439                	;0	>>439
431  343   INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'implode'       	;2
432  343   SEND_VAL_EX/116           ?80       302:','              ?1                  	;0
433  343   FETCH_DIM_R/81            $177=     16?21                303:'id'            	;0
434  343   FETCH_DIM_FUNC_ARG/93     $178=     16?25                $177                	;2
435  343   SEND_VAR_EX/66            ?96       $178                 ?2                  	;0
436  343   DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
437  343   QM_ASSIGN/22              #180=     $179                 ?0                  	;0
438  343   JMP/42                    ?0        ?440                 ?0                  	;0	>>440
439  343   QM_ASSIGN/22              #180=     304:''               ?0                  	;0	<<430
440  343   ECHO/40                   ?0        #180                 ?0                  	;0	<<438
441  344   ECHO/40                   ?0        305:'</span>
                    </div>
                </a>
            </div>
            ' ?0                  	;0
442  345   NOP/0                     ?0        ?0                   ?0                  	;1
443  345   GOTO/253                  ?0        ?327                 ?306                	;0
444  347   ECHO/40                   ?0        307:'&filter=1"><button id="s_' ?0                  	;0
445  348   FETCH_DIM_R/81            $181=     16?21                308:'id'            	;0
446  348   ECHO/40                   ?0        $181                 ?0                  	;0
447  349   ECHO/40                   ?0        309:'_online" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>
                        </div>
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">Down</h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <a href="streams?server=' ?0                  	;0
448  350   FETCH_DIM_R/81            $182=     16?21                310:'id'            	;0
449  350   ECHO/40                   ?0        $182                 ?0                  	;0
450  351   ECHO/40                   ?0        311:'&filter=2"><button id="s_' ?0                  	;0
451  352   NOP/0                     ?0        ?0                   ?0                  	;1
452  352   GOTO/253                  ?0        ?621                 ?312                	;0
453  354   FETCH_DIM_R/81            $183=     16?24                16?13               	;0
454  354   FETCH_DIM_R/81            $184=     $183                 313:0               	;0
455  354   ECHO/40                   ?0        $184                 ?0                  	;0
456  355   ECHO/40                   ?0        314:' py-3 text-white">
                        <div class="float-right">
                            <i class="mdi mdi-chart-line"></i>
                        </div>
                        <h5 class="card-title mb-0 text-white">' ?0                  	;0
457  356   FETCH_DIM_R/81            $185=     16?21                315:'server_name'   	;0
458  356   ECHO/40                   ?0        $185                 ?0                  	;0
459  357   ECHO/40                   ?0        316:'<br/><small>'   ?0                  	;0
460  358   ECHO/40                   ?0        16?23                ?0                  	;0
461  359   NOP/0                     ?0        ?0                   ?0                  	;1
462  359   GOTO/253                  ?0        ?385                 ?317                	;0
463  361   FETCH_DIM_R/81            $186=     16?21                318:'enabled'       	;0
464  361   JMPZ_EX/46                #187=     $186                 ?467                	;0	>>467
465  361   FETCH_DIM_R/81            $188=     16?21                319:'server_online' 	;0
466  361   BOOL/52                   #187=     $188                 ?0                  	;0
467  361   BOOL_NOT/13               #189=     #187                 ?0                  	;0	<<464
468  361   JMPZ/43                   ?0        #189                 ?471                	;0	>>471
469  362   NOP/0                     ?0        ?0                   ?0                  	;1
470  362   GOTO/253                  ?0        ?598                 ?320                	;0
471  364   POST_INC/36               #190=     16?13                ?0                  	;0	<<468
472  364   FREE/70                   ?0        #190                 ?0                  	;0
473  365   IS_EQUAL/17               #191=     16?13                321:5               	;0
474  365   BOOL_NOT/13               #192=     #191                 ?0                  	;0
475  365   JMPZ/43                   ?0        #192                 ?478                	;0	>>478
476  366   NOP/0                     ?0        ?0                   ?0                  	;1
477  366   GOTO/253                  ?0        ?479                 ?322                	;0
478  368   ASSIGN/38                 ?155      16?13                323:1               	;0	<<475
479  370   NOP/0                     ?0        ?0                   ?0                  	;1
480  370   GOTO/253                  ?0        ?406                 ?324                	;0
481  372   FETCH_DIM_R/81            $194=     16?21                325:'id'            	;0
482  372   ECHO/40                   ?0        $194                 ?0                  	;0
483  373   ECHO/40                   ?0        326:'_users" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="progress-w-left">
                                <h4 class="progress-value header-title">CPU</h4>
                                <div class="progress progress-xl">
                                    <div class="progress-bar" id="s_' ?0                  	;0
484  374   FETCH_DIM_R/81            $195=     16?21                327:'id'            	;0
485  374   ECHO/40                   ?0        $195                 ?0                  	;0
486  375   ECHO/40                   ?0        328:'_cpu" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">Streams&nbsp;Live</h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <a href="streams?server=' ?0                  	;0
487  376   FETCH_DIM_R/81            $196=     16?21                329:'id'            	;0
488  376   ECHO/40                   ?0        $196                 ?0                  	;0
489  377   NOP/0                     ?0        ?0                   ?0                  	;1
490  377   GOTO/253                  ?0        ?444                 ?330                	;0
491  379   FETCH_DIM_R/81            $197=     16?21                331:'id'            	;0
492  379   ECHO/40                   ?0        $197                 ?0                  	;0
493  380   ECHO/40                   ?0        332:'_fs" data-plugin="knob" data-width="64" data-height="64" data-fgColor="' ?0                  	;0
494  381   FETCH_DIM_R/81            $198=     16?24                16?13               	;0
495  381   FETCH_DIM_R/81            $199=     $198                 333:1               	;0
496  381   ECHO/40                   ?0        $199                 ?0                  	;0
497  382   ECHO/40                   ?0        334:'" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span data-plugin="peity-line" data-fill="' ?0                  	;0
498  383   FETCH_DIM_R/81            $200=     16?24                16?13               	;0
499  383   FETCH_DIM_R/81            $201=     $200                 335:2               	;0
500  383   ECHO/40                   ?0        $201                 ?0                  	;0
501  384   NOP/0                     ?0        ?0                   ?0                  	;1
502  384   GOTO/253                  ?0        ?420                 ?336                	;0
503  386   FETCH_DIM_R/81            $202=     16?21                337:'id'            	;0
504  386   ECHO/40                   ?0        $202                 ?0                  	;0
505  387   ECHO/40                   ?0        338:'_uptime">0d 0h</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-box no-margin-bottom light-grey">
                        <div class="row">
                            <div class="col-md-4 col-4" align="center">
                                <h4 class="header-title">CPU %</h4>
                                <input class="knob" id="s_' ?0                  	;0
506  388   FETCH_DIM_R/81            $203=     16?21                339:'id'            	;0
507  388   ECHO/40                   ?0        $203                 ?0                  	;0
508  389   ECHO/40                   ?0        340:'_cpu" data-plugin="knob" data-width="64" data-height="64" data-fgColor="' ?0                  	;0
509  390   FETCH_DIM_R/81            $204=     16?24                16?13               	;0
510  390   FETCH_DIM_R/81            $205=     $204                 341:1               	;0
511  390   ECHO/40                   ?0        $205                 ?0                  	;0
512  391   NOP/0                     ?0        ?0                   ?0                  	;1
513  391   GOTO/253                  ?0        ?396                 ?342                	;0
514  393   ECHO/40                   ?0        343:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
515  394   FETCH_DIM_R/81            $206=     16?21                344:'id'            	;0
516  394   ECHO/40                   ?0        $206                 ?0                  	;0
517  395   ECHO/40                   ?0        345:'_output">0 Mbps</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
518  396   FETCH_DIM_R/81            $207=     16?22                346:'uptime'        	;0
519  396   ECHO/40                   ?0        $207                 ?0                  	;0
520  397   ECHO/40                   ?0        347:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
521  398   NOP/0                     ?0        ?0                   ?0                  	;1
522  398   GOTO/253                  ?0        ?503                 ?348                	;0
523  400   FETCH_DIM_R/81            $208=     16?21                349:'server_name'   	;0
524  400   ECHO/40                   ?0        $208                 ?0                  	;0
525  401   ECHO/40                   ?0        350:'<br/><small>'   ?0                  	;0
526  402   ECHO/40                   ?0        16?23                ?0                  	;0
527  403   ECHO/40                   ?0        351:'</small></h5>
                    </div>
                    <div class="card-header py-3 text-white' ?0                  	;0
528  404   FETCH_DIM_R/81            $209=     16?3                 352:'theme'         	;0
529  404   IS_EQUAL/17               #210=     $209                 353:0               	;0
530  404   BOOL_NOT/13               #211=     #210                 ?0                  	;0
531  404   JMPZ/43                   ?0        #211                 ?534                	;0	>>534
532  405   NOP/0                     ?0        ?0                   ?0                  	;1
533  405   GOTO/253                  ?0        ?379                 ?354                	;0
534  407   NOP/0                     ?0        ?0                   ?0                  	;1	<<531
535  407   GOTO/253                  ?0        ?378                 ?355                	;0
536  409   ECHO/40                   ?0        356:'            <div class="col-xl-3 col-md-6">
                <a href="./server_view?id=' ?0                  	;0
537  410   FETCH_DIM_R/81            $212=     16?21                357:'id'            	;0
538  410   ECHO/40                   ?0        $212                 ?0                  	;0
539  411   ECHO/40                   ?0        358:'">
                    <div class="card-header bg-' ?0                  	;0
540  412   FETCH_DIM_R/81            $213=     16?24                16?13               	;0
541  412   FETCH_DIM_R/81            $214=     $213                 359:0               	;0
542  412   ECHO/40                   ?0        $214                 ?0                  	;0
543  413   ECHO/40                   ?0        360:' py-3 text-white text-center">
                        <h5 class="card-title mb-0 text-white">' ?0                  	;0
544  414   NOP/0                     ?0        ?0                   ?0                  	;1
545  414   GOTO/253                  ?0        ?523                 ?361                	;0
546  416   FETCH_DIM_R/81            $215=     16?22                362:'connections'   	;0
547  416   ECHO/40                   ?0        $215                 ?0                  	;0
548  417   ECHO/40                   ?0        363:'</h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <a href="live_connections?server=' ?0                  	;0
549  418   FETCH_DIM_R/81            $216=     16?21                364:'id'            	;0
550  418   ECHO/40                   ?0        $216                 ?0                  	;0
551  419   ECHO/40                   ?0        365:'"><button id="s_' ?0                  	;0
552  420   FETCH_DIM_R/81            $217=     16?21                366:'id'            	;0
553  420   ECHO/40                   ?0        $217                 ?0                  	;0
554  421   NOP/0                     ?0        ?0                   ?0                  	;1
555  421   GOTO/253                  ?0        ?335                 ?367                	;0
556  423   FETCH_DIM_R/81            $218=     16?21                368:'id'            	;0
557  423   ECHO/40                   ?0        $218                 ?0                  	;0
558  424   ECHO/40                   ?0        369:'_fs" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span data-plugin="peity-line" data-fill="' ?0                  	;0
559  425   FETCH_DIM_R/81            $219=     16?24                16?13               	;0
560  425   FETCH_DIM_R/81            $220=     $219                 370:2               	;0
561  425   ECHO/40                   ?0        $220                 ?0                  	;0
562  426   ECHO/40                   ?0        371:'" data-stroke="' ?0                  	;0
563  427   FETCH_DIM_R/81            $221=     16?24                16?13               	;0
564  427   FETCH_DIM_R/81            $222=     $221                 372:2               	;0
565  427   ECHO/40                   ?0        $222                 ?0                  	;0
566  428   NOP/0                     ?0        ?0                   ?0                  	;1
567  428   GOTO/253                  ?0        ?587                 ?373                	;0
568  430   FETCH_DIM_R/81            $223=     16?21                374:'id'            	;0
569  430   ECHO/40                   ?0        $223                 ?0                  	;0
570  431   ECHO/40                   ?0        375:'_conns">0</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
571  432   FETCH_DIM_R/81            $224=     16?22                376:'users'         	;0
572  432   ECHO/40                   ?0        $224                 ?0                  	;0
573  433   ECHO/40                   ?0        377:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
574  434   FETCH_DIM_R/81            $225=     16?21                378:'id'            	;0
575  434   ECHO/40                   ?0        $225                 ?0                  	;0
576  435   NOP/0                     ?0        ?0                   ?0                  	;1
577  435   GOTO/253                  ?0        ?354                 ?379                	;0
578  437   ECHO/40                   ?0        380:'_input" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button>
                        </div>
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">' ?0                  	;0
579  438   FETCH_DIM_R/81            $226=     16?22                381:'output'        	;0
580  438   ECHO/40                   ?0        $226                 ?0                  	;0
581  439   ECHO/40                   ?0        382:'<small>&nbsp;(Mbps)</small></h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <button id="s_' ?0                  	;0
582  440   FETCH_DIM_R/81            $227=     16?21                383:'id'            	;0
583  440   ECHO/40                   ?0        $227                 ?0                  	;0
584  441   ECHO/40                   ?0        384:'_output" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="progress-w-left">
                                <h4 class="progress-value header-title">DISK</h4>
                                <div class="progress progress-xl">
                                    <div class="progress-bar" id="s_' ?0                  	;0
585  442   NOP/0                     ?0        ?0                   ?0                  	;1
586  442   GOTO/253                  ?0        ?556                 ?385                	;0
587  444   ECHO/40                   ?0        386:'" data-width="100%" data-height="50" data-min="0" data-max="100">' ?0                  	;0
588  445   INIT_FCALL_BY_NAME/59     ?0        ?0                   387:'implode'       	;2
589  445   SEND_VAL_EX/116           ?80       389:','              ?1                  	;0
590  445   FETCH_DIM_R/81            $228=     16?21                390:'id'            	;0
591  445   FETCH_DIM_R/81            $229=     16?25                $228                	;0
592  445   JMP_SET/152               #230=     $229                 ?594                	;0
593  445   QM_ASSIGN/22              #230=     391:array (
)        ?0                  	;0
594  445   SEND_VAL_EX/116           ?96       #230                 ?2                  	;0
595  445   DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
596  445   ECHO/40                   ?0        $231                 ?0                  	;0
597  446   ECHO/40                   ?0        392:'</span>
                </div>
            </div>
            ' ?0                  	;0
598  449   NOP/0                     ?0        ?0                   ?0                  	;1
599  449   GOTO/253                  ?0        ?600                 ?393                	;0
600  452   NOP/0                     ?0        ?0                   ?0                  	;1
601  452   GOTO/253                  ?0        ?649                 ?394                	;0
602  454   FETCH_DIM_R/81            $232=     16?22                395:'input'         	;0
603  454   ECHO/40                   ?0        $232                 ?0                  	;0
604  455   ECHO/40                   ?0        396:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
605  456   FETCH_DIM_R/81            $233=     16?21                397:'id'            	;0
606  456   ECHO/40                   ?0        $233                 ?0                  	;0
607  457   ECHO/40                   ?0        398:'_input">0 Mbps</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
608  458   FETCH_DIM_R/81            $234=     16?22                399:'output'        	;0
609  458   ECHO/40                   ?0        $234                 ?0                  	;0
610  459   NOP/0                     ?0        ?0                   ?0                  	;1
611  459   GOTO/253                  ?0        ?514                 ?400                	;0
612  461   ASSIGN/38                 ?197      16?23                401:'Proxy Server'  	;0
613  463   NOP/0                     ?0        ?0                   ?0                  	;1
614  463   GOTO/253                  ?0        ?640                 ?402                	;0
615  465   FETCH_DIM_R/81            $236=     16?21                403:'is_main'       	;0
616  465   JMPZ/43                   ?0        $236                 ?619                	;0	>>619
617  466   NOP/0                     ?0        ?0                   ?0                  	;1
618  466   GOTO/253                  ?0        ?375                 ?404                	;0
619  468   NOP/0                     ?0        ?0                   ?0                  	;1	<<616
620  468   GOTO/253                  ?0        ?363                 ?405                	;0
621  470   FETCH_DIM_R/81            $237=     16?21                406:'id'            	;0
622  470   ECHO/40                   ?0        $237                 ?0                  	;0
623  471   ECHO/40                   ?0        407:'_offline" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="progress-w-left">
                                <h4 class="progress-value header-title">MEM</h4>
                                <div class="progress progress-xl">
                                    <div class="progress-bar" id="s_' ?0                  	;0
624  472   FETCH_DIM_R/81            $238=     16?21                408:'id'            	;0
625  472   ECHO/40                   ?0        $238                 ?0                  	;0
626  473   ECHO/40                   ?0        409:'_mem" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-2">
                            <h4 class="header-title">Requests<small>&nbsp;/sec</small></small></h4>
                        </div>
                        <div class="col-md-2 col-2 text-center">
                            <button id="s_' ?0                  	;0
627  474   FETCH_DIM_R/81            $239=     16?21                410:'id'            	;0
628  474   ECHO/40                   ?0        $239                 ?0                  	;0
629  475   NOP/0                     ?0        ?0                   ?0                  	;1
630  475   GOTO/253                  ?0        ?318                 ?411                	;0
631  477   FETCH_DIM_R/81            $240=     16?21                412:'enable_proxy'  	;0
632  477   JMPZ_EX/46                #241=     $240                 ?635                	;0	>>635
633  477   FETCH_DIM_R/81            $242=     16?21                413:'enabled'       	;0
634  477   BOOL/52                   #241=     $242                 ?0                  	;0
635  477   BOOL_NOT/13               #243=     #241                 ?0                  	;0	<<632
636  477   JMPZ/43                   ?0        #243                 ?639                	;0	>>639
637  478   NOP/0                     ?0        ?0                   ?0                  	;1
638  478   GOTO/253                  ?0        ?640                 ?414                	;0
639  480   ASSIGN_CONCAT/30          ?206      16?23                415:' (proxied)'    	;0	<<636
640  483   FETCH_DIM_R/81            $245=     16?26                416:'dashboard_display_alt'	;0
641  483   JMPZ_EX/46                #246=     $245                 ?644                	;0	>>644
642  483   BOOL_NOT/13               #247=     16?12                ?0                  	;0
643  483   BOOL/52                   #246=     #247                 ?0                  	;0
644  483   JMPZ/43                   ?0        #246                 ?647                	;0	>>647	<<641
645  484   NOP/0                     ?0        ?0                   ?0                  	;1
646  484   GOTO/253                  ?0        ?329                 ?417                	;0
647  486   NOP/0                     ?0        ?0                   ?0                  	;1	<<644
648  486   GOTO/253                  ?0        ?536                 ?418                	;0
649  487   JMP/42                    ?0        ?315                 ?0                  	;0	>>315
650  487   FE_FREE/127               ?0        $146                 ?0                  	;0	<<314
651  490   ASSIGN/38                 ?210      16?13                419:0               	;0
652  491   FE_RESET_R/77             $249=     16?20                ?1044               	;0
653  491   FE_FETCH_R/78             ?0        $249                 16?21               	;1044	>>1044	<<1043
654  492   NOP/0                     ?0        ?0                   ?0                  	;1
655  492   GOTO/253                  ?0        ?977                 ?420                	;0
656  494   FETCH_DIM_R/81            $250=     16?3                 421:'theme'         	;0
657  494   IS_EQUAL/17               #251=     $250                 422:1               	;0
658  494   JMPZ/43                   ?0        #251                 ?661                	;0	>>661
659  494   QM_ASSIGN/22              #252=     423:'#434b56'        ?0                  	;0
660  494   JMP/42                    ?0        ?662                 ?0                  	;0	>>662
661  494   QM_ASSIGN/22              #252=     424:'#7e8e9d'        ?0                  	;0	<<658
662  494   ECHO/40                   ?0        #252                 ?0                  	;0	<<660
663  495   ECHO/40                   ?0        425:'" data-width="100%" data-height="50" data-min="0" data-max="100">' ?0                  	;0
664  496   INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'implode'       	;2
665  496   SEND_VAL_EX/116           ?80       428:','              ?1                  	;0
666  496   FETCH_DIM_R/81            $253=     16?21                429:'id'            	;0
667  496   FETCH_DIM_R/81            $254=     16?25                $253                	;0
668  496   JMP_SET/152               #255=     $254                 ?670                	;0
669  496   QM_ASSIGN/22              #255=     430:array (
)        ?0                  	;0
670  496   SEND_VAL_EX/116           ?96       #255                 ?2                  	;0
671  496   DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
672  496   ECHO/40                   ?0        $256                 ?0                  	;0
673  497   ECHO/40                   ?0        431:'</span>
                </div>
            </div>
            ' ?0                  	;0
674  499   NOP/0                     ?0        ?0                   ?0                  	;1
675  499   GOTO/253                  ?0        ?896                 ?432                	;0
676  502   ECHO/40                   ?0        433:'"></i>
                                <h4 class="header-title ' ?0                  	;0
677  503   FETCH_DIM_R/81            $257=     16?3                 434:'theme'         	;0
678  503   IS_EQUAL/17               #258=     $257                 435:1               	;0
679  503   JMPZ/43                   ?0        #258                 ?682                	;0	>>682
680  504   NOP/0                     ?0        ?0                   ?0                  	;1
681  504   GOTO/253                  ?0        ?813                 ?436                	;0
682  506   ECHO/40                   ?0        437:'text-info'      ?0                  	;0	<<679
683  507   NOP/0                     ?0        ?0                   ?0                  	;1
684  507   GOTO/253                  ?0        ?814                 ?438                	;0
685  508   NOP/0                     ?0        ?0                   ?0                  	;1
686  508   GOTO/253                  ?0        ?813                 ?439                	;0
687  510   FETCH_DIM_R/81            $259=     16?21                440:'enabled'       	;0
688  510   JMPZ/43                   ?0        $259                 ?691                	;0	>>691
689  511   NOP/0                     ?0        ?0                   ?0                  	;1
690  511   GOTO/253                  ?0        ?694                 ?441                	;0
691  513   ASSIGN/38                 ?222      16?23                442:'Server Disabled'	;0	<<688
692  514   NOP/0                     ?0        ?0                   ?0                  	;1
693  514   GOTO/253                  ?0        ?972                 ?443                	;0
694  516   ASSIGN/38                 ?223      16?23                444:'Load Balancer' 	;0
695  517   NOP/0                     ?0        ?0                   ?0                  	;1
696  517   GOTO/253                  ?0        ?972                 ?445                	;0
697  519   ECHO/40                   ?0        446:'                        </div>
                    </div>
                    <div class="card-footer">
                        <span data-plugin="peity-line" data-fill="' ?0                  	;0
698  520   FETCH_DIM_R/81            $262=     16?3                 447:'theme'         	;0
699  520   IS_EQUAL/17               #263=     $262                 448:1               	;0
700  520   JMPZ/43                   ?0        #263                 ?703                	;0	>>703
701  520   QM_ASSIGN/22              #264=     449:'#434b56'        ?0                  	;0
702  520   JMP/42                    ?0        ?704                 ?0                  	;0	>>704
703  520   QM_ASSIGN/22              #264=     450:'#7e8e9d'        ?0                  	;0	<<700
704  520   ECHO/40                   ?0        #264                 ?0                  	;0	<<702
705  521   ECHO/40                   ?0        451:'" data-stroke="' ?0                  	;0
706  522   FETCH_DIM_R/81            $265=     16?3                 452:'theme'         	;0
707  522   IS_EQUAL/17               #266=     $265                 453:1               	;0
708  522   JMPZ/43                   ?0        #266                 ?711                	;0	>>711
709  522   QM_ASSIGN/22              #267=     454:'#434b56'        ?0                  	;0
710  522   JMP/42                    ?0        ?712                 ?0                  	;0	>>712
711  522   QM_ASSIGN/22              #267=     455:'#7e8e9d'        ?0                  	;0	<<708
712  522   ECHO/40                   ?0        #267                 ?0                  	;0	<<710
713  523   ECHO/40                   ?0        456:'" data-width="100%" data-height="50" data-min="0" data-max="100">' ?0                  	;0
714  524   NOP/0                     ?0        ?0                   ?0                  	;1
715  524   GOTO/253                  ?0        ?782                 ?457                	;0
716  526   ECHO/40                   ?0        458:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
717  527   FETCH_DIM_R/81            $268=     16?21                459:'id'            	;0
718  527   ECHO/40                   ?0        $268                 ?0                  	;0
719  528   ECHO/40                   ?0        460:'_output">0 Mbps</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
720  529   FETCH_DIM_R/81            $269=     16?22                461:'uptime'        	;0
721  529   ECHO/40                   ?0        $269                 ?0                  	;0
722  530   ECHO/40                   ?0        462:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
723  531   NOP/0                     ?0        ?0                   ?0                  	;1
724  531   GOTO/253                  ?0        ?898                 ?463                	;0
725  533   ECHO/40                   ?0        464:'text-warning'   ?0                  	;0
726  534   NOP/0                     ?0        ?0                   ?0                  	;1
727  534   GOTO/253                  ?0        ?729                 ?465                	;0
728  536   ECHO/40                   ?0        466:'text-white'     ?0                  	;0
729  538   NOP/0                     ?0        ?0                   ?0                  	;1
730  538   GOTO/253                  ?0        ?879                 ?467                	;0
731  540   FETCH_DIM_R/81            $270=     16?21                468:'enable_proxy'  	;0
732  540   JMPZ_EX/46                #271=     $270                 ?735                	;0	>>735
733  540   FETCH_DIM_R/81            $272=     16?21                469:'enabled'       	;0
734  540   BOOL/52                   #271=     $272                 ?0                  	;0
735  540   BOOL_NOT/13               #273=     #271                 ?0                  	;0	<<732
736  540   JMPZ/43                   ?0        #273                 ?739                	;0	>>739
737  541   NOP/0                     ?0        ?0                   ?0                  	;1
738  541   GOTO/253                  ?0        ?740                 ?470                	;0
739  543   ASSIGN_CONCAT/30          ?236      16?23                471:' (proxied)'    	;0	<<736
740  546   FETCH_DIM_R/81            $275=     16?26                472:'dashboard_display_alt'	;0
741  546   JMPZ_EX/46                #276=     $275                 ?744                	;0	>>744
742  546   BOOL_NOT/13               #277=     16?12                ?0                  	;0
743  546   BOOL/52                   #276=     #277                 ?0                  	;0
744  546   JMPZ/43                   ?0        #276                 ?747                	;0	>>747	<<741
745  547   NOP/0                     ?0        ?0                   ?0                  	;1
746  547   GOTO/253                  ?0        ?801                 ?473                	;0
747  549   NOP/0                     ?0        ?0                   ?0                  	;1	<<744
748  549   GOTO/253                  ?0        ?770                 ?474                	;0
749  551   FETCH_DIM_R/81            $278=     16?22                475:'input'         	;0
750  551   ECHO/40                   ?0        $278                 ?0                  	;0
751  552   ECHO/40                   ?0        476:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
752  553   FETCH_DIM_R/81            $279=     16?21                477:'id'            	;0
753  553   ECHO/40                   ?0        $279                 ?0                  	;0
754  554   ECHO/40                   ?0        478:'_input">0 Mbps</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
755  555   FETCH_DIM_R/81            $280=     16?22                479:'output'        	;0
756  555   ECHO/40                   ?0        $280                 ?0                  	;0
757  556   NOP/0                     ?0        ?0                   ?0                  	;1
758  556   GOTO/253                  ?0        ?716                 ?480                	;0
759  559   ECHO/40                   ?0        481:'                            <div class="col-12 text-center" style="padding-top: 15px;">
                                <i class="fe-alert-triangle avatar-title font-22 ' ?0                  	;0
760  560   FETCH_DIM_R/81            $281=     16?3                 482:'theme'         	;0
761  560   IS_EQUAL/17               #282=     $281                 483:1               	;0
762  560   JMPZ/43                   ?0        #282                 ?765                	;0	>>765
763  561   NOP/0                     ?0        ?0                   ?0                  	;1
764  561   GOTO/253                  ?0        ?945                 ?484                	;0
765  563   ECHO/40                   ?0        485:'text-warning'   ?0                  	;0	<<762
766  564   NOP/0                     ?0        ?0                   ?0                  	;1
767  564   GOTO/253                  ?0        ?946                 ?486                	;0
768  565   NOP/0                     ?0        ?0                   ?0                  	;1
769  565   GOTO/253                  ?0        ?945                 ?487                	;0
770  567   ECHO/40                   ?0        488:'            <div class="col-xl-3 col-md-6">
                <a href="./server_view?id=' ?0                  	;0
771  568   FETCH_DIM_R/81            $283=     16?21                489:'id'            	;0
772  568   ECHO/40                   ?0        $283                 ?0                  	;0
773  569   ECHO/40                   ?0        490:'">
                    <div class="card-header ' ?0                  	;0
774  570   FETCH_DIM_R/81            $284=     16?3                 491:'theme'         	;0
775  570   IS_EQUAL/17               #285=     $284                 492:1               	;0
776  570   JMPZ/43                   ?0        #285                 ?779                	;0	>>779
777  571   NOP/0                     ?0        ?0                   ?0                  	;1
778  571   GOTO/253                  ?0        ?922                 ?493                	;0
779  573   ECHO/40                   ?0        494:'bg-dark'        ?0                  	;0	<<776
780  574   NOP/0                     ?0        ?0                   ?0                  	;1
781  574   GOTO/253                  ?0        ?920                 ?495                	;0
782  576   INIT_FCALL_BY_NAME/59     ?0        ?0                   496:'is_array'      	;1
783  576   FETCH_DIM_R/81            $286=     16?21                498:'id'            	;0
784  576   FETCH_DIM_FUNC_ARG/93     $287=     16?25                $286                	;1
785  576   SEND_VAR_EX/66            ?80       $287                 ?1                  	;0
786  576   DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
787  576   JMPZ/43                   ?0        $288                 ?796                	;0	>>796
788  576   INIT_FCALL_BY_NAME/59     ?0        ?0                   499:'implode'       	;2
789  576   SEND_VAL_EX/116           ?80       501:','              ?1                  	;0
790  576   FETCH_DIM_R/81            $289=     16?21                502:'id'            	;0
791  576   FETCH_DIM_FUNC_ARG/93     $290=     16?25                $289                	;2
792  576   SEND_VAR_EX/66            ?96       $290                 ?2                  	;0
793  576   DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
794  576   QM_ASSIGN/22              #292=     $291                 ?0                  	;0
795  576   JMP/42                    ?0        ?797                 ?0                  	;0	>>797
796  576   QM_ASSIGN/22              #292=     503:''               ?0                  	;0	<<787
797  576   ECHO/40                   ?0        #292                 ?0                  	;0	<<795
798  577   ECHO/40                   ?0        504:'</span>
                    </div>
                </a>
            </div>
            ' ?0                  	;0
799  578   NOP/0                     ?0        ?0                   ?0                  	;1
800  578   GOTO/253                  ?0        ?674                 ?505                	;0
801  580   ECHO/40                   ?0        506:'            <div class="col-xl-6 col-md-12">
                <a href="./server_view?id=' ?0                  	;0
802  581   NOP/0                     ?0        ?0                   ?0                  	;1
803  581   GOTO/253                  ?0        ?1019                ?507                	;0
804  583   ASSIGN/38                 ?255      16?23                508:'Proxy Server'  	;0
805  585   NOP/0                     ?0        ?0                   ?0                  	;1
806  585   GOTO/253                  ?0        ?740                 ?509                	;0
807  587   FETCH_DIM_R/81            $294=     16?21                510:'is_main'       	;0
808  587   JMPZ/43                   ?0        $294                 ?811                	;0	>>811
809  588   NOP/0                     ?0        ?0                   ?0                  	;1
810  588   GOTO/253                  ?0        ?974                 ?511                	;0
811  590   NOP/0                     ?0        ?0                   ?0                  	;1	<<808
812  590   GOTO/253                  ?0        ?687                 ?512                	;0
813  593   ECHO/40                   ?0        513:'text-white'     ?0                  	;0
814  595   ECHO/40                   ?0        514:'">Installing...</h4>
                            </div>
                            ' ?0                  	;0
815  597   NOP/0                     ?0        ?0                   ?0                  	;1
816  597   GOTO/253                  ?0        ?697                 ?515                	;0
817  599   FETCH_DIM_R/81            $295=     16?21                516:'server_name'   	;0
818  599   ECHO/40                   ?0        $295                 ?0                  	;0
819  600   ECHO/40                   ?0        517:'<br/><small>'   ?0                  	;0
820  601   ECHO/40                   ?0        16?23                ?0                  	;0
821  602   ECHO/40                   ?0        518:'</small></h5>
                    </div>
                    <div class="card-header py-3 text-white' ?0                  	;0
822  603   FETCH_DIM_R/81            $296=     16?3                 519:'theme'         	;0
823  603   IS_EQUAL/17               #297=     $296                 520:0               	;0
824  603   BOOL_NOT/13               #298=     #297                 ?0                  	;0
825  603   JMPZ/43                   ?0        #298                 ?828                	;0	>>828
826  604   NOP/0                     ?0        ?0                   ?0                  	;1
827  604   GOTO/253                  ?0        ?867                 ?521                	;0
828  606   NOP/0                     ?0        ?0                   ?0                  	;1	<<825
829  606   GOTO/253                  ?0        ?866                 ?522                	;0
830  608   FETCH_DIM_R/81            $299=     16?21                523:'server_type'   	;0
831  608   IS_EQUAL/17               #300=     $299                 524:0               	;0
832  608   JMPZ/43                   ?0        #300                 ?835                	;0	>>835
833  609   NOP/0                     ?0        ?0                   ?0                  	;1
834  609   GOTO/253                  ?0        ?807                 ?525                	;0
835  611   FETCH_DIM_R/81            $301=     16?21                526:'enabled'       	;0	<<832
836  611   JMPZ/43                   ?0        $301                 ?839                	;0	>>839
837  612   NOP/0                     ?0        ?0                   ?0                  	;1
838  612   GOTO/253                  ?0        ?842                 ?527                	;0
839  614   ASSIGN/38                 ?264      16?23                528:'Proxy Disabled'	;0	<<836
840  615   NOP/0                     ?0        ?0                   ?0                  	;1
841  615   GOTO/253                  ?0        ?805                 ?529                	;0
842  617   NOP/0                     ?0        ?0                   ?0                  	;1
843  617   GOTO/253                  ?0        ?804                 ?530                	;0
844  620   ECHO/40                   ?0        531:'">
                    <div class="col-12 text-center" style="padding-top: 70px;">
                        <a href="./server_view?id=' ?0                  	;0
845  621   FETCH_DIM_R/81            $303=     16?21                532:'id'            	;0
846  621   ECHO/40                   ?0        $303                 ?0                  	;0
847  622   ECHO/40                   ?0        533:'">
                            <i class="fe-alert-triangle avatar-title font-22 ' ?0                  	;0
848  623   FETCH_DIM_R/81            $304=     16?3                 534:'theme'         	;0
849  623   IS_EQUAL/17               #305=     $304                 535:1               	;0
850  623   JMPZ/43                   ?0        #305                 ?853                	;0	>>853
851  624   NOP/0                     ?0        ?0                   ?0                  	;1
852  624   GOTO/253                  ?0        ?876                 ?536                	;0
853  626   NOP/0                     ?0        ?0                   ?0                  	;1	<<850
854  626   GOTO/253                  ?0        ?873                 ?537                	;0
855  628   ECHO/40                   ?0        538:'"></i>
                            <h4 class="header-title ' ?0                  	;0
856  629   FETCH_DIM_R/81            $306=     16?3                 539:'theme'         	;0
857  629   IS_EQUAL/17               #307=     $306                 540:1               	;0
858  629   JMPZ/43                   ?0        #307                 ?861                	;0	>>861
859  630   NOP/0                     ?0        ?0                   ?0                  	;1
860  630   GOTO/253                  ?0        ?864                 ?541                	;0
861  632   ECHO/40                   ?0        542:'text-danger'    ?0                  	;0	<<858
862  633   NOP/0                     ?0        ?0                   ?0                  	;1
863  633   GOTO/253                  ?0        ?997                 ?543                	;0
864  635   NOP/0                     ?0        ?0                   ?0                  	;1
865  635   GOTO/253                  ?0        ?996                 ?544                	;0
866  637   ECHO/40                   ?0        545:' bg-white'      ?0                  	;0
867  639   ECHO/40                   ?0        546:'">
                        <div class="row" style="margin-bottom:-20px;">
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
868  640   FETCH_DIM_R/81            $308=     16?22                547:'conns'         	;0
869  640   ECHO/40                   ?0        $308                 ?0                  	;0
870  641   ECHO/40                   ?0        548:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
871  642   NOP/0                     ?0        ?0                   ?0                  	;1
872  642   GOTO/253                  ?0        ?935                 ?549                	;0
873  644   ECHO/40                   ?0        550:'text-danger'    ?0                  	;0
874  645   NOP/0                     ?0        ?0                   ?0                  	;1
875  645   GOTO/253                  ?0        ?877                 ?551                	;0
876  647   ECHO/40                   ?0        552:'text-white'     ?0                  	;0
877  649   NOP/0                     ?0        ?0                   ?0                  	;1
878  649   GOTO/253                  ?0        ?855                 ?553                	;0
879  651   ECHO/40                   ?0        554:'">Install Failed!</h4>
                            </div>
                            ' ?0                  	;0
880  653   NOP/0                     ?0        ?0                   ?0                  	;1
881  653   GOTO/253                  ?0        ?815                 ?555                	;0
882  655   ECHO/40                   ?0        556:'                            <div class="col-12 text-center" style="padding-top: 15px;">
                                <i class="mdi mdi-creation avatar-title font-22 ' ?0                  	;0
883  656   NOP/0                     ?0        ?0                   ?0                  	;1
884  656   GOTO/253                  ?0        ?1008                ?557                	;0
885  659   ECHO/40                   ?0        558:'"></i>
                                <h4 class="header-title ' ?0                  	;0
886  660   FETCH_DIM_R/81            $309=     16?3                 559:'theme'         	;0
887  660   IS_EQUAL/17               #310=     $309                 560:1               	;0
888  660   JMPZ/43                   ?0        #310                 ?891                	;0	>>891
889  661   NOP/0                     ?0        ?0                   ?0                  	;1
890  661   GOTO/253                  ?0        ?966                 ?561                	;0
891  663   ECHO/40                   ?0        562:'text-danger'    ?0                  	;0	<<888
892  664   NOP/0                     ?0        ?0                   ?0                  	;1
893  664   GOTO/253                  ?0        ?967                 ?563                	;0
894  665   NOP/0                     ?0        ?0                   ?0                  	;1
895  665   GOTO/253                  ?0        ?966                 ?564                	;0
896  669   NOP/0                     ?0        ?0                   ?0                  	;1
897  669   GOTO/253                  ?0        ?1043                ?565                	;0
898  671   FETCH_DIM_R/81            $311=     16?21                566:'id'            	;0
899  671   ECHO/40                   ?0        $311                 ?0                  	;0
900  672   ECHO/40                   ?0        567:'_uptime">0d 0h</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-box no-margin-bottom light-grey">
                        <div class="row">
                            ' ?0                  	;0
901  673   FETCH_DIM_R/81            $312=     16?21                568:'status'        	;0
902  673   IS_EQUAL/17               #313=     $312                 569:3               	;0
903  673   JMPZ/43                   ?0        #313                 ?906                	;0	>>906
904  674   NOP/0                     ?0        ?0                   ?0                  	;1
905  674   GOTO/253                  ?0        ?882                 ?570                	;0
906  676   FETCH_DIM_R/81            $314=     16?21                571:'status'        	;0	<<903
907  676   IS_EQUAL/17               #315=     $314                 572:4               	;0
908  676   JMPZ/43                   ?0        #315                 ?911                	;0	>>911
909  677   NOP/0                     ?0        ?0                   ?0                  	;1
910  677   GOTO/253                  ?0        ?759                 ?573                	;0
911  679   ECHO/40                   ?0        574:'                            <div class="col-12 text-center" style="padding-top: 15px;">
                                <i class="fe-alert-triangle avatar-title font-22 ' ?0                  	;0	<<908
912  680   NOP/0                     ?0        ?0                   ?0                  	;1
913  680   GOTO/253                  ?0        ?1032                ?575                	;0
914  683   ECHO/40                   ?0        576:'bg-light'       ?0                  	;0
915  685   ECHO/40                   ?0        577:' py-3 text-white">
                        <div class="float-right">
                            <i class="mdi mdi-chart-line"></i>
                        </div>
                        <h5 class="card-title mb-0 text-white">' ?0                  	;0
916  686   FETCH_DIM_R/81            $316=     16?21                578:'server_name'   	;0
917  686   ECHO/40                   ?0        $316                 ?0                  	;0
918  687   NOP/0                     ?0        ?0                   ?0                  	;1
919  687   GOTO/253                  ?0        ?954                 ?579                	;0
920  689   NOP/0                     ?0        ?0                   ?0                  	;1
921  689   GOTO/253                  ?0        ?923                 ?580                	;0
922  691   ECHO/40                   ?0        581:'bg-light'       ?0                  	;0
923  693   ECHO/40                   ?0        582:' py-3 text-white text-center">
                        <h5 class="card-title mb-0 text-white">' ?0                  	;0
924  694   NOP/0                     ?0        ?0                   ?0                  	;1
925  694   GOTO/253                  ?0        ?817                 ?583                	;0
926  696   ECHO/40                   ?0        584:'_users">0</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
927  697   FETCH_DIM_R/81            $317=     16?22                585:'online'        	;0
928  697   ECHO/40                   ?0        $317                 ?0                  	;0
929  698   ECHO/40                   ?0        586:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
930  699   FETCH_DIM_R/81            $318=     16?21                587:'id'            	;0
931  699   ECHO/40                   ?0        $318                 ?0                  	;0
932  700   ECHO/40                   ?0        588:'_online">0</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
933  701   NOP/0                     ?0        ?0                   ?0                  	;1
934  701   GOTO/253                  ?0        ?749                 ?589                	;0
935  703   FETCH_DIM_R/81            $319=     16?21                590:'id'            	;0
936  703   ECHO/40                   ?0        $319                 ?0                  	;0
937  704   ECHO/40                   ?0        591:'_conns">0</p>
                            </div>
                            <div class="col-md-4 col-6" align="center">
                                <h4 class="header-title">' ?0                  	;0
938  705   FETCH_DIM_R/81            $320=     16?22                592:'users'         	;0
939  705   ECHO/40                   ?0        $320                 ?0                  	;0
940  706   ECHO/40                   ?0        593:'</h4>
                                <p class="sub-header" id="s_' ?0                  	;0
941  707   FETCH_DIM_R/81            $321=     16?21                594:'id'            	;0
942  707   ECHO/40                   ?0        $321                 ?0                  	;0
943  708   NOP/0                     ?0        ?0                   ?0                  	;1
944  708   GOTO/253                  ?0        ?926                 ?595                	;0
945  711   ECHO/40                   ?0        596:'text-white'     ?0                  	;0
946  713   ECHO/40                   ?0        597:'"></i>
                                <h4 class="header-title ' ?0                  	;0
947  714   FETCH_DIM_R/81            $322=     16?3                 598:'theme'         	;0
948  714   IS_EQUAL/17               #323=     $322                 599:1               	;0
949  714   JMPZ/43                   ?0        #323                 ?952                	;0	>>952
950  715   NOP/0                     ?0        ?0                   ?0                  	;1
951  715   GOTO/253                  ?0        ?728                 ?600                	;0
952  717   NOP/0                     ?0        ?0                   ?0                  	;1	<<949
953  717   GOTO/253                  ?0        ?725                 ?601                	;0
954  719   ECHO/40                   ?0        602:'<br/><small>'   ?0                  	;0
955  720   ECHO/40                   ?0        16?23                ?0                  	;0
956  721   ECHO/40                   ?0        603:'</small></h5>
                    </div>
                </a>
                <div class="card-header no-margin-bottom py-3 text-white' ?0                  	;0
957  722   FETCH_DIM_R/81            $324=     16?3                 604:'theme'         	;0
958  722   IS_EQUAL/17               #325=     $324                 605:0               	;0
959  722   BOOL_NOT/13               #326=     #325                 ?0                  	;0
960  722   JMPZ/43                   ?0        #326                 ?963                	;0	>>963
961  723   NOP/0                     ?0        ?0                   ?0                  	;1
962  723   GOTO/253                  ?0        ?844                 ?606                	;0
963  725   ECHO/40                   ?0        607:' bg-white'      ?0                  	;0	<<960
964  726   NOP/0                     ?0        ?0                   ?0                  	;1
965  726   GOTO/253                  ?0        ?844                 ?608                	;0
966  729   ECHO/40                   ?0        609:'text-white'     ?0                  	;0
967  731   ECHO/40                   ?0        610:'">Server Offline</h4>
                            </div>
                            ' ?0                  	;0
968  732   NOP/0                     ?0        ?0                   ?0                  	;1
969  732   GOTO/253                  ?0        ?880                 ?611                	;0
970  733   NOP/0                     ?0        ?0                   ?0                  	;1
971  733   GOTO/253                  ?0        ?759                 ?612                	;0
972  736   NOP/0                     ?0        ?0                   ?0                  	;1
973  736   GOTO/253                  ?0        ?975                 ?613                	;0
974  738   ASSIGN/38                 ?289      16?23                614:'Main Server'   	;0
975  740   NOP/0                     ?0        ?0                   ?0                  	;1
976  740   GOTO/253                  ?0        ?731                 ?615                	;0
977  742   FETCH_DIM_R/81            $328=     16?21                616:'enabled'       	;0
978  742   JMPZ_EX/46                #329=     $328                 ?982                	;0	>>982
979  742   FETCH_DIM_R/81            $330=     16?21                617:'server_online' 	;0
980  742   BOOL_NOT/13               #331=     $330                 ?0                  	;0
981  742   BOOL/52                   #329=     #331                 ?0                  	;0
982  742   BOOL_NOT/13               #332=     #329                 ?0                  	;0	<<978
983  742   JMPZ/43                   ?0        #332                 ?986                	;0	>>986
984  743   NOP/0                     ?0        ?0                   ?0                  	;1
985  743   GOTO/253                  ?0        ?896                 ?618                	;0
986  745   POST_INC/36               #333=     16?13                ?0                  	;0	<<983
987  745   FREE/70                   ?0        #333                 ?0                  	;0
988  746   IS_EQUAL/17               #334=     16?13                619:5               	;0
989  746   BOOL_NOT/13               #335=     #334                 ?0                  	;0
990  746   JMPZ/43                   ?0        #335                 ?993                	;0	>>993
991  747   NOP/0                     ?0        ?0                   ?0                  	;1
992  747   GOTO/253                  ?0        ?994                 ?620                	;0
993  749   ASSIGN/38                 ?298      16?13                621:1               	;0	<<990
994  751   NOP/0                     ?0        ?0                   ?0                  	;1
995  751   GOTO/253                  ?0        ?830                 ?622                	;0
996  753   ECHO/40                   ?0        623:'text-white'     ?0                  	;0
997  755   ECHO/40                   ?0        624:'">Server Offline</h4>
                        </a>
                    </div>
                </div>
                <div class="card-footer">
                    <span data-plugin="peity-line" data-fill="' ?0                  	;0
998  756   FETCH_DIM_R/81            $337=     16?3                 625:'theme'         	;0
999  756   IS_EQUAL/17               #338=     $337                 626:1               	;0
1000 756   JMPZ/43                   ?0        #338                 ?1003               	;0	>>1003
1001 756   QM_ASSIGN/22              #339=     627:'#434b56'        ?0                  	;0
1002 756   JMP/42                    ?0        ?1004                ?0                  	;0	>>1004
1003 756   QM_ASSIGN/22              #339=     628:'#7e8e9d'        ?0                  	;0	<<1000
1004 756   ECHO/40                   ?0        #339                 ?0                  	;0	<<1002
1005 757   ECHO/40                   ?0        629:'" data-stroke="' ?0                  	;0
1006 758   NOP/0                     ?0        ?0                   ?0                  	;1
1007 758   GOTO/253                  ?0        ?656                 ?630                	;0
1008 760   FETCH_DIM_R/81            $340=     16?3                 631:'theme'         	;0
1009 760   IS_EQUAL/17               #341=     $340                 632:1               	;0
1010 760   JMPZ/43                   ?0        #341                 ?1013               	;0	>>1013
1011 761   NOP/0                     ?0        ?0                   ?0                  	;1
1012 761   GOTO/253                  ?0        ?1016                ?633                	;0
1013 763   ECHO/40                   ?0        634:'text-info'      ?0                  	;0	<<1010
1014 764   NOP/0                     ?0        ?0                   ?0                  	;1
1015 764   GOTO/253                  ?0        ?676                 ?635                	;0
1016 766   ECHO/40                   ?0        636:'text-white'     ?0                  	;0
1017 767   NOP/0                     ?0        ?0                   ?0                  	;1
1018 767   GOTO/253                  ?0        ?676                 ?637                	;0
1019 769   FETCH_DIM_R/81            $342=     16?21                638:'id'            	;0
1020 769   ECHO/40                   ?0        $342                 ?0                  	;0
1021 770   ECHO/40                   ?0        639:'">
                    <div class="card-header ' ?0                  	;0
1022 771   FETCH_DIM_R/81            $343=     16?3                 640:'theme'         	;0
1023 771   IS_EQUAL/17               #344=     $343                 641:1               	;0
1024 771   JMPZ/43                   ?0        #344                 ?1027               	;0	>>1027
1025 772   NOP/0                     ?0        ?0                   ?0                  	;1
1026 772   GOTO/253                  ?0        ?914                 ?642                	;0
1027 774   ECHO/40                   ?0        643:'bg-dark'        ?0                  	;0	<<1024
1028 775   NOP/0                     ?0        ?0                   ?0                  	;1
1029 775   GOTO/253                  ?0        ?915                 ?644                	;0
1030 776   NOP/0                     ?0        ?0                   ?0                  	;1
1031 776   GOTO/253                  ?0        ?914                 ?645                	;0
1032 778   FETCH_DIM_R/81            $345=     16?3                 646:'theme'         	;0
1033 778   IS_EQUAL/17               #346=     $345                 647:1               	;0
1034 778   JMPZ/43                   ?0        #346                 ?1037               	;0	>>1037
1035 779   NOP/0                     ?0        ?0                   ?0                  	;1
1036 779   GOTO/253                  ?0        ?1040                ?648                	;0
1037 781   ECHO/40                   ?0        649:'text-danger'    ?0                  	;0	<<1034
1038 782   NOP/0                     ?0        ?0                   ?0                  	;1
1039 782   GOTO/253                  ?0        ?885                 ?650                	;0
1040 784   ECHO/40                   ?0        651:'text-white'     ?0                  	;0
1041 785   NOP/0                     ?0        ?0                   ?0                  	;1
1042 785   GOTO/253                  ?0        ?885                 ?652                	;0
1043 786   JMP/42                    ?0        ?653                 ?0                  	;0	>>653
1044 786   FE_FREE/127               ?0        $249                 ?0                  	;0	<<652
1045 789   GOTO/253                  ?0        ?133                 ?653                	;0
1046 791   FETCH_DIM_R/81            $347=     16?26                654:'save_closed_connection'	;0
1047 791   JMPZ_EX/46                #348=     $347                 ?1050               	;0	>>1050
1048 791   FETCH_DIM_R/81            $349=     16?26                655:'dashboard_map' 	;0
1049 791   BOOL/52                   #348=     $349                 ?0                  	;0
1050 791   BOOL_NOT/13               #350=     #348                 ?0                  	;0	<<1047
1051 791   JMPZ/43                   ?0        #350                 ?1053               	;0	>>1053
1052 792   GOTO/253                  ?0        ?1918                ?656                	;0
1053 794   ECHO/40                   ?0        657:'            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-0">Connections by Location</h4>
                        <div id="location-col" class="collapse pt-3 show">
                            <div class="row">
                                <div class="col-md-8 align-self-center">
                                    <div id="map"  style="height: 450px" class="dash-map"></div>
                                </div>
                                <div class="col-md-4 align-self-center">
                                    ' ?0                  	;0	<<1051
1054 795   INIT_FCALL_BY_NAME/59     ?0        ?0                   658:'array_slice'   	;3
1055 795   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
1056 795   SEND_VAL_EX/116           ?96       660:0                ?2                  	;0
1057 795   SEND_VAL_EX/116           ?112      661:5                ?3                  	;0
1058 795   DO_FCALL_BY_NAME/131      $351=     ?0                   ?0                  	;0
1059 795   FE_RESET_R/77             $352=     $351                 ?1112               	;0
1060 795   FE_FETCH_R/78             ?0        $352                 16?27               	;1112	>>1112	<<1111
1061 796   NOP/0                     ?0        ?0                   ?0                  	;1
1062 796   GOTO/253                  ?0        ?1098                ?662                	;0
1063 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   663:'round'         	;2
1064 798   FETCH_DIM_R/81            $353=     16?27                665:'count'         	;0
1065 798   DIV/4                     #354=     $353                 16?16               	;0
1066 798   MUL/3                     #355=     #354                 666:100             	;0
1067 798   SEND_VAL_EX/116           ?80       #355                 ?1                  	;0
1068 798   SEND_VAL_EX/116           ?96       667:0                ?2                  	;0
1069 798   DO_FCALL_BY_NAME/131      $356=     ?0                   ?0                  	;0
1070 798   ECHO/40                   ?0        $356                 ?0                  	;0
1071 799   ECHO/40                   ?0        668:'% </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar ' ?0                  	;0
1072 800   FETCH_DIM_R/81            $357=     16?27                669:'colour'        	;0
1073 800   FETCH_DIM_R/81            $358=     $357                 670:1               	;0
1074 800   ECHO/40                   ?0        $358                 ?0                  	;0
1075 801   ECHO/40                   ?0        671:'" role="progressbar" style="width: ' ?0                  	;0
1076 802   INIT_FCALL_BY_NAME/59     ?0        ?0                   672:'round'         	;2
1077 802   FETCH_DIM_R/81            $359=     16?27                674:'count'         	;0
1078 802   DIV/4                     #360=     $359                 16?16               	;0
1079 802   MUL/3                     #361=     #360                 675:100             	;0
1080 802   SEND_VAL_EX/116           ?80       #361                 ?1                  	;0
1081 802   SEND_VAL_EX/116           ?96       676:0                ?2                  	;0
1082 802   DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
1083 802   ECHO/40                   ?0        $362                 ?0                  	;0
1084 803   NOP/0                     ?0        ?0                   ?0                  	;1
1085 803   GOTO/253                  ?0        ?1086                ?677                	;0
1086 805   ECHO/40                   ?0        678:'%;" aria-valuenow="' ?0                  	;0
1087 806   INIT_FCALL_BY_NAME/59     ?0        ?0                   679:'round'         	;2
1088 806   FETCH_DIM_R/81            $363=     16?27                681:'count'         	;0
1089 806   DIV/4                     #364=     $363                 16?16               	;0
1090 806   MUL/3                     #365=     #364                 682:100             	;0
1091 806   SEND_VAL_EX/116           ?80       #365                 ?1                  	;0
1092 806   SEND_VAL_EX/116           ?96       683:0                ?2                  	;0
1093 806   DO_FCALL_BY_NAME/131      $366=     ?0                   ?0                  	;0
1094 806   ECHO/40                   ?0        $366                 ?0                  	;0
1095 807   ECHO/40                   ?0        684:'" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    ' ?0                  	;0
1096 809   NOP/0                     ?0        ?0                   ?0                  	;1
1097 809   GOTO/253                  ?0        ?1111                ?685                	;0
1098 811   ECHO/40                   ?0        686:'                                    <h5 class="mb-1 mt-0">' ?0                  	;0
1099 812   INIT_FCALL_BY_NAME/59     ?0        ?0                   687:'number_format' 	;2
1100 812   FETCH_DIM_FUNC_ARG/93     $367=     16?27                689:'count'         	;1
1101 812   SEND_VAR_EX/66            ?80       $367                 ?1                  	;0
1102 812   SEND_VAL_EX/116           ?96       690:0                ?2                  	;0
1103 812   DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
1104 812   ECHO/40                   ?0        $368                 ?0                  	;0
1105 813   ECHO/40                   ?0        691:' <small class="text-muted ml-2">' ?0                  	;0
1106 814   FETCH_DIM_R/81            $369=     16?27                692:'name'          	;0
1107 814   ECHO/40                   ?0        $369                 ?0                  	;0
1108 815   ECHO/40                   ?0        693:'</small></h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">' ?0                  	;0
1109 816   NOP/0                     ?0        ?0                   ?0                  	;1
1110 816   GOTO/253                  ?0        ?1063                ?694                	;0
1111 817   JMP/42                    ?0        ?1060                ?0                  	;0	>>1060
1112 817   FE_FREE/127               ?0        $352                 ?0                  	;0	<<1059
1113 820   ECHO/40                   ?0        695:'                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ' ?0                  	;0
1114 821   GOTO/253                  ?0        ?1918                ?696                	;0
1115 823   FETCH_DIM_R/81            $370=     16?22                697:'dashboard_no_permissions'	;0
1116 823   ECHO/40                   ?0        $370                 ?0                  	;0
1117 824   ECHO/40                   ?0        698:'<br/>'          ?0                  	;0
1118 825   FETCH_DIM_R/81            $371=     16?22                699:'dashboard_nav_top'	;0
1119 825   ECHO/40                   ?0        $371                 ?0                  	;0
1120 826   ECHO/40                   ?0        700:'		</div>
		'    ?0                  	;0
1121 827   GOTO/253                  ?0        ?134                 ?701                	;0
1122 828   GOTO/253                  ?0        ?1897                ?702                	;0
1123 830   ECHO/40                   ?0        703:'            </div>
            ' ?0                  	;0
1124 831   JMPZ/43                   ?0        16?12                ?1126               	;0	>>1126
1125 832   GOTO/253                  ?0        ?1918                ?704                	;0
1126 834   FETCH_DIM_R/81            $372=     16?26                705:'dashboard_status'	;0	<<1124
1127 834   BOOL_NOT/13               #373=     $372                 ?0                  	;0
1128 834   JMPZ/43                   ?0        #373                 ?1130               	;0	>>1130
1129 835   GOTO/253                  ?0        ?132                 ?706                	;0
1130 837   ECHO/40                   ?0        707:'            <div class="col-xl-6">
                <div class="card" style="height: 390px; overflow:hidden;">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Service Status</h4>
                        <div style="max-height: 288px; overflow-y: scroll;">
                            <div class="timeline-alt">
                                ' ?0                  	;0	<<1128
1131 838   ASSIGN/38                 ?336      16?5                 708:false           	;0
1132 839   GOTO/253                  ?0        ?1141                ?709                	;0
1133 841   IS_EQUAL/17               #375=     16?9                 710:'Beta License'  	;0
1134 841   JMPZ/43                   ?0        #375                 ?1136               	;0	>>1136
1135 842   GOTO/253                  ?0        ?1914                ?711                	;0
1136 844   ECHO/40                   ?0        712:'                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title"><strong>' ?0                  	;0	<<1134
1137 845   ECHO/40                   ?0        16?9                 ?0                  	;0
1138 846   ECHO/40                   ?0        713:' Expires Soon!</strong></h3>
                                ' ?0                  	;0
1139 847   GOTO/253                  ?0        ?1915                ?714                	;0
1140 848   GOTO/253                  ?0        ?1914                ?715                	;0
1141 850   NOP/0                     ?0        ?0                   ?0                  	;0
1142 851   FETCH_OBJ_R/82            $376=     16?7                 716:'dbh'           	;0	<<1148
1143 851   INIT_METHOD_CALL/112      ?0        $376                 717:'query'         	;1
1144 851   SEND_VAL_EX/116           ?80       719:'SELECT JSON_CONTAINS(\'0\', 0, \'$\') AS `json_test`;' ?1                  	;0
1145 851   DO_FCALL/60               $377=     ?0                   ?0                  	;0
1146 851   ASSIGN/38                 ?340      16?28                $377                	;0
1147 851   JMP/42                    ?0        ?1151                ?0                  	;0	>>1151
1148 852   CATCH/107                 ?1        720:'Exception'      16?29               	;0 CB	>>1151,1142
1149 853   ASSIGN/38                 ?341      16?5                 722:true            	;0
1150 854   ECHO/40                   ?0        723:'<div class="timeline-item">
                                        <i class="timeline-icon bg-danger"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold mb-1 d-block bg"><strong>MariaDB Outdated!</strong></a>
                                            <small>You\'re using an old version of MariaDB. Please update to at least v10.5 in order for XUI to work correctly.</small><br/>
                                            <p><br/></p>
                                        </div>
                                    </div>' ?0                  	;0
1151 856   FETCH_STATIC_PROP_IS/176  $380=     724:'rSettings'      725:'XUI'           	;0	<<1147,1148
1152 856   ISSET_ISEMPTY_DIM_OBJ/115 #381=     $380                 727:'status_uuid'   	;16777216
1153 856   JMPNZ_EX/47               #381=     #381                 ?1172               	;0	>>1172
1154 856   FETCH_STATIC_PROP_R/173   $382=     728:'rSettings'      729:'XUI'           	;0
1155 856   FETCH_DIM_R/81            $383=     $382                 731:'status_uuid'   	;0
1156 856   INIT_FCALL_BY_NAME/59     ?0        ?0                   732:'md5'           	;1
1157 856   FETCH_CONSTANT/99         #384=     ?0                   734:'XUI_VERSION'   	;16
1158 856   FETCH_CONSTANT/99         #385=     ?0                   737:'XUI_REVISION'  	;16
1159 856   BOOL_NOT/13               #386=     #385                 ?0                  	;0
1160 856   BOOL_NOT/13               #387=     #386                 ?0                  	;0
1161 856   JMPZ/43                   ?0        #387                 ?1166               	;0	>>1166
1162 856   FETCH_CONSTANT/99         #388=     ?0                   740:'XUI_REVISION'  	;16
1163 856   CONCAT/8                  #389=     743:'R'              #388                	;0
1164 856   QM_ASSIGN/22              #390=     #389                 ?0                  	;0
1165 856   JMP/42                    ?0        ?1167                ?0                  	;0	>>1167
1166 856   QM_ASSIGN/22              #390=     744:''               ?0                  	;0	<<1161
1167 856   CONCAT/8                  #391=     #384                 #390                	;0	<<1165
1168 856   SEND_VAL_EX/116           ?80       #391                 ?1                  	;0
1169 856   DO_FCALL_BY_NAME/131      $392=     ?0                   ?0                  	;0
1170 856   IS_NOT_EQUAL/18           #393=     $383                 $392                	;0
1171 856   BOOL/52                   #381=     #393                 ?0                  	;0
1172 856   BOOL_NOT/13               #394=     #381                 ?0                  	;0	<<1153
1173 856   JMPZ/43                   ?0        #394                 ?1175               	;0	>>1175
1174 857   GOTO/253                  ?0        ?1177                ?745                	;0
1175 859   ASSIGN/38                 ?357      16?5                 746:true            	;0	<<1173
1176 860   ECHO/40                   ?0        747:'<div class="timeline-item">
                                        <i class="timeline-icon bg-warning"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Database Incomplete</strong></a>
                                            <small>Your database is outdated, please run <strong>/home/xui/status</strong> as root user to update your tables.</small><br/>
                                            <p><br/></p>
                                        </div>
                                    </div>' ?0                  	;0
1177 862   GOTO/253                  ?0        ?171                 ?748                	;0
1178 864   JMPZ/43                   ?0        16?30                ?1180               	;0	>>1180
1179 865   GOTO/253                  ?0        ?1182                ?749                	;0
1180 867   ASSIGN/38                 ?358      16?9                 750:'License'       	;0	<<1178
1181 868   GOTO/253                  ?0        ?76                  ?751                	;0
1182 870   ASSIGN/38                 ?359      16?9                 752:'Beta License'  	;0
1183 871   GOTO/253                  ?0        ?76                  ?753                	;0
1184 874   ECHO/40                   ?0        754:' text-white">
                    <div class="card-body input-flow">
                        <div class="media align-items-center">
                            <div class="col-3">
                                <div class="avatar-sm bg-light">
                                    <i class="fe-trending-down avatar-title font-22 ' ?0                  	;0
1185 875   FETCH_DIM_R/81            $398=     16?3                 755:'theme'         	;0
1186 875   IS_EQUAL/17               #399=     $398                 756:1               	;0
1187 875   JMPZ/43                   ?0        #399                 ?1189               	;0	>>1189
1188 876   GOTO/253                  ?0        ?1238                ?757                	;0
1189 878   ECHO/40                   ?0        758:'text-danger'    ?0                  	;0	<<1187
1190 879   GOTO/253                  ?0        ?1239                ?759                	;0
1191 880   GOTO/253                  ?0        ?1238                ?760                	;0
1192 883   INIT_FCALL_BY_NAME/59     ?0        ?0                   764:'intval'        	;1
1193 883   FETCH_STATIC_PROP_FUNC_ARG/177 $401=     766:'rRequest'       767:'XUI'           	;1
1194 883   FETCH_DIM_FUNC_ARG/93     $402=     $401                 769:'server_id'     	;1
1195 883   SEND_VAR_EX/66            ?80       $402                 ?1                  	;0
1196 883   DO_FCALL_BY_NAME/131      $403=     ?0                   ?0                  	;0
1197 883   FETCH_STATIC_PROP_R/173   $400=     761:'rServers'       762:'XUI'           	;0
1198 883   FETCH_DIM_R/81            $404=     $400                 $403                	;0
1199 883   FETCH_DIM_R/81            $405=     $404                 770:'server_name'   	;0
1200 883   CONCAT/8                  #406=     $405                 771:'&nbsp; <a href=\'server_view?id='	;0
1201 883   INIT_FCALL_BY_NAME/59     ?0        ?0                   772:'intval'        	;1
1202 883   FETCH_STATIC_PROP_FUNC_ARG/177 $407=     774:'rRequest'       775:'XUI'           	;1
1203 883   FETCH_DIM_FUNC_ARG/93     $408=     $407                 777:'server_id'     	;1
1204 883   SEND_VAR_EX/66            ?80       $408                 ?1                  	;0
1205 883   DO_FCALL_BY_NAME/131      $409=     ?0                   ?0                  	;0
1206 883   CONCAT/8                  #410=     #406                 $409                	;0
1207 883   CONCAT/8                  #411=     #410                 778:'\' class=\'btn btn-light waves-effect waves-light btn-xs tooltip-right\' title=\'View Server\'><i class=\'mdi mdi-chart-line\'></i></a><a href=\'process_monitor?server='	;0
1208 883   INIT_FCALL_BY_NAME/59     ?0        ?0                   779:'intval'        	;1
1209 883   FETCH_STATIC_PROP_FUNC_ARG/177 $412=     781:'rRequest'       782:'XUI'           	;1
1210 883   FETCH_DIM_FUNC_ARG/93     $413=     $412                 784:'server_id'     	;1
1211 883   SEND_VAR_EX/66            ?80       $413                 ?1                  	;0
1212 883   DO_FCALL_BY_NAME/131      $414=     ?0                   ?0                  	;0
1213 883   CONCAT/8                  #415=     #411                 $414                	;0
1214 883   CONCAT/8                  #416=     #415                 785:'\' class=\'btn btn-light waves-effect waves-light btn-xs tooltip-right\' title=\'Process Monitor\'><i class=\'mdi mdi-chart-bar\'></i></a>'	;0
1215 883   ECHO/40                   ?0        #416                 ?0                  	;0
1216 885   ECHO/40                   ?0        786:'</h4>
                    ' ?0                  	;0
1217 887   GOTO/253                  ?0        ?1903                ?787                	;0
1218 889   GOTO/253                  ?0        ?1221                ?788                	;0
1219 891   ASSIGN/38                 ?379      16?24                789:array (
  1 => 
  array (
    0 => 'secondary',
    1 => '#7e8e9d',
    2 => '#ffffff',
  ),
  2 => 
  array (
    0 => 'secondary',
    1 => '#7e8e9d',
    2 => '#ffffff',
  ),
  3 => 
  array (
    0 => 'secondary',
    1 => '#7e8e9d',
    2 => '#ffffff',
  ),
  4 => 
  array (
    0 => 'secondary',
    1 => '#7e8e9d',
    2 => '#ffffff',
  ),
)	;0
1220 892   ASSIGN/38                 ?380      16?18                790:array (
  0 => 
  array (
    0 => '#7e8e9d',
    1 => 'bg-map-dark-1',
  ),
  1 => 
  array (
    0 => '#6c7b8a',
    1 => 'bg-map-dark-2',
  ),
  2 => 
  array (
    0 => '#5a6977',
    1 => 'bg-map-dark-3',
  ),
  3 => 
  array (
    0 => '#485765',
    1 => 'bg-map-dark-4',
  ),
  4 => 
  array (
    0 => '#374654',
    1 => 'bg-map-dark-5',
  ),
  5 => 
  array (
    0 => '#273643',
    1 => 'bg-map-dark-6',
  ),
)	;0
1221 894   GOTO/253                  ?0        ?1397                ?791                	;0
1222 896   ECHO/40                   ?0        792:' text-white">
                    <div class="card-body output-flow">
                        <div class="media align-items-center">
                            <div class="col-3">
                                <div class="avatar-sm bg-light">
                                    <i class="fe-trending-up avatar-title font-22 ' ?0                  	;0
1223 897   FETCH_DIM_R/81            $419=     16?3                 793:'theme'         	;0
1224 897   IS_EQUAL/17               #420=     $419                 794:1               	;0
1225 897   JMPZ/43                   ?0        #420                 ?1227               	;0	>>1227
1226 898   GOTO/253                  ?0        ?1229                ?795                	;0
1227 900   ECHO/40                   ?0        796:'text-primary'   ?0                  	;0	<<1225
1228 901   GOTO/253                  ?0        ?34                  ?797                	;0
1229 903   GOTO/253                  ?0        ?33                  ?798                	;0
1230 905   ECHO/40                   ?0        799:'100%'           ?0                  	;0
1231 907   ECHO/40                   ?0        800:';">
                            <select id="server_id" class="form-control">
                                <option ' ?0                  	;0
1232 908   FETCH_STATIC_PROP_IS/176  $421=     801:'rRequest'       802:'XUI'           	;0
1233 908   ISSET_ISEMPTY_DIM_OBJ/115 #422=     $421                 804:'server_id'     	;33554432
1234 908   JMPZ/43                   ?0        #422                 ?1236               	;0	>>1236
1235 909   GOTO/253                  ?0        ?87                  ?805                	;0
1236 911   ECHO/40                   ?0        806:'selected '      ?0                  	;0	<<1234
1237 912   GOTO/253                  ?0        ?87                  ?807                	;0
1238 915   ECHO/40                   ?0        808:'text-white'     ?0                  	;0
1239 917   ECHO/40                   ?0        809:'"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="text-right">
                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span> <small>Mbps</small></h3>
                                    <p class="text-white mb-1 text-truncate">Network Input</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
            ' ?0                  	;0
1240 918   INIT_FCALL_BY_NAME/59     ?0        ?0                   810:'time'          	;0
1241 918   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
1242 918   FETCH_DIM_R/81            $424=     16?19                812:3               	;0
1243 918   IS_SMALLER/19             #425=     $423                 $424                	;0
1244 918   JMPZ_EX/46                #425=     #425                 ?1251               	;0	>>1251
1245 918   FETCH_DIM_R/81            $426=     16?19                813:3               	;0
1246 918   INIT_FCALL_BY_NAME/59     ?0        ?0                   814:'time'          	;0
1247 918   DO_FCALL_BY_NAME/131      $427=     ?0                   ?0                  	;0
1248 918   SUB/2                     #428=     $426                 $427                	;0
1249 918   IS_SMALLER/19             #429=     #428                 816:604800          	;0
1250 918   BOOL/52                   #425=     #429                 ?0                  	;0
1251 918   JMPNZ_EX/47               #425=     #425                 ?1253               	;0	>>1253	<<1244
1252 918   BOOL/52                   #425=     16?31                ?0                  	;0
1253 918   JMPNZ_EX/47               #425=     #425                 ?1255               	;0	>>1255	<<1251
1254 918   BOOL/52                   #425=     16?30                ?0                  	;0
1255 918   JMPZ/43                   ?0        #425                 ?1257               	;0	>>1257	<<1253
1256 919   GOTO/253                  ?0        ?74                  ?817                	;0
1257 921   GOTO/253                  ?0        ?261                 ?818                	;0	<<1255
1258 925   ASSIGN/38                 ?392      16?20                16?10               	;0
1259 926   INIT_FCALL_BY_NAME/59     ?0        ?0                   819:'array_multisort'	;3
1260 926   INIT_FCALL_BY_NAME/59     ?0        ?0                   821:'array_column'  	;2
1261 926   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
1262 926   SEND_VAL_EX/116           ?96       823:'order'          ?2                  	;0
1263 926   DO_FCALL_BY_NAME/131      $431=     ?0                   ?0                  	;0
1264 926   SEND_VAR_NO_REF_EX/50     ?80       $431                 ?1                  	;0
1265 926   FETCH_CONSTANT/99         #432=     ?0                   824:'SORT_ASC'      	;16
1266 926   SEND_VAL_EX/116           ?96       #432                 ?2                  	;0
1267 926   SEND_VAR_EX/66            ?112      16?20                ?3                  	;0
1268 926   DO_FCALL_BY_NAME/131      ?395      ?0                   ?0                  	;0
1269 927   JMPZ/43                   ?0        16?31                ?1271               	;0	>>1271
1270 928   GOTO/253                  ?0        ?77                  ?827                	;0
1271 930   GOTO/253                  ?0        ?1178                ?828                	;0	<<1269
1272 932   ASSIGN/38                 ?396      16?5                 829:true            	;0
1273 933   INIT_FCALL_BY_NAME/59     ?0        ?0                   830:'number_format' 	;2
1274 933   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
1275 933   SEND_VAL_EX/116           ?96       832:0                ?2                  	;0
1276 933   DO_FCALL_BY_NAME/131      $435=     ?0                   ?0                  	;0
1277 933   CONCAT/8                  #436=     833:'<div class="timeline-item">
                                            <i class="timeline-icon bg-dark"></i>
                                            <div class="timeline-item-info">
                                                <a href="line_activity" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Activity Logs</strong></a>
                                                <small>You have <strong>' $435                	;0
1278 933   CONCAT/8                  #437=     #436                 834:' logs</strong> stored. <span class="text-secondary">This can significantly slow down the user interface. You should consider clearing these.</span></small><br/>
                                                <p><br/></p>
                                            </div>
                                        </div>'	;0
1279 933   ECHO/40                   ?0        #437                 ?0                  	;0
1280 935   INIT_METHOD_CALL/112      ?0        16?7                 835:'query'         	;1
1281 935   SEND_VAL_EX/116           ?80       837:'SELECT COUNT(*) AS `count` FROM `streams_errors`;' ?1                  	;0
1282 935   DO_FCALL/60               ?400      ?0                   ?0                  	;0
1283 936   INIT_METHOD_CALL/112      ?0        16?7                 838:'get_row'       	;0
1284 936   DO_FCALL/60               $439=     ?0                   ?0                  	;0
1285 936   FETCH_DIM_R/81            $440=     $439                 840:'count'         	;0
1286 936   JMP_SET/152               #441=     $440                 ?1288               	;0
1287 936   QM_ASSIGN/22              #441=     841:0                ?0                  	;0
1288 936   ASSIGN/38                 ?404      16?4                 #441                	;0
1289 937   GOTO/253                  ?0        ?20                  ?842                	;0
1290 939   JMPZ/43                   ?0        16?12                ?1292               	;0	>>1292
1291 940   GOTO/253                  ?0        ?1293                ?843                	;0
1292 942   ECHO/40                   ?0        844:'                            <img class="ml-3 whiteout" src="./assets/images/logo-topbar.png" width="80" style="margin-right: 20px;">
                            ' ?0                  	;0	<<1290
1293 944   ECHO/40                   ?0        845:'                        </div>
                    </div>
                </div>
                ' ?0                  	;0
1294 946   GOTO/253                  ?0        ?1123                ?846                	;0
1295 949   ECHO/40                   ?0        847:'                <div class="card cta-box ' ?0                  	;0
1296 950   FETCH_DIM_R/81            $443=     16?3                 848:'theme'         	;0
1297 950   IS_EQUAL/17               #444=     $443                 849:0               	;0
1298 950   BOOL_NOT/13               #445=     #444                 ?0                  	;0
1299 950   JMPZ/43                   ?0        #445                 ?1301               	;0	>>1301
1300 951   GOTO/253                  ?0        ?1302                ?850                	;0
1301 953   ECHO/40                   ?0        851:'bg-pink'        ?0                  	;0	<<1299
1302 955   GOTO/253                  ?0        ?1924                ?852                	;0
1303 957   ECHO/40                   ?0        853:'>
                        <ol class="breadcrumb m-0" style="width: ' ?0                  	;0
1304 958   JMPZ/43                   ?0        16?12                ?1306               	;0	>>1306
1305 959   GOTO/253                  ?0        ?1308                ?854                	;0
1306 961   ECHO/40                   ?0        855:'250px'          ?0                  	;0	<<1304
1307 962   GOTO/253                  ?0        ?1231                ?856                	;0
1308 964   GOTO/253                  ?0        ?1230                ?857                	;0
1309 966   FETCH_STATIC_PROP_IS/176  $446=     858:'rRequest'       859:'XUI'           	;0
1310 966   ISSET_ISEMPTY_DIM_OBJ/115 #447=     $446                 861:'server_id'     	;33554432
1311 966   JMPZ/43                   ?0        #447                 ?1313               	;0	>>1313
1312 967   GOTO/253                  ?0        ?1461                ?862                	;0
1313 969   INIT_FCALL_BY_NAME/59     ?0        ?0                   863:'array_column'  	;2	<<1311
1314 969   FETCH_STATIC_PROP_FUNC_ARG/177 $448=     865:'rServers'       866:'XUI'           	;1
1315 969   SEND_VAR_EX/66            ?80       $448                 ?1                  	;0
1316 969   SEND_VAL_EX/116           ?96       868:'last_check_ago' ?2                  	;0
1317 969   DO_FCALL_BY_NAME/131      $449=     ?0                   ?0                  	;0
1318 969   ASSIGN/38                 ?412      16?32                $449                	;0
1319 970   INIT_FCALL_BY_NAME/59     ?0        ?0                   869:'array_multisort'	;3
1320 970   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1321 970   FETCH_CONSTANT/99         #451=     ?0                   871:'SORT_DESC'     	;16
1322 970   SEND_VAL_EX/116           ?96       #451                 ?2                  	;0
1323 970   FETCH_STATIC_PROP_FUNC_ARG/177 $452=     874:'rServers'       875:'XUI'           	;3
1324 970   SEND_VAR_EX/66            ?112      $452                 ?3                  	;0
1325 970   DO_FCALL_BY_NAME/131      ?415      ?0                   ?0                  	;0
1326 971   FETCH_STATIC_PROP_R/173   $454=     877:'rServers'       878:'XUI'           	;0
1327 971   ASSIGN/38                 ?417      16?33                $454                	;0
1328 972   GOTO/253                  ?0        ?1467                ?880                	;0
1329 973   GOTO/253                  ?0        ?1461                ?881                	;0
1330 975   FETCH_STATIC_PROP_IS/176  $456=     882:'rRequest'       883:'XUI'           	;0
1331 975   ISSET_ISEMPTY_DIM_OBJ/115 #457=     $456                 885:'server_id'     	;33554432
1332 975   JMPZ/43                   ?0        #457                 ?1334               	;0	>>1334
1333 976   GOTO/253                  ?0        ?1338                ?886                	;0
1334 978   INIT_METHOD_CALL/112      ?0        16?7                 887:'query'         	;1	<<1332
1335 978   SEND_VAL_EX/116           ?80       889:'SELECT `geoip_country_code`, COUNT(`geoip_country_code`) AS `count` FROM `lines_activity` GROUP BY `geoip_country_code` ORDER BY `count` DESC;' ?1                  	;0
1336 978   DO_FCALL/60               ?420      ?0                   ?0                  	;0
1337 979   GOTO/253                  ?0        ?199                 ?890                	;0
1338 981   INIT_METHOD_CALL/112      ?0        16?7                 891:'query'         	;3
1339 981   SEND_VAL_EX/116           ?80       893:'SELECT `geoip_country_code`, COUNT(`geoip_country_code`) AS `count` FROM `lines_activity` WHERE (`server_id` = ? OR `proxy_id` = ?) GROUP BY `geoip_country_code` ORDER BY `count` DESC;' ?1                  	;0
1340 981   INIT_FCALL_BY_NAME/59     ?0        ?0                   894:'intval'        	;1
1341 981   FETCH_STATIC_PROP_FUNC_ARG/177 $459=     896:'rRequest'       897:'XUI'           	;1
1342 981   FETCH_DIM_FUNC_ARG/93     $460=     $459                 899:'server_id'     	;1
1343 981   SEND_VAR_EX/66            ?80       $460                 ?1                  	;0
1344 981   DO_FCALL_BY_NAME/131      $461=     ?0                   ?0                  	;0
1345 981   SEND_VAR_NO_REF_EX/50     ?96       $461                 ?2                  	;0
1346 981   INIT_FCALL_BY_NAME/59     ?0        ?0                   900:'intval'        	;1
1347 981   FETCH_STATIC_PROP_FUNC_ARG/177 $462=     902:'rRequest'       903:'XUI'           	;1
1348 981   FETCH_DIM_FUNC_ARG/93     $463=     $462                 905:'server_id'     	;1
1349 981   SEND_VAR_EX/66            ?80       $463                 ?1                  	;0
1350 981   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
1351 981   SEND_VAR_NO_REF_EX/50     ?112      $464                 ?3                  	;0
1352 981   DO_FCALL/60               ?427      ?0                   ?0                  	;0
1353 982   GOTO/253                  ?0        ?199                 ?906                	;0
1354 984   INIT_FCALL_BY_NAME/59     ?0        ?0                   907:'E589A4bf54A2DAd1'	;2
1355 984   SEND_VAL_EX/116           ?80       909:'adv'            ?1                  	;0
1356 984   SEND_VAL_EX/116           ?96       910:'live_connections' ?2                  	;0
1357 984   DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
1358 984   BOOL_NOT/13               #467=     $466                 ?0                  	;0
1359 984   JMPZ/43                   ?0        #467                 ?1361               	;0	>>1361
1360 985   GOTO/253                  ?0        ?1362                ?911                	;0
1361 987   ECHO/40                   ?0        912:'</a>'           ?0                  	;0	<<1359
1362 989   ECHO/40                   ?0        913:'            </div>
            <div class="col-md-4">
                ' ?0                  	;0
1363 990   INIT_FCALL_BY_NAME/59     ?0        ?0                   914:'E589a4Bf54A2DAd1'	;2
1364 990   SEND_VAL_EX/116           ?80       916:'adv'            ?1                  	;0
1365 990   SEND_VAL_EX/116           ?96       917:'streams'        ?2                  	;0
1366 990   DO_FCALL_BY_NAME/131      $468=     ?0                   ?0                  	;0
1367 990   BOOL_NOT/13               #469=     $468                 ?0                  	;0
1368 990   JMPZ/43                   ?0        #469                 ?1370               	;0	>>1370
1369 991   GOTO/253                  ?0        ?1955                ?918                	;0
1370 993   GOTO/253                  ?0        ?1954                ?919                	;0	<<1368
1371 995   ASSIGN/38                 ?432      16?25                920:array (
)       	;0
1372 996   INIT_METHOD_CALL/112      ?0        16?7                 921:'query'         	;2
1373 996   SEND_VAL_EX/116           ?80       923:'SELECT * FROM `servers_stats` WHERE `time` >= ? ORDER BY `time` ASC;' ?1                  	;0
1374 996   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1375 996   DO_FCALL/60               ?433      ?0                   ?0                  	;0
1376 997   INIT_METHOD_CALL/112      ?0        16?7                 924:'num_rows'      	;0
1377 997   DO_FCALL/60               $472=     ?0                   ?0                  	;0
1378 997   IS_SMALLER/19             #473=     926:0                $472                	;0
1379 997   BOOL_NOT/13               #474=     #473                 ?0                  	;0
1380 997   JMPZ/43                   ?0        #474                 ?1382               	;0	>>1382
1381 998   GOTO/253                  ?0        ?1258                ?927                	;0
1382 1000  INIT_METHOD_CALL/112      ?0        16?7                 928:'get_rows'      	;0	<<1380
1383 1000  DO_FCALL/60               $475=     ?0                   ?0                  	;0
1384 1000  FE_RESET_R/77             $476=     $475                 ?1395               	;0
1385 1000  FE_FETCH_R/78             ?0        $476                 16?14               	;1395	>>1395	<<1394
1386 1001  INIT_FCALL_BY_NAME/59     ?0        ?0                   930:'intval'        	;1
1387 1001  FETCH_DIM_FUNC_ARG/93     $477=     16?14                932:'server_id'     	;1
1388 1001  SEND_VAR_EX/66            ?80       $477                 ?1                  	;0
1389 1001  DO_FCALL_BY_NAME/131      $478=     ?0                   ?0                  	;0
1390 1001  FETCH_DIM_R/81            $481=     16?14                933:'cpu'           	;0
1391 1001  FETCH_DIM_W/84            $479=     16?25                $478                	;0
1392 1001  ASSIGN_DIM/147            ?442      $479                 ?4414262            	;0
1393 1001  OP_DATA/137               ?0        $481                 ?0                  	;0
1394 1002  JMP/42                    ?0        ?1385                ?0                  	;0	>>1385
1395 1002  FE_FREE/127               ?0        $476                 ?0                  	;0	<<1384
1396 1005  GOTO/253                  ?0        ?1258                ?934                	;0
1397 1007  FETCH_STATIC_PROP_IS/176  $482=     935:'rRequest'       936:'XUI'           	;0
1398 1007  ISSET_ISEMPTY_DIM_OBJ/115 #483=     $482                 938:'server_id'     	;33554432
1399 1007  JMPZ_EX/46                #483=     #483                 ?1405               	;0	>>1405
1400 1007  FETCH_STATIC_PROP_R/173   $484=     939:'rRequest'       940:'XUI'           	;0
1401 1007  FETCH_DIM_R/81            $485=     $484                 942:'server_id'     	;0
1402 1007  ISSET_ISEMPTY_DIM_OBJ/115 #486=     16?10                $485                	;33554432
1403 1007  BOOL_NOT/13               #487=     #486                 ?0                  	;0
1404 1007  BOOL/52                   #483=     #487                 ?0                  	;0
1405 1007  BOOL_NOT/13               #488=     #483                 ?0                  	;0	<<1399
1406 1007  JMPZ/43                   ?0        #488                 ?1408               	;0	>>1408
1407 1008  GOTO/253                  ?0        ?1410                ?943                	;0
1408 1010  INIT_FCALL_BY_NAME/59     ?0        ?0                   944:'e72f42A93714bA87'	;0	<<1406
1409 1010  DO_FCALL_BY_NAME/131      ?451      ?0                   ?0                  	;0
1410 1012  ASSIGN/38                 ?452      16?17                946:array (
)       	;0
1411 1013  ASSIGN/38                 ?453      16?16                947:0               	;0
1412 1014  GOTO/253                  ?0        ?1330                ?948                	;0
1413 1016  FETCH_DIM_R/81            $492=     16?26                949:'dashboard_stats'	;0
1414 1016  BOOL_NOT/13               #493=     $492                 ?0                  	;0
1415 1016  JMPZ/43                   ?0        #493                 ?1417               	;0	>>1417
1416 1017  GOTO/253                  ?0        ?1918                ?950                	;0
1417 1019  ECHO/40                   ?0        951:'            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-0">CPU & Memory</h4>
                        <div id="cpu_chart-col" class="pt-3 show" dir="ltr">
                            <div id="cpu_chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-0">Network Traffic</h4>
                        <div id="network_chart-col" class="pt-3 show" dir="ltr">
                            <div id="network_chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            ' ?0                  	;0	<<1415
1418 1020  FETCH_DIM_R/81            $494=     16?26                952:'save_closed_connection'	;0
1419 1020  BOOL_NOT/13               #495=     $494                 ?0                  	;0
1420 1020  JMPZ/43                   ?0        #495                 ?1422               	;0	>>1422
1421 1021  GOTO/253                  ?0        ?1423                ?953                	;0
1422 1023  ECHO/40                   ?0        954:'            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-0">Connections</h4>
                        <div id="connections_chart-col" class="pt-3 show" dir="ltr">
                            <div id="connections_chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            ' ?0                  	;0	<<1420
1423 1025  GOTO/253                  ?0        ?1046                ?955                	;0
1424 1027  ECHO/40                   ?0        956:'bg-success'     ?0                  	;0
1425 1029  ECHO/40                   ?0        957:' text-white">
                    <div class="card-body online-users">
                        <div class="media align-items-center">
                            <div class="col-3">
                                <div class="avatar-sm bg-light">
                                    <i class="fe-users avatar-title font-22 ' ?0                  	;0
1426 1030  FETCH_DIM_R/81            $496=     16?3                 958:'theme'         	;0
1427 1030  IS_EQUAL/17               #497=     $496                 959:1               	;0
1428 1030  JMPZ/43                   ?0        #497                 ?1430               	;0	>>1430
1429 1031  GOTO/253                  ?0        ?54                  ?960                	;0
1430 1033  ECHO/40                   ?0        961:'text-success'   ?0                  	;0	<<1428
1431 1034  GOTO/253                  ?0        ?53                  ?962                	;0
1432 1036  GOTO/253                  ?0        ?1434                ?963                	;0
1433 1038  ECHO/40                   ?0        964:'                                If you want to continue using XUI, you will need to order a normal license via the billing panel.<br/>This installation is non-transferable however you can backup your database and restore it on the non-trial version of XUI.</p>
                                ' ?0                  	;0
1434 1040  ECHO/40                   ?0        965:'                                <a href="https://xui.one/billing/" class="text-white font-weight-semibold text-uppercase">Go to Billing Panel <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                            ' ?0                  	;0
1435 1041  GOTO/253                  ?0        ?1290                ?966                	;0
1436 1043  ECHO/40                   ?0        967:'"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="text-right">
                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                    <p class="text-white mb-1 text-truncate">Online Connections</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ' ?0                  	;0
1437 1044  INIT_FCALL_BY_NAME/59     ?0        ?0                   968:'E589a4bF54a2DaD1'	;2
1438 1044  SEND_VAL_EX/116           ?80       970:'adv'            ?1                  	;0
1439 1044  SEND_VAL_EX/116           ?96       971:'live_connections' ?2                  	;0
1440 1044  DO_FCALL_BY_NAME/131      $498=     ?0                   ?0                  	;0
1441 1044  BOOL_NOT/13               #499=     $498                 ?0                  	;0
1442 1044  JMPZ/43                   ?0        #499                 ?1444               	;0	>>1444
1443 1045  GOTO/253                  ?0        ?1445                ?972                	;0
1444 1047  ECHO/40                   ?0        973:'</a>'           ?0                  	;0	<<1442
1445 1049  ECHO/40                   ?0        974:'            </div>
            <div class="col-md-4">
                ' ?0                  	;0
1446 1050  GOTO/253                  ?0        ?1882                ?975                	;0
1447 1052  ECHO/40                   ?0        976:'text-purple'    ?0                  	;0
1448 1053  GOTO/253                  ?0        ?1450                ?977                	;0
1449 1055  ECHO/40                   ?0        978:'text-white'     ?0                  	;0
1450 1057  GOTO/253                  ?0        ?1436                ?979                	;0
1451 1059  ASSIGN/38                 ?462      16?5                 980:true            	;0
1452 1060  ECHO/40                   ?0        981:'<div class="timeline-item">
                                        <i class="timeline-icon bg-dark"></i>
                                        <div class="timeline-item-info">
                                            <a href="settings" class="text-body font-weight-semibold mb-1 d-block bg"><strong>NGINX Buffer</strong></a>
                                            <small>You have enabled <strong>NGINX Buffer</strong> in settings. <span class="text-secondary">While this isn\'t an issue, if you don\'t know what this does you should disable this.</span></small><br/>
                                            <p><br/></p>
                                        </div>
                                    </div>' ?0                  	;0
1453 1062  FETCH_STATIC_PROP_IS/176  $501=     982:'rRequest'       983:'XUI'           	;0
1454 1062  ISSET_ISEMPTY_DIM_OBJ/115 #502=     $501                 985:'server_id'     	;33554432
1455 1062  BOOL_NOT/13               #503=     #502                 ?0                  	;0
1456 1062  JMPZ/43                   ?0        #503                 ?1458               	;0	>>1458
1457 1063  GOTO/253                  ?0        ?58                  ?986                	;0
1458 1065  ASSIGN/38                 $504=     16?8                 987:0               	;0	<<1456
1459 1065  ASSIGN/38                 ?467      16?4                 $504                	;0
1460 1066  GOTO/253                  ?0        ?57                  ?988                	;0
1461 1069  FETCH_STATIC_PROP_R/173   $507=     992:'rRequest'       993:'XUI'           	;0
1462 1069  FETCH_DIM_R/81            $508=     $507                 995:'server_id'     	;0
1463 1069  FETCH_STATIC_PROP_R/173   $506=     989:'rServers'       990:'XUI'           	;0
1464 1069  FETCH_DIM_R/81            $509=     $506                 $508                	;0
1465 1069  INIT_ARRAY/71             #510=     $509                 ?0                  	;4
1466 1069  ASSIGN/38                 ?473      16?33                #510                	;0
1467 1071  FE_RESET_R/77             $512=     16?33                ?1880               	;0
1468 1071  FE_FETCH_R/78             ?0        $512                 16?21               	;1880	>>1880	<<1879
1469 1072  NOP/0                     ?0        ?0                   ?0                  	;1
1470 1072  GOTO/253                  ?0        ?1758                ?996                	;0
1471 1075  FETCH_DIM_R/81            $513=     16?34                997:'clients'       	;0
1472 1075  BOOL_NOT/13               #514=     $513                 ?0                  	;0
1473 1075  JMPZ/43                   ?0        #514                 ?1476               	;0	>>1476
1474 1076  NOP/0                     ?0        ?0                   ?0                  	;1
1475 1076  GOTO/253                  ?0        ?1490                ?998                	;0
1476 1078  INIT_FCALL_BY_NAME/59     ?0        ?0                   999:'number_format' 	;2	<<1473
1477 1078  SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
1478 1078  SEND_VAL_EX/116           ?96       1001:0               ?2                  	;0
1479 1078  DO_FCALL_BY_NAME/131      $515=     ?0                   ?0                  	;0
1480 1078  CONCAT/8                  #516=     1002:'<small>Current connections is <strong>' $515                	;0
1481 1078  CONCAT/8                  #517=     #516                 1003:' / '          	;0
1482 1078  INIT_FCALL_BY_NAME/59     ?0        ?0                   1004:'number_format'	;2
1483 1078  FETCH_DIM_FUNC_ARG/93     $518=     16?21                1006:'total_clients'	;1
1484 1078  SEND_VAR_EX/66            ?80       $518                 ?1                  	;0
1485 1078  SEND_VAL_EX/116           ?96       1007:0               ?2                  	;0
1486 1078  DO_FCALL_BY_NAME/131      $519=     ?0                   ?0                  	;0
1487 1078  CONCAT/8                  #520=     #517                 $519                	;0
1488 1078  CONCAT/8                  #521=     #520                 1008:'</strong>. <span class="text-secondary">Clients will be unable to connect if the limit is reached.</span></small><br/>'	;0
1489 1078  ECHO/40                   ?0        #521                 ?0                  	;0
1490 1080  FETCH_DIM_R/81            $522=     16?34                1009:'input'        	;0
1491 1080  BOOL_NOT/13               #523=     $522                 ?0                  	;0
1492 1080  JMPZ/43                   ?0        #523                 ?1495               	;0	>>1495
1493 1081  NOP/0                     ?0        ?0                   ?0                  	;1
1494 1081  GOTO/253                  ?0        ?1794                ?1010               	;0
1495 1083  NOP/0                     ?0        ?0                   ?0                  	;1	<<1492
1496 1083  GOTO/253                  ?0        ?1778                ?1011               	;0
1497 1086  NOP/0                     ?0        ?0                   ?0                  	;1
1498 1086  GOTO/253                  ?0        ?1879                ?1012               	;0
1499 1090  FETCH_DIM_R/81            $524=     16?34                1013:'cpu'          	;0
1500 1090  BOOL_NOT/13               #525=     $524                 ?0                  	;0
1501 1090  JMPZ/43                   ?0        #525                 ?1504               	;0	>>1504
1502 1091  NOP/0                     ?0        ?0                   ?0                  	;1
1503 1091  GOTO/253                  ?0        ?1517                ?1014               	;0
1504 1093  INIT_FCALL_BY_NAME/59     ?0        ?0                   1015:'ceil'         	;1	<<1501
1505 1093  FETCH_DIM_R/81            $526=     16?36                1017:'cpu'          	;0
1506 1093  IS_SMALLER_OR_EQUAL/20    #527=     $526                 1018:100            	;0
1507 1093  JMPZ/43                   ?0        #527                 ?1511               	;0	>>1511
1508 1093  FETCH_DIM_R/81            $528=     16?36                1019:'cpu'          	;0
1509 1093  QM_ASSIGN/22              #529=     $528                 ?0                  	;0
1510 1093  JMP/42                    ?0        ?1512                ?0                  	;0	>>1512
1511 1093  QM_ASSIGN/22              #529=     1020:100             ?0                  	;0	<<1507
1512 1093  SEND_VAL_EX/116           ?80       #529                 ?1                  	;0	<<1510
1513 1093  DO_FCALL_BY_NAME/131      $530=     ?0                   ?0                  	;0
1514 1093  CONCAT/8                  #531=     1021:'<small>CPU usage is currently <strong>' $530                	;0
1515 1093  CONCAT/8                  #532=     #531                 1022:'%</strong>. <span class="text-secondary">To ensure stability please lower CPU usage or investigate any issues.</span></small><br/>'	;0
1516 1093  ECHO/40                   ?0        #532                 ?0                  	;0
1517 1095  NOP/0                     ?0        ?0                   ?0                  	;1
1518 1095  GOTO/253                  ?0        ?1519                ?1023               	;0
1519 1097  FETCH_DIM_R/81            $533=     16?34                1024:'memory'       	;0
1520 1097  BOOL_NOT/13               #534=     $533                 ?0                  	;0
1521 1097  JMPZ/43                   ?0        #534                 ?1524               	;0	>>1524
1522 1098  NOP/0                     ?0        ?0                   ?0                  	;1
1523 1098  GOTO/253                  ?0        ?1537                ?1025               	;0
1524 1100  INIT_FCALL_BY_NAME/59     ?0        ?0                   1026:'ceil'         	;1	<<1521
1525 1100  FETCH_DIM_R/81            $535=     16?36                1028:'total_mem_used_percent'	;0
1526 1100  IS_SMALLER_OR_EQUAL/20    #536=     $535                 1029:100            	;0
1527 1100  JMPZ/43                   ?0        #536                 ?1531               	;0	>>1531
1528 1100  FETCH_DIM_R/81            $537=     16?36                1030:'total_mem_used_percent'	;0
1529 1100  QM_ASSIGN/22              #538=     $537                 ?0                  	;0
1530 1100  JMP/42                    ?0        ?1532                ?0                  	;0	>>1532
1531 1100  QM_ASSIGN/22              #538=     1031:100             ?0                  	;0	<<1527
1532 1100  SEND_VAL_EX/116           ?80       #538                 ?1                  	;0	<<1530
1533 1100  DO_FCALL_BY_NAME/131      $539=     ?0                   ?0                  	;0
1534 1100  CONCAT/8                  #540=     1032:'<small>Memory usage is currently <strong>' $539                	;0
1535 1100  CONCAT/8                  #541=     #540                 1033:'%</strong>. <span class="text-secondary">Check stream usage in Process Monitor for anomolies if this seems high.</span></small><br/>'	;0
1536 1100  ECHO/40                   ?0        #541                 ?0                  	;0
1537 1102  FETCH_DIM_R/81            $542=     16?34                1034:'disk'         	;0
1538 1102  BOOL_NOT/13               #543=     $542                 ?0                  	;0
1539 1102  JMPZ/43                   ?0        #543                 ?1542               	;0	>>1542
1540 1103  NOP/0                     ?0        ?0                   ?0                  	;1
1541 1103  GOTO/253                  ?0        ?1471                ?1035               	;0
1542 1105  INIT_FCALL_BY_NAME/59     ?0        ?0                   1036:'intval'       	;1	<<1539
1543 1105  FETCH_DIM_R/81            $544=     16?36                1038:'total_disk_space'	;0
1544 1105  FETCH_DIM_R/81            $545=     16?36                1039:'free_disk_space'	;0
1545 1105  SUB/2                     #546=     $544                 $545                	;0
1546 1105  FETCH_DIM_R/81            $547=     16?36                1040:'total_disk_space'	;0
1547 1105  DIV/4                     #548=     #546                 $547                	;0
1548 1105  MUL/3                     #549=     #548                 1041:100            	;0
1549 1105  SEND_VAL_EX/116           ?80       #549                 ?1                  	;0
1550 1105  DO_FCALL_BY_NAME/131      $550=     ?0                   ?0                  	;0
1551 1105  CONCAT/8                  #551=     1042:'<small>Disk usage is currently <strong>' $550                	;0
1552 1105  CONCAT/8                  #552=     #551                 1043:'%</strong>. <span class="text-secondary">If usage hits 100% the server will become unusable.</span></small><br/>'	;0
1553 1105  ECHO/40                   ?0        #552                 ?0                  	;0
1554 1106  NOP/0                     ?0        ?0                   ?0                  	;1
1555 1106  GOTO/253                  ?0        ?1471                ?1044               	;0
1556 1108  INIT_STATIC_METHOD_CALL/113 ?0        1045:'XUI'           1047:'A5D0a3407690F047'	;1
1557 1108  INIT_FCALL_BY_NAME/59     ?0        ?0                   1049:'time'         	;0
1558 1108  DO_FCALL_BY_NAME/131      $553=     ?0                   ?0                  	;0
1559 1108  FETCH_DIM_R/81            $554=     16?21                1051:'last_check_ago'	;0
1560 1108  SUB/2                     #555=     $553                 $554                	;0
1561 1108  SEND_VAL_EX/116           ?80       #555                 ?1                  	;0
1562 1108  DO_FCALL/60               $556=     ?0                   ?0                  	;0
1563 1108  CONCAT/8                  #557=     1052:'<small>Server has been unreachable for <strong>' $556                	;0
1564 1108  CONCAT/8                  #558=     #557                 1053:'</strong></small><br/>'	;0
1565 1108  ECHO/40                   ?0        #558                 ?0                  	;0
1566 1110  NOP/0                     ?0        ?0                   ?0                  	;1
1567 1110  GOTO/253                  ?0        ?1499                ?1054               	;0
1568 1112  FETCH_DIM_R/81            $559=     16?21                1055:'http_broadcast_port'	;0
1569 1112  CONCAT/8                  #560=     1056:'<small>Server cannot be accessed remotely on its IP and Port. Please check that they are correct and ensure nothing is already running on port ' $559                	;0
1570 1112  CONCAT/8                  #561=     #560                 1057:'.</small><br/>'	;0
1571 1112  ECHO/40                   ?0        #561                 ?0                  	;0
1572 1113  NOP/0                     ?0        ?0                   ?0                  	;1
1573 1113  GOTO/253                  ?0        ?1499                ?1058               	;0
1574 1115  ASSIGN_DIM/147            ?524      16?34                1059:'offline'      	;0
1575 1115  OP_DATA/137               ?0        1060:true            ?0                  	;0
1576 1117  FETCH_DIM_R/81            $563=     16?34                1061:'offline'      	;0
1577 1117  JMPNZ_EX/47               #564=     $563                 ?1580               	;0	>>1580
1578 1117  FETCH_DIM_R/81            $565=     16?34                1062:'cpu'          	;0
1579 1117  BOOL/52                   #564=     $565                 ?0                  	;0
1580 1117  JMPNZ_EX/47               #564=     #564                 ?1583               	;0	>>1583	<<1577
1581 1117  FETCH_DIM_R/81            $566=     16?34                1063:'memory'       	;0
1582 1117  BOOL/52                   #564=     $566                 ?0                  	;0
1583 1117  JMPNZ_EX/47               #564=     #564                 ?1586               	;0	>>1586	<<1580
1584 1117  FETCH_DIM_R/81            $567=     16?34                1064:'disk'         	;0
1585 1117  BOOL/52                   #564=     $567                 ?0                  	;0
1586 1117  JMPNZ_EX/47               #564=     #564                 ?1589               	;0	>>1589	<<1583
1587 1117  FETCH_DIM_R/81            $568=     16?34                1065:'clients'      	;0
1588 1117  BOOL/52                   #564=     $568                 ?0                  	;0
1589 1117  JMPNZ_EX/47               #564=     #564                 ?1592               	;0	>>1592	<<1586
1590 1117  FETCH_DIM_R/81            $569=     16?34                1066:'output'       	;0
1591 1117  BOOL/52                   #564=     $569                 ?0                  	;0
1592 1117  JMPNZ_EX/47               #564=     #564                 ?1595               	;0	>>1595	<<1589
1593 1117  FETCH_DIM_R/81            $570=     16?34                1067:'input'        	;0
1594 1117  BOOL/52                   #564=     $570                 ?0                  	;0
1595 1117  JMPNZ_EX/47               #564=     #564                 ?1598               	;0	>>1598	<<1592
1596 1117  FETCH_DIM_R/81            $571=     16?34                1068:'offset'       	;0
1597 1117  BOOL/52                   #564=     $571                 ?0                  	;0
1598 1117  BOOL_NOT/13               #572=     #564                 ?0                  	;0	<<1595
1599 1117  JMPZ/43                   ?0        #572                 ?1602               	;0	>>1602
1600 1118  NOP/0                     ?0        ?0                   ?0                  	;1
1601 1118  GOTO/253                  ?0        ?1693                ?1069               	;0
1602 1120  ASSIGN/38                 ?535      16?5                 1070:true           	;0	<<1599
1603 1121  ECHO/40                   ?0        1071:'                                    <div class="timeline-item">
                                        <i class="timeline-icon bg-dark"></i>
                                        <div class="timeline-item-info">
                                            <a href="server_view?id=' ?0                  	;0
1604 1122  NOP/0                     ?0        ?0                   ?0                  	;1
1605 1122  GOTO/253                  ?0        ?1695                ?1072               	;0
1606 1124  FETCH_DIM_R/81            $574=     16?21                1073:'connections'  	;0
1607 1124  ASSIGN/38                 ?537      16?35                $574                	;0
1608 1126  INIT_FCALL_BY_NAME/59     ?0        ?0                   1074:'json_decode'  	;2
1609 1126  FETCH_DIM_FUNC_ARG/93     $576=     16?21                1076:'watchdog_data'	;1
1610 1126  SEND_VAR_EX/66            ?80       $576                 ?1                  	;0
1611 1126  SEND_VAL_EX/116           ?96       1077:true            ?2                  	;0
1612 1126  DO_FCALL_BY_NAME/131      $577=     ?0                   ?0                  	;0
1613 1126  ASSIGN/38                 ?540      16?36                $577                	;0
1614 1127  ASSIGN/38                 ?541      16?34                1078:array (
  'offline' => false,
  'cpu' => false,
  'memory' => false,
  'disk' => false,
  'clients' => false,
  'output' => false,
  'input' => false,
  'offset' => false,
)	;0
1615 1128  FETCH_DIM_R/81            $580=     16?21                1079:'server_online'	;0
1616 1128  BOOL_NOT/13               #581=     $580                 ?0                  	;0
1617 1128  JMPZ_EX/46                #581=     #581                 ?1620               	;0	>>1620
1618 1128  FETCH_DIM_R/81            $582=     16?21                1080:'enabled'      	;0
1619 1128  BOOL/52                   #581=     $582                 ?0                  	;0
1620 1128  JMPZ_EX/46                #581=     #581                 ?1624               	;0	>>1624	<<1617
1621 1128  FETCH_DIM_R/81            $583=     16?21                1081:'status'       	;0
1622 1128  IS_EQUAL/17               #584=     $583                 1082:1              	;0
1623 1128  BOOL/52                   #581=     #584                 ?0                  	;0
1624 1128  JMPZ/43                   ?0        #581                 ?1627               	;0	>>1627	<<1620
1625 1129  NOP/0                     ?0        ?0                   ?0                  	;1
1626 1129  GOTO/253                  ?0        ?1756                ?1083               	;0
1627 1131  NOP/0                     ?0        ?0                   ?0                  	;1	<<1624
1628 1131  GOTO/253                  ?0        ?1817                ?1084               	;0
1629 1133  FETCH_DIM_R/81            $585=     16?21                1085:'remote_status'	;0
1630 1133  BOOL_NOT/13               #586=     $585                 ?0                  	;0
1631 1133  JMPZ/43                   ?0        #586                 ?1634               	;0	>>1634
1632 1134  NOP/0                     ?0        ?0                   ?0                  	;1
1633 1134  GOTO/253                  ?0        ?1568                ?1086               	;0
1634 1136  FETCH_DIM_R/81            $587=     16?21                1087:'last_check_ago'	;0	<<1631
1635 1136  JMPZ/43                   ?0        $587                 ?1638               	;0	>>1638
1636 1137  NOP/0                     ?0        ?0                   ?0                  	;1
1637 1137  GOTO/253                  ?0        ?1641                ?1088               	;0
1638 1139  ECHO/40                   ?0        1089:'<small>Server has never sent a callback to XUI. Please check the server for install issues.</small><br/>' ?0                  	;0	<<1635
1639 1140  NOP/0                     ?0        ?0                   ?0                  	;1
1640 1140  GOTO/253                  ?0        ?1566                ?1090               	;0
1641 1142  NOP/0                     ?0        ?0                   ?0                  	;1
1642 1142  GOTO/253                  ?0        ?1556                ?1091               	;0
1643 1144  ASSIGN_DIM/147            ?550      16?34                1092:'memory'       	;0
1644 1144  OP_DATA/137               ?0        1093:true            ?0                  	;0
1645 1146  FETCH_DIM_R/81            $589=     16?21                1094:'server_type'  	;0
1646 1146  IS_EQUAL/17               #590=     $589                 1095:0              	;0
1647 1146  JMPZ_EX/46                #590=     #590                 ?1651               	;0	>>1651
1648 1146  FETCH_DIM_R/81            $591=     16?36                1096:'total_disk_space'	;0
1649 1146  IS_SMALLER/19             #592=     1097:0               $591                	;0
1650 1146  BOOL/52                   #590=     #592                 ?0                  	;0
1651 1146  JMPZ_EX/46                #590=     #590                 ?1668               	;0	>>1668	<<1647
1652 1146  INIT_FCALL_BY_NAME/59     ?0        ?0                   1098:'intval'       	;1
1653 1146  FETCH_DIM_R/81            $593=     16?36                1100:'total_disk_space'	;0
1654 1146  FETCH_DIM_R/81            $594=     16?36                1101:'free_disk_space'	;0
1655 1146  SUB/2                     #595=     $593                 $594                	;0
1656 1146  FETCH_DIM_R/81            $596=     16?36                1102:'total_disk_space'	;0
1657 1146  DIV/4                     #597=     #595                 $596                	;0
1658 1146  MUL/3                     #598=     #597                 1103:100            	;0
1659 1146  SEND_VAL_EX/116           ?80       #598                 ?1                  	;0
1660 1146  DO_FCALL_BY_NAME/131      $599=     ?0                   ?0                  	;0
1661 1146  INIT_FCALL_BY_NAME/59     ?0        ?0                   1104:'intval'       	;1
1662 1146  FETCH_STATIC_PROP_FUNC_ARG/177 $600=     1106:'rSettings'     1107:'XUI'          	;1
1663 1146  FETCH_DIM_FUNC_ARG/93     $601=     $600                 1109:'threshold_disk'	;1
1664 1146  SEND_VAR_EX/66            ?80       $601                 ?1                  	;0
1665 1146  DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
1666 1146  IS_SMALLER_OR_EQUAL/20    #603=     $602                 $599                	;0
1667 1146  BOOL/52                   #590=     #603                 ?0                  	;0
1668 1146  BOOL_NOT/13               #604=     #590                 ?0                  	;0	<<1651
1669 1146  JMPZ/43                   ?0        #604                 ?1672               	;0	>>1672
1670 1147  NOP/0                     ?0        ?0                   ?0                  	;1
1671 1147  GOTO/253                  ?0        ?1674                ?1110               	;0
1672 1149  ASSIGN_DIM/147            ?567      16?34                1111:'disk'         	;0	<<1669
1673 1149  OP_DATA/137               ?0        1112:true            ?0                  	;0
1674 1151  NOP/0                     ?0        ?0                   ?0                  	;1
1675 1151  GOTO/253                  ?0        ?1708                ?1113               	;0
1676 1153  FETCH_DIM_R/81            $606=     16?34                1114:'offset'       	;0
1677 1153  BOOL_NOT/13               #607=     $606                 ?0                  	;0
1678 1153  JMPZ/43                   ?0        #607                 ?1681               	;0	>>1681
1679 1154  NOP/0                     ?0        ?0                   ?0                  	;1
1680 1154  GOTO/253                  ?0        ?1692                ?1115               	;0
1681 1156  INIT_FCALL_BY_NAME/59     ?0        ?0                   1116:'number_format'	;2	<<1678
1682 1156  INIT_FCALL_BY_NAME/59     ?0        ?0                   1118:'abs'          	;1
1683 1156  FETCH_DIM_FUNC_ARG/93     $608=     16?21                1120:'time_offset'  	;1
1684 1156  SEND_VAR_EX/66            ?80       $608                 ?1                  	;0
1685 1156  DO_FCALL_BY_NAME/131      $609=     ?0                   ?0                  	;0
1686 1156  SEND_VAR_NO_REF_EX/50     ?80       $609                 ?1                  	;0
1687 1156  SEND_VAL_EX/116           ?96       1121:0               ?2                  	;0
1688 1156  DO_FCALL_BY_NAME/131      $610=     ?0                   ?0                  	;0
1689 1156  CONCAT/8                  #611=     1122:'<small>Server time is offset to main server time by <strong>' $610                	;0
1690 1156  CONCAT/8                  #612=     #611                 1123:'</strong> seconds. <span class="text-secondary">This will affect timeshift, EPG, connections and all sorts of queries.</span></small><br/>'	;0
1691 1156  ECHO/40                   ?0        #612                 ?0                  	;0
1692 1158  ECHO/40                   ?0        1124:'                                            <p><br/></p>
                                        </div>
                                    </div>
                                    ' ?0                  	;0
1693 1160  NOP/0                     ?0        ?0                   ?0                  	;1
1694 1160  GOTO/253                  ?0        ?1497                ?1125               	;0
1695 1162  FETCH_DIM_R/81            $613=     16?21                1126:'id'           	;0
1696 1162  ECHO/40                   ?0        $613                 ?0                  	;0
1697 1163  ECHO/40                   ?0        1127:'" class="text-body font-weight-semibold mb-1 d-block bg"><strong>' ?0                  	;0
1698 1164  FETCH_DIM_R/81            $614=     16?21                1128:'server_name'  	;0
1699 1164  ECHO/40                   ?0        $614                 ?0                  	;0
1700 1165  ECHO/40                   ?0        1129:'</strong></a>
                                            ' ?0                  	;0
1701 1166  FETCH_DIM_R/81            $615=     16?34                1130:'offline'      	;0
1702 1166  BOOL_NOT/13               #616=     $615                 ?0                  	;0
1703 1166  JMPZ/43                   ?0        #616                 ?1706               	;0	>>1706
1704 1167  NOP/0                     ?0        ?0                   ?0                  	;1
1705 1167  GOTO/253                  ?0        ?1499                ?1131               	;0
1706 1169  NOP/0                     ?0        ?0                   ?0                  	;1	<<1703
1707 1169  GOTO/253                  ?0        ?1629                ?1132               	;0
1708 1171  FETCH_DIM_R/81            $617=     16?21                1133:'network_guaranteed_speed'	;0
1709 1171  IS_SMALLER/19             #618=     1134:0               $617                	;0
1710 1171  JMPZ_EX/46                #618=     #618                 ?1723               	;0	>>1723
1711 1171  FETCH_DIM_R/81            $619=     16?36                1135:'bytes_sent'   	;0
1712 1171  DIV/4                     #620=     $619                 1136:125000         	;0
1713 1171  FETCH_DIM_R/81            $621=     16?21                1137:'network_guaranteed_speed'	;0
1714 1171  INIT_FCALL_BY_NAME/59     ?0        ?0                   1138:'intval'       	;1
1715 1171  FETCH_STATIC_PROP_FUNC_ARG/177 $622=     1140:'rSettings'     1141:'XUI'          	;1
1716 1171  FETCH_DIM_FUNC_ARG/93     $623=     $622                 1143:'threshold_network'	;1
1717 1171  SEND_VAR_EX/66            ?80       $623                 ?1                  	;0
1718 1171  DO_FCALL_BY_NAME/131      $624=     ?0                   ?0                  	;0
1719 1171  DIV/4                     #625=     $624                 1144:100            	;0
1720 1171  MUL/3                     #626=     $621                 #625                	;0
1721 1171  IS_SMALLER_OR_EQUAL/20    #627=     #626                 #620                	;0
1722 1171  BOOL/52                   #618=     #627                 ?0                  	;0
1723 1171  BOOL_NOT/13               #628=     #618                 ?0                  	;0	<<1710
1724 1171  JMPZ/43                   ?0        #628                 ?1727               	;0	>>1727
1725 1172  NOP/0                     ?0        ?0                   ?0                  	;1
1726 1172  GOTO/253                  ?0        ?1729                ?1145               	;0
1727 1174  ASSIGN_DIM/147            ?591      16?34                1146:'output'       	;0	<<1724
1728 1174  OP_DATA/137               ?0        1147:true            ?0                  	;0
1729 1176  FETCH_DIM_R/81            $630=     16?21                1148:'network_guaranteed_speed'	;0
1730 1176  IS_SMALLER/19             #631=     1149:0               $630                	;0
1731 1176  JMPZ_EX/46                #631=     #631                 ?1744               	;0	>>1744
1732 1176  FETCH_DIM_R/81            $632=     16?36                1150:'bytes_received'	;0
1733 1176  DIV/4                     #633=     $632                 1151:125000         	;0
1734 1176  FETCH_DIM_R/81            $634=     16?21                1152:'network_guaranteed_speed'	;0
1735 1176  INIT_FCALL_BY_NAME/59     ?0        ?0                   1153:'intval'       	;1
1736 1176  FETCH_STATIC_PROP_FUNC_ARG/177 $635=     1155:'rSettings'     1156:'XUI'          	;1
1737 1176  FETCH_DIM_FUNC_ARG/93     $636=     $635                 1158:'threshold_network'	;1
1738 1176  SEND_VAR_EX/66            ?80       $636                 ?1                  	;0
1739 1176  DO_FCALL_BY_NAME/131      $637=     ?0                   ?0                  	;0
1740 1176  DIV/4                     #638=     $637                 1159:100            	;0
1741 1176  MUL/3                     #639=     $634                 #638                	;0
1742 1176  IS_SMALLER_OR_EQUAL/20    #640=     #639                 #633                	;0
1743 1176  BOOL/52                   #631=     #640                 ?0                  	;0
1744 1176  BOOL_NOT/13               #641=     #631                 ?0                  	;0	<<1731
1745 1176  JMPZ/43                   ?0        #641                 ?1748               	;0	>>1748
1746 1177  NOP/0                     ?0        ?0                   ?0                  	;1
1747 1177  GOTO/253                  ?0        ?1848                ?1160               	;0
1748 1179  ASSIGN_DIM/147            ?604      16?34                1161:'input'        	;0	<<1745
1749 1179  OP_DATA/137               ?0        1162:true            ?0                  	;0
1750 1180  NOP/0                     ?0        ?0                   ?0                  	;1
1751 1180  GOTO/253                  ?0        ?1848                ?1163               	;0
1752 1182  ASSIGN_DIM/147            ?605      16?34                1164:'offset'       	;0
1753 1182  OP_DATA/137               ?0        1165:true            ?0                  	;0
1754 1185  NOP/0                     ?0        ?0                   ?0                  	;1
1755 1185  GOTO/253                  ?0        ?1576                ?1166               	;0
1756 1187  NOP/0                     ?0        ?0                   ?0                  	;1
1757 1187  GOTO/253                  ?0        ?1574                ?1167               	;0
1758 1189  FETCH_STATIC_PROP_R/173   $644=     1168:'rSettings'     1169:'XUI'          	;0
1759 1189  FETCH_DIM_R/81            $645=     $644                 1171:'redis_handler'	;0
1760 1189  JMPZ/43                   ?0        $645                 ?1763               	;0	>>1763
1761 1190  NOP/0                     ?0        ?0                   ?0                  	;1
1762 1190  GOTO/253                  ?0        ?1776                ?1172               	;0
1763 1192  INIT_METHOD_CALL/112      ?0        16?7                 1173:'query'        	;3	<<1760
1764 1192  SEND_VAL_EX/116           ?80       1175:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE (`server_id` = ? OR `proxy_id` = ?) AND `hls_end` = 0;' ?1                  	;0
1765 1192  FETCH_DIM_FUNC_ARG/93     $646=     16?21                1176:'id'           	;2
1766 1192  SEND_VAR_EX/66            ?96       $646                 ?2                  	;0
1767 1192  FETCH_DIM_FUNC_ARG/93     $647=     16?21                1177:'id'           	;3
1768 1192  SEND_VAR_EX/66            ?112      $647                 ?3                  	;0
1769 1192  DO_FCALL/60               ?610      ?0                   ?0                  	;0
1770 1193  INIT_METHOD_CALL/112      ?0        16?7                 1178:'get_row'      	;0
1771 1193  DO_FCALL/60               $649=     ?0                   ?0                  	;0
1772 1193  FETCH_DIM_R/81            $650=     $649                 1180:'count'        	;0
1773 1193  ASSIGN/38                 ?613      16?35                $650                	;0
1774 1194  NOP/0                     ?0        ?0                   ?0                  	;1
1775 1194  GOTO/253                  ?0        ?1608                ?1181               	;0
1776 1196  NOP/0                     ?0        ?0                   ?0                  	;1
1777 1196  GOTO/253                  ?0        ?1606                ?1182               	;0
1778 1198  INIT_FCALL_BY_NAME/59     ?0        ?0                   1183:'number_format'	;2
1779 1198  FETCH_DIM_R/81            $652=     16?36                1185:'bytes_received'	;0
1780 1198  DIV/4                     #653=     $652                 1186:125000         	;0
1781 1198  SEND_VAL_EX/116           ?80       #653                 ?1                  	;0
1782 1198  SEND_VAL_EX/116           ?96       1187:0               ?2                  	;0
1783 1198  DO_FCALL_BY_NAME/131      $654=     ?0                   ?0                  	;0
1784 1198  CONCAT/8                  #655=     1188:'<small>Network input is currently <strong>' $654                	;0
1785 1198  CONCAT/8                  #656=     #655                 1189:' Mbps / '     	;0
1786 1198  INIT_FCALL_BY_NAME/59     ?0        ?0                   1190:'number_format'	;2
1787 1198  FETCH_DIM_FUNC_ARG/93     $657=     16?21                1192:'network_guaranteed_speed'	;1
1788 1198  SEND_VAR_EX/66            ?80       $657                 ?1                  	;0
1789 1198  SEND_VAL_EX/116           ?96       1193:0               ?2                  	;0
1790 1198  DO_FCALL_BY_NAME/131      $658=     ?0                   ?0                  	;0
1791 1198  CONCAT/8                  #659=     #656                 $658                	;0
1792 1198  CONCAT/8                  #660=     #659                 1194:' Mbps</strong>. <span class="text-secondary">Streams will suffer restarts if the limit is reached.</span></small><br/>'	;0
1793 1198  ECHO/40                   ?0        #660                 ?0                  	;0
1794 1200  FETCH_DIM_R/81            $661=     16?34                1195:'output'       	;0
1795 1200  BOOL_NOT/13               #662=     $661                 ?0                  	;0
1796 1200  JMPZ/43                   ?0        #662                 ?1799               	;0	>>1799
1797 1201  NOP/0                     ?0        ?0                   ?0                  	;1
1798 1201  GOTO/253                  ?0        ?1815                ?1196               	;0
1799 1203  INIT_FCALL_BY_NAME/59     ?0        ?0                   1197:'number_format'	;2	<<1796
1800 1203  FETCH_DIM_R/81            $663=     16?36                1199:'bytes_sent'   	;0
1801 1203  DIV/4                     #664=     $663                 1200:125000         	;0
1802 1203  SEND_VAL_EX/116           ?80       #664                 ?1                  	;0
1803 1203  SEND_VAL_EX/116           ?96       1201:0               ?2                  	;0
1804 1203  DO_FCALL_BY_NAME/131      $665=     ?0                   ?0                  	;0
1805 1203  CONCAT/8                  #666=     1202:'<small>Network output is currently <strong>' $665                	;0
1806 1203  CONCAT/8                  #667=     #666                 1203:' Mbps / '     	;0
1807 1203  INIT_FCALL_BY_NAME/59     ?0        ?0                   1204:'number_format'	;2
1808 1203  FETCH_DIM_FUNC_ARG/93     $668=     16?21                1206:'network_guaranteed_speed'	;1
1809 1203  SEND_VAR_EX/66            ?80       $668                 ?1                  	;0
1810 1203  SEND_VAL_EX/116           ?96       1207:0               ?2                  	;0
1811 1203  DO_FCALL_BY_NAME/131      $669=     ?0                   ?0                  	;0
1812 1203  CONCAT/8                  #670=     #667                 $669                	;0
1813 1203  CONCAT/8                  #671=     #670                 1208:' Mbps</strong>. <span class="text-secondary">Clients will be unable to connect if the limit is reached.</span></small><br/>'	;0
1814 1203  ECHO/40                   ?0        #671                 ?0                  	;0
1815 1205  NOP/0                     ?0        ?0                   ?0                  	;1
1816 1205  GOTO/253                  ?0        ?1676                ?1209               	;0
1817 1207  FETCH_DIM_R/81            $672=     16?21                1210:'server_online'	;0
1818 1207  BOOL_NOT/13               #673=     $672                 ?0                  	;0
1819 1207  JMPZ/43                   ?0        #673                 ?1822               	;0	>>1822
1820 1208  NOP/0                     ?0        ?0                   ?0                  	;1
1821 1208  GOTO/253                  ?0        ?1754                ?1211               	;0
1822 1210  FETCH_DIM_R/81            $674=     16?36                1212:'cpu'          	;0	<<1819
1823 1210  INIT_FCALL_BY_NAME/59     ?0        ?0                   1213:'intval'       	;1
1824 1210  FETCH_STATIC_PROP_FUNC_ARG/177 $675=     1215:'rSettings'     1216:'XUI'          	;1
1825 1210  FETCH_DIM_FUNC_ARG/93     $676=     $675                 1218:'threshold_cpu'	;1
1826 1210  SEND_VAR_EX/66            ?80       $676                 ?1                  	;0
1827 1210  DO_FCALL_BY_NAME/131      $677=     ?0                   ?0                  	;0
1828 1210  IS_SMALLER_OR_EQUAL/20    #678=     $677                 $674                	;0
1829 1210  BOOL_NOT/13               #679=     #678                 ?0                  	;0
1830 1210  JMPZ/43                   ?0        #679                 ?1833               	;0	>>1833
1831 1211  NOP/0                     ?0        ?0                   ?0                  	;1
1832 1211  GOTO/253                  ?0        ?1835                ?1219               	;0
1833 1213  ASSIGN_DIM/147            ?642      16?34                1220:'cpu'          	;0	<<1830
1834 1213  OP_DATA/137               ?0        1221:true            ?0                  	;0
1835 1215  FETCH_DIM_R/81            $681=     16?36                1222:'total_mem_used_percent'	;0
1836 1215  INIT_FCALL_BY_NAME/59     ?0        ?0                   1223:'intval'       	;1
1837 1215  FETCH_STATIC_PROP_FUNC_ARG/177 $682=     1225:'rSettings'     1226:'XUI'          	;1
1838 1215  FETCH_DIM_FUNC_ARG/93     $683=     $682                 1228:'threshold_mem'	;1
1839 1215  SEND_VAR_EX/66            ?80       $683                 ?1                  	;0
1840 1215  DO_FCALL_BY_NAME/131      $684=     ?0                   ?0                  	;0
1841 1215  IS_SMALLER/19             #685=     $684                 $681                	;0
1842 1215  BOOL_NOT/13               #686=     #685                 ?0                  	;0
1843 1215  JMPZ/43                   ?0        #686                 ?1846               	;0	>>1846
1844 1216  NOP/0                     ?0        ?0                   ?0                  	;1
1845 1216  GOTO/253                  ?0        ?1645                ?1229               	;0
1846 1218  NOP/0                     ?0        ?0                   ?0                  	;1	<<1843
1847 1218  GOTO/253                  ?0        ?1643                ?1230               	;0
1848 1221  FETCH_DIM_R/81            $687=     16?21                1231:'total_clients'	;0
1849 1221  IS_SMALLER/19             #688=     1232:0               $687                	;0
1850 1221  JMPZ_EX/46                #688=     #688                 ?1861               	;0	>>1861
1851 1221  FETCH_DIM_R/81            $689=     16?21                1233:'total_clients'	;0
1852 1221  INIT_FCALL_BY_NAME/59     ?0        ?0                   1234:'intval'       	;1
1853 1221  FETCH_STATIC_PROP_FUNC_ARG/177 $690=     1236:'rSettings'     1237:'XUI'          	;1
1854 1221  FETCH_DIM_FUNC_ARG/93     $691=     $690                 1239:'threshold_clients'	;1
1855 1221  SEND_VAR_EX/66            ?80       $691                 ?1                  	;0
1856 1221  DO_FCALL_BY_NAME/131      $692=     ?0                   ?0                  	;0
1857 1221  DIV/4                     #693=     $692                 1240:100            	;0
1858 1221  MUL/3                     #694=     $689                 #693                	;0
1859 1221  IS_SMALLER_OR_EQUAL/20    #695=     #694                 16?35               	;0
1860 1221  BOOL/52                   #688=     #695                 ?0                  	;0
1861 1221  BOOL_NOT/13               #696=     #688                 ?0                  	;0	<<1850
1862 1221  JMPZ/43                   ?0        #696                 ?1865               	;0	>>1865
1863 1222  NOP/0                     ?0        ?0                   ?0                  	;1
1864 1222  GOTO/253                  ?0        ?1867                ?1241               	;0
1865 1224  ASSIGN_DIM/147            ?659      16?34                1242:'clients'      	;0	<<1862
1866 1224  OP_DATA/137               ?0        1243:true            ?0                  	;0
1867 1226  FETCH_DIM_R/81            $698=     16?21                1244:'time_offset'  	;0
1868 1226  IS_SMALLER/19             #699=     1245:5               $698                	;0
1869 1226  JMPNZ_EX/47               #699=     #699                 ?1873               	;0	>>1873
1870 1226  FETCH_DIM_R/81            $700=     16?21                1246:'time_offset'  	;0
1871 1226  IS_SMALLER/19             #701=     $700                 1247:-5             	;0
1872 1226  BOOL/52                   #699=     #701                 ?0                  	;0
1873 1226  BOOL_NOT/13               #702=     #699                 ?0                  	;0	<<1869
1874 1226  JMPZ/43                   ?0        #702                 ?1877               	;0	>>1877
1875 1227  NOP/0                     ?0        ?0                   ?0                  	;1
1876 1227  GOTO/253                  ?0        ?1754                ?1248               	;0
1877 1229  NOP/0                     ?0        ?0                   ?0                  	;1	<<1874
1878 1229  GOTO/253                  ?0        ?1752                ?1249               	;0
1879 1230  JMP/42                    ?0        ?1468                ?0                  	;0	>>1468
1880 1230  FE_FREE/127               ?0        $512                 ?0                  	;0	<<1467
1881 1233  GOTO/253                  ?0        ?128                 ?1250               	;0
1882 1235  INIT_FCALL_BY_NAME/59     ?0        ?0                   1251:'e589A4BF54a2Dad1'	;2
1883 1235  SEND_VAL_EX/116           ?80       1253:'adv'           ?1                  	;0
1884 1235  SEND_VAL_EX/116           ?96       1254:'live_connections' ?2                  	;0
1885 1235  DO_FCALL_BY_NAME/131      $703=     ?0                   ?0                  	;0
1886 1235  BOOL_NOT/13               #704=     $703                 ?0                  	;0
1887 1235  JMPZ/43                   ?0        #704                 ?1889               	;0	>>1889
1888 1236  GOTO/253                  ?0        ?1890                ?1255               	;0
1889 1238  ECHO/40                   ?0        1256:'<a href="./live_connections">' ?0                  	;0	<<1887
1890 1240  ECHO/40                   ?0        1257:'                <div class="card cta-box ' ?0                  	;0
1891 1241  FETCH_DIM_R/81            $705=     16?3                 1258:'theme'        	;0
1892 1241  IS_EQUAL/17               #706=     $705                 1259:0              	;0
1893 1241  BOOL_NOT/13               #707=     #706                 ?0                  	;0
1894 1241  JMPZ/43                   ?0        #707                 ?1896               	;0	>>1896
1895 1242  GOTO/253                  ?0        ?1425                ?1260               	;0
1896 1244  GOTO/253                  ?0        ?1424                ?1261               	;0	<<1894
1897 1247  ECHO/40                   ?0        1262:'        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right"' ?0                  	;0
1898 1248  BOOL_NOT/13               #708=     16?12                ?0                  	;0
1899 1248  JMPZ/43                   ?0        #708                 ?1901               	;0	>>1901
1900 1249  GOTO/253                  ?0        ?1902                ?1263               	;0
1901 1251  ECHO/40                   ?0        1264:' style="width: 100%"' ?0                  	;0	<<1899
1902 1253  GOTO/253                  ?0        ?1303                ?1265               	;0
1903 1255  ECHO/40                   ?0        1266:'                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                ' ?0                  	;0
1904 1256  INIT_FCALL_BY_NAME/59     ?0        ?0                   1267:'E589A4BF54A2DaD1'	;2
1905 1256  SEND_VAL_EX/116           ?80       1269:'adv'           ?1                  	;0
1906 1256  SEND_VAL_EX/116           ?96       1270:'live_connections' ?2                  	;0
1907 1256  DO_FCALL_BY_NAME/131      $709=     ?0                   ?0                  	;0
1908 1256  BOOL_NOT/13               #710=     $709                 ?0                  	;0
1909 1256  JMPZ/43                   ?0        #710                 ?1911               	;0	>>1911
1910 1257  GOTO/253                  ?0        ?1912                ?1271               	;0
1911 1259  ECHO/40                   ?0        1272:'<a href="./live_connections">' ?0                  	;0	<<1909
1912 1261  ECHO/40                   ?0        1273:'                <div class="card cta-box ' ?0                  	;0
1913 1262  GOTO/253                  ?0        ?1932                ?1274               	;0
1914 1265  ECHO/40                   ?0        1275:'                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title"><strong>XUI Beta Programme</strong></h3>
                                ' ?0                  	;0
1915 1267  ECHO/40                   ?0        1276:'                                <p class="text-light mt-2 ">' ?0                  	;0
1916 1268  ECHO/40                   ?0        16?9                 ?0                  	;0
1917 1269  GOTO/253                  ?0        ?286                 ?1277               	;0
1918 1274  FETCH_STATIC_PROP_IS/176  $711=     1278:'rRequest'      1279:'XUI'          	;0
1919 1274  ISSET_ISEMPTY_DIM_OBJ/115 #712=     $711                 1281:'server_id'    	;33554432
1920 1274  JMPZ/43                   ?0        #712                 ?1922               	;0	>>1922
1921 1275  GOTO/253                  ?0        ?133                 ?1282               	;0
1922 1277  ASSIGN/38                 ?675      16?13                1283:0              	;0	<<1920
1923 1278  GOTO/253                  ?0        ?314                 ?1284               	;0
1924 1280  ECHO/40                   ?0        1285:' text-white">
                    <div class="card-body offline-streams">
                        <div class="media align-items-center">
                            <div class="col-3">
                                <div class="avatar-sm bg-light">
                                    <i class="fe-alert-triangle avatar-title font-22 ' ?0                  	;0
1925 1281  FETCH_DIM_R/81            $714=     16?3                 1286:'theme'        	;0
1926 1281  IS_EQUAL/17               #715=     $714                 1287:1              	;0
1927 1281  JMPZ/43                   ?0        #715                 ?1929               	;0	>>1929
1928 1282  GOTO/253                  ?0        ?1931                ?1288               	;0
1929 1284  ECHO/40                   ?0        1289:'text-pink'     ?0                  	;0	<<1927
1930 1285  GOTO/253                  ?0        ?304                 ?1290               	;0
1931 1287  GOTO/253                  ?0        ?303                 ?1291               	;0
1932 1289  FETCH_DIM_R/81            $716=     16?3                 1292:'theme'        	;0
1933 1289  IS_EQUAL/17               #717=     $716                 1293:0              	;0
1934 1289  BOOL_NOT/13               #718=     #717                 ?0                  	;0
1935 1289  JMPZ/43                   ?0        #718                 ?1937               	;0	>>1937
1936 1290  GOTO/253                  ?0        ?1938                ?1294               	;0
1937 1292  ECHO/40                   ?0        1295:'bg-purple'     ?0                  	;0	<<1935
1938 1294  ECHO/40                   ?0        1296:' text-white">
                    <div class="card-body active-connections">
                        <div class="media align-items-center">
                            <div class="col-3">
                                <div class="avatar-sm bg-light">
                                    <i class="fe-zap avatar-title font-22 ' ?0                  	;0
1939 1295  FETCH_DIM_R/81            $719=     16?3                 1297:'theme'        	;0
1940 1295  IS_EQUAL/17               #720=     $719                 1298:1              	;0
1941 1295  JMPZ/43                   ?0        #720                 ?1943               	;0	>>1943
1942 1296  GOTO/253                  ?0        ?1449                ?1299               	;0
1943 1298  GOTO/253                  ?0        ?1447                ?1300               	;0	<<1941
1944 1300  INCLUDE_OR_EVAL/73        ?683      1301:'session.php'   ?0                  	;2	<<0
1945 1301  INCLUDE_OR_EVAL/73        ?684      1302:'functions.php' ?0                  	;2
1946 1302  FETCH_DIM_R/81            $723=     16?3                 1303:'theme'        	;0
1947 1302  FETCH_DIM_R/81            $724=     16?37                $723                	;0
1948 1302  FETCH_DIM_R/81            $725=     $724                 1304:'dark'         	;0
1949 1302  JMPZ/43                   ?0        $725                 ?1951               	;0	>>1951
1950 1303  GOTO/253                  ?0        ?1219                ?1305               	;0
1951 1305  ASSIGN/38                 ?688      16?24                1306:array (
  1 => 
  array (
    0 => 'purple',
    1 => '#675db7',
    2 => '#675db7',
  ),
  2 => 
  array (
    0 => 'success',
    1 => '#23b397',
    2 => '#23b397',
  ),
  3 => 
  array (
    0 => 'pink',
    1 => '#e36498',
    2 => '#e36498',
  ),
  4 => 
  array (
    0 => 'info',
    1 => '#56C3D6',
    2 => '#56C3D6',
  ),
)	;0	<<1949
1952 1306  ASSIGN/38                 ?689      16?18                1307:array (
  0 => 
  array (
    0 => '#23b397',
    1 => 'bg-success',
  ),
  1 => 
  array (
    0 => '#56c2d6',
    1 => 'bg-info',
  ),
  2 => 
  array (
    0 => '#5089de',
    1 => 'bg-primary',
  ),
  3 => 
  array (
    0 => '#675db7',
    1 => 'bg-purple',
  ),
  4 => 
  array (
    0 => '#e36498',
    1 => 'bg-pink',
  ),
  5 => 
  array (
    0 => '#98a6ad',
    1 => 'bg-secondary',
  ),
)	;0
1953 1307  GOTO/253                  ?0        ?1218                ?1308               	;0
1954 1309  ECHO/40                   ?0        1309:'<a href="./streams?filter=1">' ?0                  	;0
1955 1311  ECHO/40                   ?0        1310:'                <div class="card cta-box ' ?0                  	;0
1956 1312  FETCH_DIM_R/81            $728=     16?3                 1311:'theme'        	;0
1957 1312  IS_EQUAL/17               #729=     $728                 1312:0              	;0
1958 1312  BOOL_NOT/13               #730=     #729                 ?0                  	;0
1959 1312  JMPZ/43                   ?0        #730                 ?1961               	;0	>>1961
1960 1313  GOTO/253                  ?0        ?12                  ?1313               	;0
1961 1315  ECHO/40                   ?0        1314:'bg-info'       ?0                  	;0	<<1959
1962 1316  GOTO/253                  ?0        ?12                  ?1315               	;0
1963 1318  INCLUDE_OR_EVAL/73        ?693      1316:'footer.php'    ?0                  	;2
1964 1319  NOP/0                     ?0        1317:1               ?0                  	;4294967295
*/

?>