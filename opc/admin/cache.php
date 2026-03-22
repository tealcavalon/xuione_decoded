<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?216                 ?0                  	;0	>>216
1   5    ECHO/40                   ?0        1:'</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                ' ?0                  	;0
2   7    ECHO/40                   ?0        2:'											</div>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:30px;">
                                            ' ?0                  	;0
3   8    FETCH_DIM_R/81            $23=      16?0                 3:'enable_cache'    	;0
4   8    JMPZ/43                   ?0        $23                  ?6                  	;0	>>6
5   9    GOTO/253                  ?0        ?203                 ?4                  	;0
6   11   ECHO/40                   ?0        5:'                                            <li class="list-inline-item">
                                                <button id="enable_cache" onClick="api(\'enable_cache\')" class="btn btn-success" type="button">Enable Cache</button>
                                            </li>
                                            ' ?0                  	;0	<<4
7   12   GOTO/253                  ?0        ?202                 ?6                  	;0
8   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'count'           	;1
9   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'glob'            	;1
10  14   FETCH_CONSTANT/99         #24=      ?0                   11:'STREAMS_TMP_PATH'	;16
11  14   CONCAT/8                  #25=      #24                  14:'stream_*'       	;0
12  14   SEND_VAL_EX/116           ?80       #25                  ?1                  	;0
13  14   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
14  14   SEND_VAR_NO_REF_EX/50     ?80       $26                  ?1                  	;0
15  14   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
16  14   ASSIGN/38                 ?5        16?1                 $27                 	;0
17  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'count'          	;1
18  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'glob'           	;1
19  15   FETCH_CONSTANT/99         #29=      ?0                   19:'SERIES_TMP_PATH'	;16
20  15   CONCAT/8                  #30=      #29                  22:'series_*'       	;0
21  15   SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
22  15   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
23  15   SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
24  15   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
25  15   SUB/2                     #33=      $32                  23:2                	;0
26  15   ASSIGN/38                 ?11       16?2                 #33                 	;0
27  16   IS_SMALLER/19             #35=      16?2                 24:0                	;0
28  16   BOOL_NOT/13               #36=      #35                  ?0                  	;0
29  16   JMPZ/43                   ?0        #36                  ?31                 	;0	>>31
30  17   GOTO/253                  ?0        ?32                  ?25                 	;0
31  19   ASSIGN/38                 ?14       16?2                 26:0                	;0	<<29
32  21   GOTO/253                  ?0        ?74                  ?27                 	;0
33  24   ASSIGN/38                 ?15       16?3                 28:100              	;0
34  25   ASSIGN/38                 ?16       16?4                 29:'pink'           	;0
35  26   ASSIGN/38                 ?17       16?5                 30:'Maximum'        	;0
36  27   ASSIGN/38                 ?18       16?6                 31:'You\'re using both Caching and Redis Connection Handler, your service is optimised for <strong>maximum performance</strong>!'	;0
37  28   GOTO/253                  ?0        ?118                 ?32                 	;0
38  31   ECHO/40                   ?0        33:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">Streams</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">' ?0                  	;0
39  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'number_format'  	;2
40  32   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
41  32   SEND_VAL_EX/116           ?96       36:0                 ?2                  	;0
42  32   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
43  32   ECHO/40                   ?0        $42                  ?0                  	;0
44  33   ECHO/40                   ?0        37:' / '             ?0                  	;0
45  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'number_format'  	;2
46  34   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
47  34   SEND_VAL_EX/116           ?96       40:0                 ?2                  	;0
48  34   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
49  34   ECHO/40                   ?0        $43                  ?0                  	;0
50  35   GOTO/253                  ?0        ?309                 ?41                 	;0
51  37   ASSIGN/38                 ?21       16?6                 42:'You\'re using neither Caching or Redis Connection Handler, the server will perform poorly compared to having either enabled.'	;0
52  38   GOTO/253                  ?0        ?339                 ?43                 	;0
53  40   ASSIGN/38                 ?22       16?5                 44:'Good'           	;0
54  41   ASSIGN/38                 ?23       16?4                 45:'info'           	;0
55  42   GOTO/253                  ?0        ?272                 ?46                 	;0
56  44   FETCH_IS/89               $47=      47:'_SERVER'         ?0                  	;0
57  44   ISSET_ISEMPTY_DIM_OBJ/115 #48=      $47                  48:'HTTP_X_REQUESTED_WITH'	;16777216
58  44   BOOL_NOT/13               #49=      #48                  ?0                  	;0
59  44   JMPZ_EX/46                #49=      #49                  ?67                 	;0	>>67
60  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'strtolower'     	;1
61  44   FETCH_FUNC_ARG/92         $50=      51:'_SERVER'         ?0                  	;1
62  44   FETCH_DIM_FUNC_ARG/93     $51=      $50                  52:'HTTP_X_REQUESTED_WITH'	;1
63  44   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
64  44   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
65  44   IS_EQUAL/17               #53=      $52                  53:'xmlhttprequest' 	;0
66  44   BOOL/52                   #49=      #53                  ?0                  	;0
67  44   BOOL_NOT/13               #54=      #49                  ?0                  	;0	<<59
68  44   JMPZ/43                   ?0        #54                  ?70                 	;0	>>70
69  45   GOTO/253                  ?0        ?71                  ?54                 	;0
70  47   ECHO/40                   ?0        55:' style="display: none;"' ?0                  	;0	<<68
71  49   ECHO/40                   ?0        56:'>
    <div class="container-fluid">
		<form action="#" method="POST">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
                        <div class="page-title-right">
                            ' ?0                  	;0
72  50   INCLUDE_OR_EVAL/73        ?32       57:'topbar.php'      ?0                  	;2
73  51   GOTO/253                  ?0        ?149                 ?58                 	;0
74  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'intval'         	;1
75  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'disk_free_space'	;1
76  53   FETCH_CONSTANT/99         #56=      ?0                   63:'XUI_HOME'       	;16
77  53   CONCAT/8                  #57=      #56                  66:'tmp'            	;0
78  53   SEND_VAL_EX/116           ?80       #57                  ?1                  	;0
79  53   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
80  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'disk_total_space'	;1
81  53   FETCH_CONSTANT/99         #59=      ?0                   69:'XUI_HOME'       	;16
82  53   CONCAT/8                  #60=      #59                  72:'tmp'            	;0
83  53   SEND_VAL_EX/116           ?80       #60                  ?1                  	;0
84  53   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
85  53   DIV/4                     #62=      $58                  $61                 	;0
86  53   MUL/3                     #63=      #62                  73:100              	;0
87  53   SEND_VAL_EX/116           ?80       #63                  ?1                  	;0
88  53   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
89  53   SUB/2                     #65=      74:100               $64                 	;0
90  53   ASSIGN/38                 ?43       16?8                 #65                 	;0
91  54   IS_SMALLER_OR_EQUAL/20    #67=      75:90                16?8                	;0
92  54   BOOL_NOT/13               #68=      #67                  ?0                  	;0
93  54   JMPZ/43                   ?0        #68                  ?95                 	;0	>>95
94  55   GOTO/253                  ?0        ?206                 ?76                 	;0
95  57   ECHO/40                   ?0        77:'                                                <div class="alert alert-danger mb-4" role="alert">
                                                    Your cache tmpfs mount is <strong>' ?0                  	;0	<<93
96  58   ECHO/40                   ?0        16?8                 ?0                  	;0
97  59   ECHO/40                   ?0        78:'% full</strong>! This can stop new lines and streams from caching and when the mount is completely full cache will not work correctly.<br/><br/><strong>You should increase the size of your tmpfs size in /etc/fstab and reboot.</strong>
                                                </div>
                                                ' ?0                  	;0
98  60   GOTO/253                  ?0        ?206                 ?79                 	;0
99  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'date'           	;2
100 62   FETCH_DIM_FUNC_ARG/93     $69=      16?0                 82:'datetime_format'	;1
101 62   SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
102 62   FETCH_DIM_FUNC_ARG/93     $70=      16?0                 83:'last_cache'     	;2
103 62   SEND_VAR_EX/66            ?96       $70                  ?2                  	;0
104 62   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
105 62   ECHO/40                   ?0        $71                  ?0                  	;0
106 63   ECHO/40                   ?0        84:'</strong>. If it takes longer to run a cron than the time between executions, you will have issues as the caching will be cut off before completion.<br/><br/>The default is to run the cron every 5 minutes, but when your Streams and Lines tables grow larger it can take a fair amount of time to grab and cache this data. You can change the time to achieve a better balance between performance and data accuracy.<br/><br/><strong>Please ensure the cron format is correct, otherwise it won\'t run.</strong></p>
                                                <div class="form-group row mb-4">
                                                    <table class="table table-striped table-borderless mb-0" id="datatable-cache">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">Minute</td>
                                                                <td style="width:250px;"><input type="text" class="form-control text-center" id="minute" name="minute" value="' ?0                  	;0
107 64   ECHO/40                   ?0        16?9                 ?0                  	;0
108 65   ECHO/40                   ?0        85:'"></td>
                                                                <td class="text-center">Hour</td>
                                                                <td style="width:250px;"><input type="text" class="form-control text-center" id="hour" name="hour" value="' ?0                  	;0
109 66   ECHO/40                   ?0        16?10                ?0                  	;0
110 67   GOTO/253                  ?0        ?323                 ?86                 	;0
111 69   ECHO/40                   ?0        87:'                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                ' ?0                  	;0
112 71   ECHO/40                   ?0        88:'											</div>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:30px;">
                                            ' ?0                  	;0
113 72   FETCH_DIM_R/81            $72=      16?0                 89:'redis_handler'  	;0
114 72   JMPZ/43                   ?0        $72                  ?116                	;0	>>116
115 73   GOTO/253                  ?0        ?359                 ?90                 	;0
116 75   ECHO/40                   ?0        91:'                                            <li class="list-inline-item">
                                                <button id="enable_handler" onClick="api(\'enable_handler\')" class="btn btn-success" type="button">Enable Handler</button>
                                            </li>
                                            ' ?0                  	;0	<<114
117 76   GOTO/253                  ?0        ?358                 ?92                 	;0
118 79   ECHO/40                   ?0        93:'							<h5 class="card-title">' ?0                  	;0
119 80   ECHO/40                   ?0        16?5                 ?0                  	;0
120 81   ECHO/40                   ?0        94:' Performance</h5>
							<p>' ?0                  	;0
121 82   ECHO/40                   ?0        16?6                 ?0                  	;0
122 83   GOTO/253                  ?0        ?123                 ?95                 	;0
123 85   ECHO/40                   ?0        96:'</p>
							<div class="progress mb-2">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-' ?0                  	;0
124 86   ECHO/40                   ?0        16?4                 ?0                  	;0
125 87   ECHO/40                   ?0        97:'" role="progressbar" aria-valuenow="' ?0                  	;0
126 88   ECHO/40                   ?0        16?3                 ?0                  	;0
127 89   ECHO/40                   ?0        98:'" aria-valuemin="0" aria-valuemax="100" style="width: ' ?0                  	;0
128 90   GOTO/253                  ?0        ?362                 ?99                 	;0
129 92   FETCH_STATIC_PROP_R/173   $73=      100:'rSettings'      101:'XUI'           	;0
130 92   FETCH_DIM_R/81            $74=      $73                  103:'enable_cache'  	;0
131 92   JMPZ_EX/46                #75=      $74                  ?135                	;0	>>135
132 92   FETCH_STATIC_PROP_R/173   $76=      104:'rSettings'      105:'XUI'           	;0
133 92   FETCH_DIM_R/81            $77=      $76                  107:'redis_handler' 	;0
134 92   BOOL/52                   #75=      $77                  ?0                  	;0
135 92   JMPZ/43                   ?0        #75                  ?137                	;0	>>137	<<131
136 93   GOTO/253                  ?0        ?33                  ?108                	;0
137 95   FETCH_STATIC_PROP_R/173   $78=      109:'rSettings'      110:'XUI'           	;0	<<135
138 95   FETCH_DIM_R/81            $79=      $78                  112:'enable_cache'  	;0
139 95   JMPNZ_EX/47               #80=      $79                  ?143                	;0	>>143
140 95   FETCH_STATIC_PROP_R/173   $81=      113:'rSettings'      114:'XUI'           	;0
141 95   FETCH_DIM_R/81            $82=      $81                  116:'redis_handler' 	;0
142 95   BOOL/52                   #80=      $82                  ?0                  	;0
143 95   JMPZ/43                   ?0        #80                  ?145                	;0	>>145	<<139
144 96   GOTO/253                  ?0        ?53                  ?117                	;0
145 98   ASSIGN/38                 ?60       16?3                 118:25              	;0	<<143
146 99   ASSIGN/38                 ?61       16?5                 119:'Poor'          	;0
147 100  ASSIGN/38                 ?62       16?4                 120:'secondary'     	;0
148 101  GOTO/253                  ?0        ?51                  ?121                	;0
149 103  ECHO/40                   ?0        122:'                        </div>
						<h4 class="page-title">Cache & Redis Settings</h4>
					</div>
				</div>
			</div>     
			<div class="row">
				<div class="col-xl-12">
					' ?0                  	;0
150 104  ISSET_ISEMPTY_CV/197      #86=      16?11                ?0                  	;33554432
151 104  JMPZ_EX/46                #86=      #86                  ?155                	;0	>>155
152 104  FETCH_CONSTANT/99         #87=      ?0                   123:'STATUS_SUCCESS'	;16
153 104  IS_EQUAL/17               #88=      16?11                #87                 	;0
154 104  BOOL/52                   #86=      #88                  ?0                  	;0
155 104  BOOL_NOT/13               #89=      #86                  ?0                  	;0	<<151
156 104  JMPZ/43                   ?0        #89                  ?158                	;0	>>158
157 105  GOTO/253                  ?0        ?159                 ?126                	;0
158 107  ECHO/40                   ?0        127:'					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						Cache & Redis settings sucessfully updated!
					</div>
                    ' ?0                  	;0	<<156
159 109  ECHO/40                   ?0        128:'					<div class="card">
						<div class="card-body">
						' ?0                  	;0
160 110  GOTO/253                  ?0        ?129                 ?129                	;0
161 113  INIT_METHOD_CALL/112      ?0        16?12                130:'query'         	;1
162 113  SEND_VAL_EX/116           ?80       132:'SELECT `time` FROM `crontab` WHERE `filename` = \'cache_engine.php\';' ?1                  	;0
163 113  DO_FCALL/60               ?67       ?0                   ?0                  	;0
164 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'explode'       	;2
165 114  SEND_VAL_EX/116           ?80       135:' '              ?1                  	;0
166 114  INIT_METHOD_CALL/112      ?0        16?12                136:'get_row'       	;0
167 114  DO_FCALL/60               $91=      ?0                   ?0                  	;0
168 114  SEPARATE/156              $91=      $91                  ?0                  	;0
169 114  FETCH_DIM_FUNC_ARG/93     $92=      $91                  138:'time'          	;2
170 114  SEND_VAR_EX/66            ?96       $92                  ?2                  	;0
171 114  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
172 114  FETCH_LIST/98             $94=      $93                  139:0               	;0
173 114  ASSIGN/38                 ?72       16?9                 $94                 	;0
174 114  FETCH_LIST/98             $96=      $93                  140:1               	;0
175 114  ASSIGN/38                 ?74       16?10                $96                 	;0
176 114  FETCH_LIST/98             $98=      $93                  141:2               	;0
177 114  ASSIGN/38                 ?76       16?13                $98                 	;0
178 114  FETCH_LIST/98             $100=     $93                  142:3               	;0
179 114  ASSIGN/38                 ?78       16?14                $100                	;0
180 114  FETCH_LIST/98             $102=     $93                  143:4               	;0
181 114  ASSIGN/38                 ?80       16?15                $102                	;0
182 114  FREE/70                   ?0        $93                  ?0                  	;0
183 115  INIT_METHOD_CALL/112      ?0        16?12                144:'query'         	;1
184 115  SEND_VAL_EX/116           ?80       146:'SELECT `id` FROM `lines`;' ?1                  	;0
185 115  DO_FCALL/60               ?81       ?0                   ?0                  	;0
186 116  FETCH_OBJ_R/82            $105=     16?12                147:'result'        	;0
187 116  INIT_METHOD_CALL/112      ?0        $105                 148:'rowCount'      	;0
188 116  DO_FCALL/60               $106=     ?0                   ?0                  	;0
189 116  ASSIGN/38                 ?84       16?16                $106                	;0
190 117  GOTO/253                  ?0        ?243                 ?150                	;0
191 119  INIT_STATIC_METHOD_CALL/113 ?0        154:'XUI'            156:'aC49B56DBe10e52c'	;1
192 119  SEND_VAL_EX/116           ?80       158:true             ?1                  	;0
193 119  DO_FCALL/60               $109=     ?0                   ?0                  	;0
194 119  FETCH_STATIC_PROP_W/174   $108=     151:'rSettings'      152:'XUI'           	;0
195 119  ASSIGN/38                 ?87       $108                 $109                	;0
196 120  FETCH_STATIC_PROP_R/173   $111=     159:'rSettings'      160:'XUI'           	;0
197 120  ASSIGN/38                 ?89       16?0                 $111                	;0
198 121  ASSIGN/38                 ?90       16?17                162:'Cache & Redis Settings'	;0
199 122  INCLUDE_OR_EVAL/73        ?91       163:'header.php'     ?0                  	;2
200 123  ECHO/40                   ?0        164:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
201 124  GOTO/253                  ?0        ?56                  ?165                	;0
202 126  GOTO/253                  ?0        ?204                 ?166                	;0
203 128  ECHO/40                   ?0        167:'                                            <li class="list-inline-item">
                                                <button id="disable_cache" onClick="api(\'disable_cache\')" class="btn btn-danger" type="button">Disable Cache</button>
                                                <button id="regenerate_cache" onClick="api(\'regenerate_cache\')" class="btn btn-info" type="button">Regenerate Cache</button>
                                            </li>
											<li class="list-inline-item float-right">
                                                <input name="submit_settings" type="submit" class="btn btn-primary" value="Save Cron" />
											</li>
                                            ' ?0                  	;0
204 130  ECHO/40                   ?0        168:'										</ul>
									</div>
                                    <div class="tab-pane" id="connections">
										<div class="row">
											<div class="col-12">
                                                <h5 class="card-title">Redis Connection Handler</h5>
                                                <p>The handler will allow all connections from clients to load balancers to be verified and managed using Redis rather than through mysql connections.<br/><br/><strong>Disabling Redis handler will disconnect all of your active clients, enabling it however should move the live connections from MySQL to Redis without disconnects.</strong></p>
                                                <h5 class="card-title mt-4">Pros & Cons</h5>
                                                <p>Before deciding whether Redis Connection Handler is right for you, you should know a few things. Firstly, enabling Redis will significantly increase XUI\'s ability to handle connections as the previous bottleneck would be from MySQL not being able to handle the amount of incoming client requests. You\'ll also find that zap time will be quicker, CPU should be lower and things will generally run quite smoothly.<br/><br/>The drawbacks from using Redis is that the live connection database is stored in memory, although a backup is periodically written, restarting XUI can result in connection losses. In addition to this, your ability to filter or search some content in the Admin or Reseller interface will be diminished. For example, with Redis on you can only sort Live Connections by Time Active ascending or descending and you cannot search the live connection list. You also lose the ability to sort by Active Connections in Lines or Content pages etc.<br/><br/>The best way to decide if Redis is right for you is to try it for yourself.</p>
                                                ' ?0                  	;0
205 131  GOTO/253                  ?0        ?281                 ?169                	;0
206 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'file_exists'   	;1
207 134  FETCH_CONSTANT/99         #115=     ?0                   172:'CACHE_TMP_PATH'	;16
208 134  CONCAT/8                  #116=     #115                 175:'cache_complete'	;0
209 134  SEND_VAL_EX/116           ?80       #116                 ?1                  	;0
210 134  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
211 134  JMPZ/43                   ?0        $117                 ?213                	;0	>>213
212 135  GOTO/253                  ?0        ?214                 ?176                	;0
213 137  ECHO/40                   ?0        177:'                                                <div class="alert alert-warning mb-4" role="alert">
                                                    Cache isn\'t complete yet! If you have a lot of streams and lines, the caching process can take a while to complete. For now, no users will be able to connect to the service.<br/><br/>Player API and Playlist functionality will be limited until cache is complete. This is a requirement regardless of whether cache is enabled or not.
                                                </div>
                                                ' ?0                  	;0	<<211
214 139  ECHO/40                   ?0        178:'                                                <h5 class="card-title">Cache Cron Execution</h5>
                                                <p>Your last cron execution was at <strong>' ?0                  	;0
215 140  GOTO/253                  ?0        ?99                  ?179                	;0
216 142  INCLUDE_OR_EVAL/73        ?95       180:'session.php'    ?0                  	;2	<<0
217 143  INCLUDE_OR_EVAL/73        ?96       181:'functions.php'  ?0                  	;2
218 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'E6d500e19634D513'	;0
219 144  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
220 144  JMPZ/43                   ?0        $120                 ?222                	;0	>>222
221 145  GOTO/253                  ?0        ?224                 ?184                	;0
222 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'E72f42A93714Ba87'	;0	<<220
223 147  DO_FCALL_BY_NAME/131      ?98       ?0                   ?0                  	;0
224 149  GOTO/253                  ?0        ?191                 ?187                	;0
225 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'number_format' 	;2
226 151  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
227 151  SEND_VAL_EX/116           ?96       190:0                ?2                  	;0
228 151  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
229 151  ECHO/40                   ?0        $122                 ?0                  	;0
230 152  ECHO/40                   ?0        191:' / '            ?0                  	;0
231 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'number_format' 	;2
232 153  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
233 153  SEND_VAL_EX/116           ?96       194:0                ?2                  	;0
234 153  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
235 153  ECHO/40                   ?0        $123                 ?0                  	;0
236 154  ECHO/40                   ?0        195:'</button>
                                                                </td>
                                                                <td class="text-center">Time Taken</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">' ?0                  	;0
237 155  INIT_STATIC_METHOD_CALL/113 ?0        196:'XUI'            198:'A5D0a3407690f047'	;1
238 155  FETCH_DIM_FUNC_ARG/93     $124=     16?0                 200:'last_cache_taken'	;1
239 155  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
240 155  DO_FCALL/60               $125=     ?0                   ?0                  	;0
241 155  ECHO/40                   ?0        $125                 ?0                  	;0
242 156  GOTO/253                  ?0        ?1                   ?201                	;0
243 158  INIT_METHOD_CALL/112      ?0        16?12                202:'query'         	;1
244 158  SEND_VAL_EX/116           ?80       204:'SELECT `id` FROM `streams`;' ?1                  	;0
245 158  DO_FCALL/60               ?103      ?0                   ?0                  	;0
246 159  FETCH_OBJ_R/82            $127=     16?12                205:'result'        	;0
247 159  INIT_METHOD_CALL/112      ?0        $127                 206:'rowCount'      	;0
248 159  DO_FCALL/60               $128=     ?0                   ?0                  	;0
249 159  ASSIGN/38                 ?106      16?7                 $128                	;0
250 160  INIT_METHOD_CALL/112      ?0        16?12                208:'query'         	;1
251 160  SEND_VAL_EX/116           ?80       210:'SELECT `id` FROM `streams_series`;' ?1                  	;0
252 160  DO_FCALL/60               ?107      ?0                   ?0                  	;0
253 161  FETCH_OBJ_R/82            $131=     16?12                211:'result'        	;0
254 161  INIT_METHOD_CALL/112      ?0        $131                 212:'rowCount'      	;0
255 161  DO_FCALL/60               $132=     ?0                   ?0                  	;0
256 161  ASSIGN/38                 ?110      16?18                $132                	;0
257 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'count'         	;1
258 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'glob'          	;1
259 162  FETCH_CONSTANT/99         #134=     ?0                   218:'LINES_TMP_PATH'	;16
260 162  CONCAT/8                  #135=     #134                 221:'line_i_*'      	;0
261 162  SEND_VAL_EX/116           ?80       #135                 ?1                  	;0
262 162  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
263 162  SEND_VAR_NO_REF_EX/50     ?80       $136                 ?1                  	;0
264 162  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
265 162  ASSIGN/38                 ?115      16?19                $137                	;0
266 163  GOTO/253                  ?0        ?8                   ?222                	;0
267 166  ECHO/40                   ?0        223:'                                                                    <button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xl">ONLINE</button>
                                                                    ' ?0                  	;0
268 168  ECHO/40                   ?0        224:'                                                                </td>
                                                                <td class="text-center">Authentication</td>
                                                                <td class="text-center">
                                                                    ' ?0                  	;0
269 169  JMPZ/43                   ?0        16?20                ?271                	;0	>>271
270 170  GOTO/253                  ?0        ?307                 ?225                	;0
271 172  GOTO/253                  ?0        ?305                 ?226                	;0	<<269
272 174  FETCH_STATIC_PROP_R/173   $139=     227:'rSettings'      228:'XUI'           	;0
273 174  FETCH_DIM_R/81            $140=     $139                 230:'enable_cache'  	;0
274 174  BOOL_NOT/13               #141=     $140                 ?0                  	;0
275 174  JMPZ/43                   ?0        #141                 ?277                	;0	>>277
276 175  GOTO/253                  ?0        ?280                 ?231                	;0
277 177  ASSIGN/38                 ?119      16?3                 232:75              	;0	<<275
278 178  ASSIGN/38                 ?120      16?6                 233:'Redis Connection Handler is disabled on your service, if you have a lot of throughput you will see better performance with Redis enabled.<br/>If you maintain active connections of over 10,000 for example you should consider this. Below this amount you\'re unlikely to see any benefit.'	;0
279 179  GOTO/253                  ?0        ?339                 ?234                	;0
280 181  GOTO/253                  ?0        ?337                 ?235                	;0
281 183  FETCH_DIM_R/81            $144=     16?0                 236:'redis_handler' 	;0
282 183  JMPZ/43                   ?0        $144                 ?284                	;0	>>284
283 184  GOTO/253                  ?0        ?286                 ?237                	;0
284 186  ECHO/40                   ?0        238:'                                                <p><strong>You have chosen to disable Redis Connection Handler. Click the button below to re-enable it.</strong></p>
                                                ' ?0                  	;0	<<282
285 187  GOTO/253                  ?0        ?112                 ?239                	;0
286 189  NOP/0                     ?0        ?0                   ?0                  	;0
287 190  NEW/68                    $146=     243:'Redis'          ?64                 	;0	<<302
288 190  DO_FCALL/60               ?124      ?8                   ?0                  	;0
289 190  FETCH_STATIC_PROP_W/174   $145=     240:'redis'          241:'XUI'           	;0
290 190  ASSIGN/38                 ?125      $145                 $146                	;0
291 191  FETCH_STATIC_PROP_R/173   $149=     245:'redis'          246:'XUI'           	;0
292 191  INIT_METHOD_CALL/112      ?0        $149                 248:'connect'       	;2
293 191  FETCH_CONSTANT/99         #151=     ?0                   253:'SERVER_ID'     	;16
294 191  FETCH_STATIC_PROP_FUNC_ARG/177 $150=     250:'rServers'       251:'XUI'           	;1
295 191  FETCH_DIM_FUNC_ARG/93     $152=     $150                 #151                	;1
296 191  FETCH_DIM_FUNC_ARG/93     $153=     $152                 256:'server_ip'     	;1
297 191  SEND_VAR_EX/66            ?80       $153                 ?1                  	;0
298 191  SEND_VAL_EX/116           ?96       257:6379             ?2                  	;0
299 191  DO_FCALL/60               ?131      ?0                   ?0                  	;0
300 192  ASSIGN/38                 ?132      16?21                258:true            	;0
301 192  JMP/42                    ?0        ?304                 ?0                  	;0	>>304
302 193  CATCH/107                 ?1        259:'Exception'      16?22               	;0 CB	>>304,287
303 194  ASSIGN/38                 ?133      16?21                261:false           	;0
304 196  GOTO/253                  ?0        ?341                 ?262                	;0	<<301,302
305 198  ECHO/40                   ?0        263:'                                                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl">INVALID PASSWORD</button>
                                                                    ' ?0                  	;0
306 199  GOTO/253                  ?0        ?308                 ?264                	;0
307 201  ECHO/40                   ?0        265:'                                                                    <button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xl">AUTHENTICATED</button>
                                                                    ' ?0                  	;0
308 203  GOTO/253                  ?0        ?111                 ?266                	;0
309 205  ECHO/40                   ?0        267:'</button>
                                                                </td>
                                                                <td class="text-center">Lines</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">' ?0                  	;0
310 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'number_format' 	;2
311 206  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
312 206  SEND_VAL_EX/116           ?96       270:0                ?2                  	;0
313 206  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
314 206  ECHO/40                   ?0        $157                 ?0                  	;0
315 207  ECHO/40                   ?0        271:' / '            ?0                  	;0
316 208  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'number_format' 	;2
317 208  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
318 208  SEND_VAL_EX/116           ?96       274:0                ?2                  	;0
319 208  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
320 208  ECHO/40                   ?0        $158                 ?0                  	;0
321 209  ECHO/40                   ?0        275:'</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">Series</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">' ?0                  	;0
322 210  GOTO/253                  ?0        ?225                 ?276                	;0
323 212  ECHO/40                   ?0        277:'"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">Thread Count</td>
                                                                <td style="width:250px;"><input type="text" class="form-control text-center" id="cache_thread_count" name="cache_thread_count" value="' ?0                  	;0
324 213  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'intval'        	;1
325 213  FETCH_DIM_FUNC_ARG/93     $159=     16?0                 280:'cache_thread_count'	;1
326 213  SEND_VAR_EX/66            ?80       $159                 ?1                  	;0
327 213  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
328 213  ECHO/40                   ?0        $160                 ?0                  	;0
329 214  ECHO/40                   ?0        281:'"></td>
                                                                <td class="text-center">Update Changes Only</td>
                                                                <td style="width:250px;">
                                                                    <input name="cache_changes" id="cache_changes" type="checkbox"' ?0                  	;0
330 215  FETCH_DIM_R/81            $161=     16?0                 282:'cache_changes' 	;0
331 215  IS_EQUAL/17               #162=     $161                 283:1               	;0
332 215  BOOL_NOT/13               #163=     #162                 ?0                  	;0
333 215  JMPZ/43                   ?0        #163                 ?335                	;0	>>335
334 216  GOTO/253                  ?0        ?38                  ?284                	;0
335 218  ECHO/40                   ?0        285:' checked '      ?0                  	;0	<<333
336 219  GOTO/253                  ?0        ?38                  ?286                	;0
337 221  ASSIGN/38                 ?141      16?3                 287:50              	;0
338 222  ASSIGN/38                 ?142      16?6                 288:'Caching is disabled on your service, this will impact performance significantly under load compared to having it enabled.'	;0
339 225  GOTO/253                  ?0        ?118                 ?289                	;0
340 226  GOTO/253                  ?0        ?33                  ?290                	;0
341 228  NOP/0                     ?0        ?0                   ?0                  	;0
342 229  FETCH_STATIC_PROP_R/173   $166=     291:'redis'          292:'XUI'           	;0	<<350
343 229  INIT_METHOD_CALL/112      ?0        $166                 294:'auth'          	;1
344 229  FETCH_STATIC_PROP_FUNC_ARG/177 $167=     296:'rSettings'      297:'XUI'           	;1
345 229  FETCH_DIM_FUNC_ARG/93     $168=     $167                 299:'redis_password'	;1
346 229  SEND_VAR_EX/66            ?80       $168                 ?1                  	;0
347 229  DO_FCALL/60               ?146      ?0                   ?0                  	;0
348 230  ASSIGN/38                 ?147      16?20                300:true            	;0
349 230  JMP/42                    ?0        ?352                 ?0                  	;0	>>352
350 231  CATCH/107                 ?1        301:'Exception'      16?22               	;0 CB	>>352,342
351 232  ASSIGN/38                 ?148      16?20                303:false           	;0
352 234  ECHO/40                   ?0        304:'                                                <div class="form-group row mb-4 mt-4">
                                                    <table class="table table-striped table-borderless mb-0" id="datatable-redis">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">Server Status</td>
                                                                <td class="text-center">
                                                                    ' ?0                  	;0	<<349,350
353 235  JMPZ/43                   ?0        16?21                ?355                	;0	>>355
354 236  GOTO/253                  ?0        ?267                 ?305                	;0
355 238  ECHO/40                   ?0        306:'                                                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl">OFFLINE</button>
                                                                    ' ?0                  	;0	<<353
356 239  GOTO/253                  ?0        ?268                 ?307                	;0
357 240  GOTO/253                  ?0        ?267                 ?308                	;0
358 242  GOTO/253                  ?0        ?360                 ?309                	;0
359 244  ECHO/40                   ?0        310:'                                            <li class="list-inline-item">
                                                <button id="disable_handler" onClick="api(\'disable_handler\')" class="btn btn-danger" type="button">Disable Handler</button>
												<button id="clear_redis" onClick="api(\'clear_redis\')" class="btn btn-info" type="button">Clear Database</button>
                                            </li>
                                            ' ?0                  	;0
360 246  ECHO/40                   ?0        311:'										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
' ?0                  	;0
361 247  GOTO/253                  ?0        ?370                 ?312                	;0
362 249  ECHO/40                   ?0        16?3                 ?0                  	;0
363 250  ECHO/40                   ?0        313:'%"></div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#cache" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-cached mr-1"></i>
											<span class="d-none d-sm-inline">XUI Caching System</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#connections" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-lan-connect mr-1"></i>
											<span class="d-none d-sm-inline">Redis Connection Handler</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="cache">
										<div class="row">
											<div class="col-12">
                                                ' ?0                  	;0
364 251  FETCH_DIM_R/81            $172=     16?0                 314:'enable_cache'  	;0
365 251  JMPZ/43                   ?0        $172                 ?367                	;0	>>367
366 252  GOTO/253                  ?0        ?161                 ?315                	;0
367 254  ECHO/40                   ?0        316:'                                                <h5 class="card-title">Cache is Disabled</h5>
                                                <p>You have chosen to disable Cache system. You can re-enable it by clicking the Enable Cache box below, however when doing so you would get best results restarting XUI on this server.</p>
                                                ' ?0                  	;0	<<365
368 255  GOTO/253                  ?0        ?2                   ?317                	;0
369 256  GOTO/253                  ?0        ?161                 ?318                	;0
370 258  INCLUDE_OR_EVAL/73        ?150      319:'footer.php'     ?0                  	;2
371 259  NOP/0                     ?0        320:1                ?0                  	;4294967295
*/

?>