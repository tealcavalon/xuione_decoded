<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?717                 ?0                  	;0	>>717
1   5    FE_RESET_R/77             $28=      16?0                 ?120                	;0
2   5    FE_FETCH_R/78             ?0        $28                  16?1                	;120	>>120	<<119
3   6    NOP/0                     ?0        ?0                   ?0                  	;1
4   6    GOTO/253                  ?0        ?106                 ?1                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'intval'          	;1
6   8    FETCH_STATIC_PROP_FUNC_ARG/177 $29=      4:'rRequest'         5:'XUI'             	;1
7   8    FETCH_DIM_FUNC_ARG/93     $30=      $29                  7:'server'          	;1
8   8    SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
9   8    DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
10  8    ECHO/40                   ?0        $31                  ?0                  	;0
11  9    ECHO/40                   ?0        8:'&clear"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="' ?0                  	;0
12  10   FETCH_DIM_R/81            $32=      16?2                 9:'clear_temp'      	;0
13  10   ECHO/40                   ?0        $32                  ?0                  	;0
14  11   ECHO/40                   ?0        10:'" type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button></a>
											' ?0                  	;0
15  13   NOP/0                     ?0        ?0                   ?0                  	;1
16  13   GOTO/253                  ?0        ?23                  ?11                 	;0
17  15   ECHO/40                   ?0        12:'" type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button></a>
											' ?0                  	;0
18  17   NOP/0                     ?0        ?0                   ?0                  	;1
19  17   GOTO/253                  ?0        ?15                  ?13                 	;0
20  19   ECHO/40                   ?0        14:'											<a href="./process_monitor?server=' ?0                  	;0
21  20   NOP/0                     ?0        ?0                   ?0                  	;1
22  20   GOTO/253                  ?0        ?5                   ?15                 	;0
23  22   ECHO/40                   ?0        16:'										</div>
									</td>
								</tr>
								' ?0                  	;0
24  24   NOP/0                     ?0        ?0                   ?0                  	;1
25  24   GOTO/253                  ?0        ?119                 ?17                 	;0
26  26   FETCH_DIM_R/81            $33=      16?1                 18:'avail'          	;0
27  26   ECHO/40                   ?0        $33                  ?0                  	;0
28  27   ECHO/40                   ?0        19:'</td>
									<td class="text-center">' ?0                  	;0
29  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
30  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'rtrim'          	;2
31  28   FETCH_DIM_FUNC_ARG/93     $34=      16?1                 24:'percentage'     	;1
32  28   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
33  28   SEND_VAL_EX/116           ?96       25:'%'               ?2                  	;0
34  28   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
35  28   SEND_VAR_NO_REF_EX/50     ?80       $35                  ?1                  	;0
36  28   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
37  28   IS_SMALLER_OR_EQUAL/20    #37=      26:80                $36                 	;0
38  28   JMPZ/43                   ?0        #37                  ?41                 	;0	>>41
39  29   NOP/0                     ?0        ?0                   ?0                  	;1
40  29   GOTO/253                  ?0        ?84                  ?27                 	;0
41  31   FETCH_DIM_R/81            $38=      16?1                 28:'percentage'     	;0	<<38
42  31   ECHO/40                   ?0        $38                  ?0                  	;0
43  32   NOP/0                     ?0        ?0                   ?0                  	;1
44  32   GOTO/253                  ?0        ?88                  ?29                 	;0
45  33   NOP/0                     ?0        ?0                   ?0                  	;1
46  33   GOTO/253                  ?0        ?84                  ?30                 	;0
47  35   ECHO/40                   ?0        31:'</td>
									<td class="text-center">' ?0                  	;0
48  36   FETCH_DIM_R/81            $39=      16?1                 32:'size'           	;0
49  36   ECHO/40                   ?0        $39                  ?0                  	;0
50  37   ECHO/40                   ?0        33:'</td>
									<td class="text-center">' ?0                  	;0
51  38   FETCH_DIM_R/81            $40=      16?1                 34:'used'           	;0
52  38   ECHO/40                   ?0        $40                  ?0                  	;0
53  39   ECHO/40                   ?0        35:'</td>
									<td class="text-center">' ?0                  	;0
54  40   NOP/0                     ?0        ?0                   ?0                  	;1
55  40   GOTO/253                  ?0        ?26                  ?36                 	;0
56  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'substr'         	;3
57  42   FETCH_DIM_FUNC_ARG/93     $41=      16?1                 39:'mount'          	;1
58  42   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
59  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'strlen'         	;1
60  42   FETCH_DIM_FUNC_ARG/93     $42=      16?1                 42:'mount'          	;1
61  42   SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
62  42   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
63  42   SUB/2                     #44=      $43                  43:7                	;0
64  42   SEND_VAL_EX/116           ?96       #44                  ?2                  	;0
65  42   SEND_VAL_EX/116           ?112      44:7                 ?3                  	;0
66  42   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
67  42   IS_EQUAL/17               #46=      $45                  45:'streams'        	;0
68  42   BOOL_NOT/13               #47=      #46                  ?0                  	;0
69  42   JMPZ/43                   ?0        #47                  ?72                 	;0	>>72
70  43   NOP/0                     ?0        ?0                   ?0                  	;1
71  43   GOTO/253                  ?0        ?18                  ?46                 	;0
72  45   ECHO/40                   ?0        47:'											<a href="./process_monitor?server=' ?0                  	;0	<<69
73  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'intval'         	;1
74  46   FETCH_STATIC_PROP_FUNC_ARG/177 $48=      50:'rRequest'        51:'XUI'            	;1
75  46   FETCH_DIM_FUNC_ARG/93     $49=      $48                  53:'server'         	;1
76  46   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
77  46   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
78  46   ECHO/40                   ?0        $50                  ?0                  	;0
79  47   ECHO/40                   ?0        54:'&clear_s"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="' ?0                  	;0
80  48   FETCH_DIM_R/81            $51=      16?2                 55:'clear_streams'  	;0
81  48   ECHO/40                   ?0        $51                  ?0                  	;0
82  49   NOP/0                     ?0        ?0                   ?0                  	;1
83  49   GOTO/253                  ?0        ?17                  ?56                 	;0
84  52   FETCH_DIM_R/81            $52=      16?1                 57:'percentage'     	;0
85  52   CONCAT/8                  #53=      58:'<span class=\'text-danger\'>' $52                 	;0
86  52   CONCAT/8                  #54=      #53                  59:'</span>'        	;0
87  52   ECHO/40                   ?0        #54                  ?0                  	;0
88  54   ECHO/40                   ?0        60:'</td>
									<td class="text-center">
										<div class="btn-group">
											' ?0                  	;0
89  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'substr'         	;3
90  55   FETCH_DIM_FUNC_ARG/93     $55=      16?1                 63:'mount'          	;1
91  55   SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
92  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'strlen'         	;1
93  55   FETCH_DIM_FUNC_ARG/93     $56=      16?1                 66:'mount'          	;1
94  55   SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
95  55   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
96  55   SUB/2                     #58=      $57                  67:3                	;0
97  55   SEND_VAL_EX/116           ?96       #58                  ?2                  	;0
98  55   SEND_VAL_EX/116           ?112      68:3                 ?3                  	;0
99  55   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
100 55   IS_EQUAL/17               #60=      $59                  69:'tmp'            	;0
101 55   JMPZ/43                   ?0        #60                  ?104                	;0	>>104
102 56   NOP/0                     ?0        ?0                   ?0                  	;1
103 56   GOTO/253                  ?0        ?20                  ?70                 	;0
104 58   NOP/0                     ?0        ?0                   ?0                  	;1	<<101
105 58   GOTO/253                  ?0        ?56                  ?71                 	;0
106 60   FETCH_DIM_R/81            $61=      16?1                 72:'percentage'     	;0
107 60   IS_SMALLER_OR_EQUAL/20    #62=      73:80                $61                 	;0
108 60   BOOL_NOT/13               #63=      #62                  ?0                  	;0
109 60   JMPZ/43                   ?0        #63                  ?112                	;0	>>112
110 61   NOP/0                     ?0        ?0                   ?0                  	;1
111 61   GOTO/253                  ?0        ?114                 ?74                 	;0
112 63   FETCH_CONSTANT/99         #64=      ?0                   75:'STATUS_SPACE_ISSUE'	;16	<<109
113 63   ASSIGN/38                 ?37       16?3                 #64                 	;0
114 65   ECHO/40                   ?0        78:'								<tr>
									<td>' ?0                  	;0
115 66   FETCH_DIM_R/81            $66=      16?1                 79:'mount'          	;0
116 66   ECHO/40                   ?0        $66                  ?0                  	;0
117 67   NOP/0                     ?0        ?0                   ?0                  	;1
118 67   GOTO/253                  ?0        ?47                  ?80                 	;0
119 68   JMP/42                    ?0        ?2                   ?0                  	;0	>>2
120 68   FE_FREE/127               ?0        $28                  ?0                  	;0	<<1
121 71   ECHO/40                   ?0        81:'							</tbody>
						</table>
					</div>
				</div>
				' ?0                  	;0
122 73   ISSET_ISEMPTY_CV/197      #67=      16?3                 ?0                  	;33554432
123 73   JMPZ_EX/46                #67=      #67                  ?127                	;0	>>127
124 73   FETCH_CONSTANT/99         #68=      ?0                   82:'STATUS_SPACE_ISSUE'	;16
125 73   IS_EQUAL/17               #69=      16?3                 #68                 	;0
126 73   BOOL/52                   #67=      #69                  ?0                  	;0
127 73   BOOL_NOT/13               #70=      #67                  ?0                  	;0	<<123
128 73   JMPZ/43                   ?0        #70                  ?130                	;0	>>130
129 74   GOTO/253                  ?0        ?727                 ?85                 	;0
130 76   GOTO/253                  ?0        ?726                 ?86                 	;0	<<128
131 78   ECHO/40                   ?0        87:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
132 79   FE_RESET_R/77             $71=      16?4                 ?563                	;0
133 79   FE_FETCH_R/78             ?0        $71                  16?5                	;563	>>563	<<562
134 80   NOP/0                     ?0        ?0                   ?0                  	;1
135 80   GOTO/253                  ?0        ?248                 ?88                 	;0
136 83   ECHO/40                   ?0        89:'											<a href="' ?0                  	;0
137 84   FETCH_DIM_R/81            $72=      16?5                 90:'pid'            	;0
138 84   FETCH_DIM_R/81            $73=      16?6                 $72                 	;0
139 84   FETCH_DIM_R/81            $74=      $73                  91:'type'           	;0
140 84   FETCH_DIM_R/81            $75=      92:array (
  1 => 'stream_view',
  2 => 'stream_view',
  3 => 'stream_view',
  4 => 'stream_view',
  5 => 'stream_view',
) $74                 	;0
141 84   CONCAT/8                  #76=      $75                  93:'?id='           	;0
142 84   FETCH_DIM_R/81            $77=      16?5                 94:'pid'            	;0
143 84   FETCH_DIM_R/81            $78=      16?6                 $77                 	;0
144 84   FETCH_DIM_R/81            $79=      $78                  95:'id'             	;0
145 84   CONCAT/8                  #80=      #76                  $79                 	;0
146 84   ECHO/40                   ?0        #80                  ?0                  	;0
147 85   ECHO/40                   ?0        96:'"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="' ?0                  	;0
148 86   FETCH_DIM_R/81            $81=      16?2                 97:'view'           	;0
149 86   ECHO/40                   ?0        $81                  ?0                  	;0
150 87   NOP/0                     ?0        ?0                   ?0                  	;1
151 87   GOTO/253                  ?0        ?499                 ?98                 	;0
152 89   ECHO/40                   ?0        99:'								<tr>
									<td>' ?0                  	;0
153 90   FETCH_DIM_R/81            $82=      16?5                 100:'pid'           	;0
154 90   ECHO/40                   ?0        $82                  ?0                  	;0
155 91   ECHO/40                   ?0        101:'</td>
									<td>' ?0                  	;0
156 92   ECHO/40                   ?0        16?7                 ?0                  	;0
157 93   ECHO/40                   ?0        102:'</td>
									<td>
                                        ' ?0                  	;0
158 94   NOP/0                     ?0        ?0                   ?0                  	;1
159 94   GOTO/253                  ?0        ?484                 ?103                	;0
160 97   FETCH_DIM_R/81            $83=      16?5                 104:'etime'         	;0
161 97   ASSIGN/38                 ?56       16?8                 $83                 	;0
162 98   IS_SMALLER_OR_EQUAL/20    #85=      105:86400            16?8                	;0
163 98   JMPZ/43                   ?0        #85                  ?166                	;0	>>166
164 99   NOP/0                     ?0        ?0                   ?0                  	;1
165 99   GOTO/253                  ?0        ?464                 ?106                	;0
166 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'sprintf'       	;4	<<163
167 101  SEND_VAL_EX/116           ?80       109:'%02dh %02dm %02ds' ?1                  	;0
168 101  DIV/4                     #86=      16?8                 110:3600            	;0
169 101  SEND_VAL_EX/116           ?96       #86                  ?2                  	;0
170 101  DIV/4                     #87=      16?8                 111:60              	;0
171 101  MOD/5                     #88=      #87                  112:60              	;0
172 101  SEND_VAL_EX/116           ?112      #88                  ?3                  	;0
173 101  MOD/5                     #89=      16?8                 113:60              	;0
174 101  SEND_VAL_EX/116           ?128      #89                  ?4                  	;0
175 101  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
176 101  ASSIGN/38                 ?63       16?8                 $90                 	;0
177 102  NOP/0                     ?0        ?0                   ?0                  	;1
178 102  GOTO/253                  ?0        ?476                 ?114                	;0
179 103  NOP/0                     ?0        ?0                   ?0                  	;1
180 103  GOTO/253                  ?0        ?464                 ?115                	;0
181 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'intval'        	;1
182 105  FETCH_STATIC_PROP_FUNC_ARG/177 $92=      118:'rRequest'       119:'XUI'           	;1
183 105  FETCH_DIM_FUNC_ARG/93     $93=      $92                  121:'server'        	;1
184 105  SEND_VAR_EX/66            ?80       $93                  ?1                  	;0
185 105  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
186 105  ECHO/40                   ?0        $94                  ?0                  	;0
187 106  ECHO/40                   ?0        122:', '             ?0                  	;0
188 107  FETCH_DIM_R/81            $95=      16?5                 123:'pid'           	;0
189 107  ECHO/40                   ?0        $95                  ?0                  	;0
190 108  ECHO/40                   ?0        124:');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
191 110  NOP/0                     ?0        ?0                   ?0                  	;1
192 110  GOTO/253                  ?0        ?562                 ?125                	;0
193 112  FETCH_DIM_R/81            $96=      16?2                 126:'main'          	;0
194 112  CONCAT/8                  #97=      $96                  127:' - '           	;0
195 112  INIT_ARRAY/71             #98=      #97                  128:'pid'           	;30
196 112  FETCH_DIM_R/81            $99=      16?2                 129:'thumbnail'     	;0
197 112  CONCAT/8                  #100=     $99                  130:' - '           	;0
198 112  ADD_ARRAY_ELEMENT/72      #98=      #100                 131:'vframes'       	;0
199 112  FETCH_DIM_R/81            $101=     16?2                 132:'monitor'       	;0
200 112  CONCAT/8                  #102=     $101                 133:' - '           	;0
201 112  ADD_ARRAY_ELEMENT/72      #98=      #102                 134:'monitor_pid'   	;0
202 112  FETCH_DIM_R/81            $103=     16?2                 135:'delayed'       	;0
203 112  CONCAT/8                  #104=     $103                 136:' - '           	;0
204 112  ADD_ARRAY_ELEMENT/72      #98=      #104                 137:'delay_pid'     	;0
205 112  FETCH_DIM_R/81            $105=     16?2                 138:'line_activity' 	;0
206 112  CONCAT/8                  #106=     $105                 139:' - '           	;0
207 112  ADD_ARRAY_ELEMENT/72      #98=      #106                 140:'activity'      	;0
208 112  FETCH_DIM_R/81            $107=     16?2                 141:'timeshift'     	;0
209 112  CONCAT/8                  #108=     $107                 142:' - '           	;0
210 112  ADD_ARRAY_ELEMENT/72      #98=      #108                 143:'timeshift'     	;0
211 112  ADD_ARRAY_ELEMENT/72      #98=      144:''               145:NULL            	;0
212 112  FETCH_DIM_R/81            $109=     16?5                 146:'pid'           	;0
213 112  FETCH_DIM_R/81            $110=     16?6                 $109                	;0
214 112  FETCH_DIM_R/81            $111=     $110                 147:'pid_type'      	;0
215 112  FETCH_DIM_R/81            $112=     #98                  $111                	;0
216 112  FETCH_DIM_R/81            $113=     16?2                 148:'stream'        	;0
217 112  INIT_ARRAY/71             #114=     $113                 149:1               	;24
218 112  FETCH_DIM_R/81            $115=     16?2                 150:'movie'         	;0
219 112  ADD_ARRAY_ELEMENT/72      #114=     $115                 151:2               	;0
220 112  FETCH_DIM_R/81            $116=     16?2                 152:'created_channel'	;0
221 112  ADD_ARRAY_ELEMENT/72      #114=     $116                 153:3               	;0
222 112  FETCH_DIM_R/81            $117=     16?2                 154:'radio'         	;0
223 112  ADD_ARRAY_ELEMENT/72      #114=     $117                 155:4               	;0
224 112  FETCH_DIM_R/81            $118=     16?2                 156:'episode'       	;0
225 112  ADD_ARRAY_ELEMENT/72      #114=     $118                 157:5               	;0
226 112  FETCH_DIM_R/81            $119=     16?2                 158:'system'        	;0
227 112  ADD_ARRAY_ELEMENT/72      #114=     $119                 159:NULL            	;0
228 112  FETCH_DIM_R/81            $120=     16?5                 160:'pid'           	;0
229 112  FETCH_DIM_R/81            $121=     16?6                 $120                	;0
230 112  FETCH_DIM_R/81            $122=     $121                 161:'type'          	;0
231 112  FETCH_DIM_R/81            $123=     #114                 $122                	;0
232 112  CONCAT/8                  #124=     $112                 $123                	;0
233 112  ASSIGN/38                 ?97       16?7                 #124                	;0
234 113  NOP/0                     ?0        ?0                   ?0                  	;1
235 113  GOTO/253                  ?0        ?415                 ?162                	;0
236 115  ASSIGN_DIM/147            ?98       16?5                 163:'command'       	;0
237 115  OP_DATA/137               ?0        164:'Redis Server'   ?0                  	;0
238 116  ASSIGN/38                 ?99       16?7                 165:'Redis'         	;0
239 117  NOP/0                     ?0        ?0                   ?0                  	;1
240 117  GOTO/253                  ?0        ?415                 ?166                	;0
241 120  NOP/0                     ?0        ?0                   ?0                  	;1
242 120  GOTO/253                  ?0        ?365                 ?167                	;0
243 122  ASSIGN_DIM/147            ?100      16?5                 168:'command'       	;0
244 122  OP_DATA/137               ?0        169:'NGINX Worker Process' ?0                  	;0
245 123  ASSIGN/38                 ?101      16?7                 170:'NGINX Pool'    	;0
246 124  NOP/0                     ?0        ?0                   ?0                  	;1
247 124  GOTO/253                  ?0        ?365                 ?171                	;0
248 126  ASSIGN/38                 ?102      16?9                 172:array (
  'proxy' => 'Live Proxy',
  'llod' => 'LLOD',
  'loopback' => 'Loopback',
  'queue' => 'VOD Queue',
  'ondemand' => 'On-Demand Instant Off',
  'plex_item' => 'Plex Item Scan',
  'watch_item' => 'Watch Item Scan',
  'cache_handler' => 'Cache Handler',
  'certbot' => 'Certbot SSL Automation',
  'closed_cons' => 'Closed Connection Handler',
  'signals' => 'Signal Handler',
  'watchdog' => 'Server Watchdog',
)	;0
249 127  ASSIGN/38                 ?103      16?10                173:array (
  'plex' => 'Plex Sync',
  'cache_engine' => 'Cache Generator',
  'activity' => 'Activity Cron',
  'backups' => 'Backup Cron',
  'cache' => 'Cache Cron',
  'epg' => 'EPG Cron',
  'lines_logs' => 'Line Logging Cron',
  'root_signals' => 'Root Signal Cron',
  'series' => 'Series Cron',
  'servers' => 'Servers Cron',
  'stats' => 'Stats Cron',
  'streams' => 'Streams Cron',
  'streams_logs' => 'Stream Logging Cron',
  'tmdb' => 'TMDb Refresh Cron',
  'tmp' => 'Temp Cron',
  'users' => 'Users Cron',
  'vod' => 'VOD Cron',
  'watch' => 'Watch Folder Cron',
)	;0
250 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'basename'      	;2
251 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'explode'       	;2
252 128  SEND_VAL_EX/116           ?80       178:' '              ?1                  	;0
253 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'trim'          	;1
254 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'explode'       	;2
255 128  SEND_VAL_EX/116           ?80       183:'#'              ?1                  	;0
256 128  FETCH_DIM_FUNC_ARG/93     $132=     16?5                 184:'command'       	;2
257 128  SEND_VAR_EX/66            ?96       $132                 ?2                  	;0
258 128  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
259 128  SEPARATE/156              $133=     $133                 ?0                  	;0
260 128  FETCH_DIM_FUNC_ARG/93     $134=     $133                 185:0               	;1
261 128  SEND_VAR_EX/66            ?80       $134                 ?1                  	;0
262 128  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
263 128  SEND_VAR_NO_REF_EX/50     ?96       $135                 ?2                  	;0
264 128  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
265 128  SEPARATE/156              $136=     $136                 ?0                  	;0
266 128  FETCH_DIM_FUNC_ARG/93     $137=     $136                 186:0               	;1
267 128  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
268 128  SEND_VAL_EX/116           ?96       187:'.php'           ?2                  	;0
269 128  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
270 128  ISSET_ISEMPTY_DIM_OBJ/115 #139=     16?9                 $138                	;33554432
271 128  JMPZ/43                   ?0        #139                 ?274                	;0	>>274
272 129  NOP/0                     ?0        ?0                   ?0                  	;1
273 129  GOTO/253                  ?0        ?508                 ?188                	;0
274 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'basename'      	;2	<<271
275 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'trim'          	;1
276 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'explode'       	;2
277 131  SEND_VAL_EX/116           ?80       195:'#'              ?1                  	;0
278 131  FETCH_DIM_FUNC_ARG/93     $140=     16?5                 196:'command'       	;2
279 131  SEND_VAR_EX/66            ?96       $140                 ?2                  	;0
280 131  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
281 131  SEPARATE/156              $141=     $141                 ?0                  	;0
282 131  FETCH_DIM_FUNC_ARG/93     $142=     $141                 197:0               	;1
283 131  SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
284 131  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
285 131  SEND_VAR_NO_REF_EX/50     ?80       $143                 ?1                  	;0
286 131  SEND_VAL_EX/116           ?96       198:'.php'           ?2                  	;0
287 131  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
288 131  ISSET_ISEMPTY_DIM_OBJ/115 #145=     16?9                 $144                	;33554432
289 131  JMPZ/43                   ?0        #145                 ?292                	;0	>>292
290 132  NOP/0                     ?0        ?0                   ?0                  	;1
291 132  GOTO/253                  ?0        ?345                 ?199                	;0
292 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'basename'      	;2	<<289
293 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'explode'       	;2
294 134  SEND_VAL_EX/116           ?80       204:' '              ?1                  	;0
295 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'trim'          	;1
296 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'explode'       	;2
297 134  SEND_VAL_EX/116           ?80       209:'#'              ?1                  	;0
298 134  FETCH_DIM_FUNC_ARG/93     $146=     16?5                 210:'command'       	;2
299 134  SEND_VAR_EX/66            ?96       $146                 ?2                  	;0
300 134  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
301 134  SEPARATE/156              $147=     $147                 ?0                  	;0
302 134  FETCH_DIM_FUNC_ARG/93     $148=     $147                 211:0               	;1
303 134  SEND_VAR_EX/66            ?80       $148                 ?1                  	;0
304 134  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
305 134  SEND_VAR_NO_REF_EX/50     ?96       $149                 ?2                  	;0
306 134  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
307 134  SEPARATE/156              $150=     $150                 ?0                  	;0
308 134  FETCH_DIM_FUNC_ARG/93     $151=     $150                 212:0               	;1
309 134  SEND_VAR_EX/66            ?80       $151                 ?1                  	;0
310 134  SEND_VAL_EX/116           ?96       213:'.php'           ?2                  	;0
311 134  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
312 134  ISSET_ISEMPTY_DIM_OBJ/115 #153=     16?10                $152                	;33554432
313 134  JMPZ/43                   ?0        #153                 ?316                	;0	>>316
314 135  NOP/0                     ?0        ?0                   ?0                  	;1
315 135  GOTO/253                  ?0        ?536                 ?214                	;0
316 137  NOP/0                     ?0        ?0                   ?0                  	;1	<<313
317 137  GOTO/253                  ?0        ?422                 ?215                	;0
318 139  ECHO/40                   ?0        216:'</small>%</td>
									<td><button type="button" class="btn btn-light btn-xs waves-effect waves-light">' ?0                  	;0
319 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'number_format' 	;2
320 140  FETCH_DIM_R/81            $154=     16?5                 219:'rss'           	;0
321 140  DIV/4                     #155=     $154                 220:1024.0          	;0
322 140  SEND_VAL_EX/116           ?80       #155                 ?1                  	;0
323 140  SEND_VAL_EX/116           ?96       221:0                ?2                  	;0
324 140  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
325 140  ECHO/40                   ?0        $156                 ?0                  	;0
326 141  ECHO/40                   ?0        222:'</button></td>
									<td><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed">' ?0                  	;0
327 142  ECHO/40                   ?0        16?8                 ?0                  	;0
328 143  ECHO/40                   ?0        223:'</button></td>
                                    <td><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed">' ?0                  	;0
329 144  NOP/0                     ?0        ?0                   ?0                  	;1
330 144  GOTO/253                  ?0        ?331                 ?224                	;0
331 146  ECHO/40                   ?0        16?11                ?0                  	;0
332 147  ECHO/40                   ?0        225:'</button></td>
									<td>
										<div class="btn-group">
											' ?0                  	;0
333 148  FETCH_DIM_R/81            $157=     16?5                 226:'pid'           	;0
334 148  ISSET_ISEMPTY_DIM_OBJ/115 #158=     16?6                 $157                	;33554432
335 148  JMPZ/43                   ?0        #158                 ?338                	;0	>>338
336 149  NOP/0                     ?0        ?0                   ?0                  	;1
337 149  GOTO/253                  ?0        ?136                 ?227                	;0
338 151  ECHO/40                   ?0        228:'											<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-eye"></i></button>
											' ?0                  	;0	<<335
339 152  NOP/0                     ?0        ?0                   ?0                  	;1
340 152  GOTO/253                  ?0        ?500                 ?229                	;0
341 153  NOP/0                     ?0        ?0                   ?0                  	;1
342 153  GOTO/253                  ?0        ?136                 ?230                	;0
343 156  NOP/0                     ?0        ?0                   ?0                  	;1
344 156  GOTO/253                  ?0        ?506                 ?231                	;0
345 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'basename'      	;2
346 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'trim'          	;1
347 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'explode'       	;2
348 158  SEND_VAL_EX/116           ?80       239:'#'              ?1                  	;0
349 158  FETCH_DIM_FUNC_ARG/93     $160=     16?5                 240:'command'       	;2
350 158  SEND_VAR_EX/66            ?96       $160                 ?2                  	;0
351 158  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
352 158  SEPARATE/156              $161=     $161                 ?0                  	;0
353 158  FETCH_DIM_FUNC_ARG/93     $162=     $161                 241:0               	;1
354 158  SEND_VAR_EX/66            ?80       $162                 ?1                  	;0
355 158  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
356 158  SEND_VAR_NO_REF_EX/50     ?80       $163                 ?1                  	;0
357 158  SEND_VAL_EX/116           ?96       242:'.php'           ?2                  	;0
358 158  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
359 158  FETCH_DIM_R/81            $165=     16?9                 $164                	;0
360 158  ASSIGN_DIM/147            ?131      16?5                 232:'command'       	;0
361 158  OP_DATA/137               ?0        $165                 ?0                  	;0
362 159  ASSIGN/38                 ?138      16?7                 243:'XUI CLI'       	;0
363 160  NOP/0                     ?0        ?0                   ?0                  	;1
364 160  GOTO/253                  ?0        ?506                 ?244                	;0
365 163  NOP/0                     ?0        ?0                   ?0                  	;1
366 163  GOTO/253                  ?0        ?534                 ?245                	;0
367 165  ASSIGN_DIM/147            ?139      16?5                 246:'command'       	;0
368 165  OP_DATA/137               ?0        247:'NGINX Master Process' ?0                  	;0
369 166  ASSIGN/38                 ?140      16?7                 248:'NGINX Master'  	;0
370 167  NOP/0                     ?0        ?0                   ?0                  	;1
371 167  GOTO/253                  ?0        ?534                 ?249                	;0
372 170  ECHO/40                   ?0        250:'                                    </td>
									<td><button type="button" class="btn btn-light btn-xs waves-effect waves-light">' ?0                  	;0
373 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'number_format' 	;2
374 171  FETCH_DIM_FUNC_ARG/93     $169=     16?5                 253:'cpu'           	;1
375 171  SEND_VAR_EX/66            ?80       $169                 ?1                  	;0
376 171  SEND_VAL_EX/116           ?96       254:2                ?2                  	;0
377 171  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
378 171  ECHO/40                   ?0        $170                 ?0                  	;0
379 172  ECHO/40                   ?0        255:'%</button><br/><small>avg: ' ?0                  	;0
380 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'number_format' 	;2
381 173  FETCH_DIM_FUNC_ARG/93     $171=     16?5                 258:'load_average'  	;1
382 173  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
383 173  SEND_VAL_EX/116           ?96       259:2                ?2                  	;0
384 173  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
385 173  ECHO/40                   ?0        $172                 ?0                  	;0
386 174  NOP/0                     ?0        ?0                   ?0                  	;1
387 174  GOTO/253                  ?0        ?318                 ?260                	;0
388 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'sprintf'       	;4
389 176  SEND_VAL_EX/116           ?80       263:'%02dh %02dm %02ds' ?1                  	;0
390 176  DIV/4                     #173=     16?11                264:3600            	;0
391 176  SEND_VAL_EX/116           ?96       #173                 ?2                  	;0
392 176  DIV/4                     #174=     16?11                265:60              	;0
393 176  MOD/5                     #175=     #174                 266:60              	;0
394 176  SEND_VAL_EX/116           ?112      #175                 ?3                  	;0
395 176  MOD/5                     #176=     16?11                267:60              	;0
396 176  SEND_VAL_EX/116           ?128      #176                 ?4                  	;0
397 176  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
398 176  ASSIGN/38                 ?150      16?11                $177                	;0
399 177  NOP/0                     ?0        ?0                   ?0                  	;1
400 177  GOTO/253                  ?0        ?413                 ?268                	;0
401 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'sprintf'       	;4
402 179  SEND_VAL_EX/116           ?80       271:'%02dd %02dh %02dm' ?1                  	;0
403 179  DIV/4                     #179=     16?11                272:86400           	;0
404 179  SEND_VAL_EX/116           ?96       #179                 ?2                  	;0
405 179  DIV/4                     #180=     16?11                273:3600            	;0
406 179  MOD/5                     #181=     #180                 274:24              	;0
407 179  SEND_VAL_EX/116           ?112      #181                 ?3                  	;0
408 179  DIV/4                     #182=     16?11                275:60              	;0
409 179  MOD/5                     #183=     #182                 276:60              	;0
410 179  SEND_VAL_EX/116           ?128      #183                 ?4                  	;0
411 179  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
412 179  ASSIGN/38                 ?157      16?11                $184                	;0
413 181  NOP/0                     ?0        ?0                   ?0                  	;1
414 181  GOTO/253                  ?0        ?152                 ?277                	;0
415 184  NOP/0                     ?0        ?0                   ?0                  	;1
416 184  GOTO/253                  ?0        ?241                 ?278                	;0
417 186  ASSIGN_DIM/147            ?158      16?5                 279:'command'       	;0
418 186  OP_DATA/137               ?0        280:'PHP Master Process' ?0                  	;0
419 187  ASSIGN/38                 ?159      16?7                 281:'PHP Master'    	;0
420 188  NOP/0                     ?0        ?0                   ?0                  	;1
421 188  GOTO/253                  ?0        ?241                 ?282                	;0
422 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'stripos'       	;2
423 190  FETCH_DIM_FUNC_ARG/93     $188=     16?5                 285:'command'       	;1
424 190  SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
425 190  SEND_VAL_EX/116           ?96       286:'nginx: master process' ?2                  	;0
426 190  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
427 190  IS_NOT_IDENTICAL/16       #190=     $189                 287:false           	;0
428 190  JMPZ/43                   ?0        #190                 ?431                	;0	>>431
429 191  NOP/0                     ?0        ?0                   ?0                  	;1
430 191  GOTO/253                  ?0        ?367                 ?288                	;0
431 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'stripos'       	;2	<<428
432 193  FETCH_DIM_FUNC_ARG/93     $191=     16?5                 291:'command'       	;1
433 193  SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
434 193  SEND_VAL_EX/116           ?96       292:'nginx: worker process' ?2                  	;0
435 193  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
436 193  IS_NOT_IDENTICAL/16       #193=     $192                 293:false           	;0
437 193  JMPZ/43                   ?0        #193                 ?440                	;0	>>440
438 194  NOP/0                     ?0        ?0                   ?0                  	;1
439 194  GOTO/253                  ?0        ?243                 ?294                	;0
440 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'stripos'       	;2	<<437
441 196  FETCH_DIM_FUNC_ARG/93     $194=     16?5                 297:'command'       	;1
442 196  SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
443 196  SEND_VAL_EX/116           ?96       298:'php-fpm: master process' ?2                  	;0
444 196  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
445 196  IS_NOT_IDENTICAL/16       #196=     $195                 299:false           	;0
446 196  JMPZ/43                   ?0        #196                 ?449                	;0	>>449
447 197  NOP/0                     ?0        ?0                   ?0                  	;1
448 197  GOTO/253                  ?0        ?417                 ?300                	;0
449 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'stripos'       	;2	<<446
450 199  FETCH_DIM_FUNC_ARG/93     $197=     16?5                 303:'command'       	;1
451 199  SEND_VAR_EX/66            ?80       $197                 ?1                  	;0
452 199  SEND_VAL_EX/116           ?96       304:'redis-server'   ?2                  	;0
453 199  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
454 199  IS_NOT_IDENTICAL/16       #199=     $198                 305:false           	;0
455 199  JMPZ/43                   ?0        #199                 ?458                	;0	>>458
456 200  NOP/0                     ?0        ?0                   ?0                  	;1
457 200  GOTO/253                  ?0        ?236                 ?306                	;0
458 202  FETCH_DIM_R/81            $201=     16?5                 308:'command'       	;0	<<455
459 202  CONCAT/8                  #202=     309:'Command: '      $201                	;0
460 202  ASSIGN_DIM/147            ?172      16?5                 307:'command'       	;0
461 202  OP_DATA/137               ?0        #202                 ?0                  	;0
462 203  NOP/0                     ?0        ?0                   ?0                  	;1
463 203  GOTO/253                  ?0        ?193                 ?310                	;0
464 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'sprintf'       	;4
465 206  SEND_VAL_EX/116           ?80       313:'%02dd %02dh %02dm' ?1                  	;0
466 206  DIV/4                     #203=     16?8                 314:86400           	;0
467 206  SEND_VAL_EX/116           ?96       #203                 ?2                  	;0
468 206  DIV/4                     #204=     16?8                 315:3600            	;0
469 206  MOD/5                     #205=     #204                 316:24              	;0
470 206  SEND_VAL_EX/116           ?112      #205                 ?3                  	;0
471 206  DIV/4                     #206=     16?8                 317:60              	;0
472 206  MOD/5                     #207=     #206                 318:60              	;0
473 206  SEND_VAL_EX/116           ?128      #207                 ?4                  	;0
474 206  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
475 206  ASSIGN/38                 ?181      16?8                 $208                	;0
476 208  FETCH_DIM_R/81            $210=     16?5                 319:'time'          	;0
477 208  ASSIGN/38                 ?183      16?11                $210                	;0
478 209  IS_SMALLER_OR_EQUAL/20    #212=     320:86400            16?11               	;0
479 209  JMPZ/43                   ?0        #212                 ?482                	;0	>>482
480 210  NOP/0                     ?0        ?0                   ?0                  	;1
481 210  GOTO/253                  ?0        ?401                 ?321                	;0
482 212  NOP/0                     ?0        ?0                   ?0                  	;1	<<479
483 212  GOTO/253                  ?0        ?388                 ?322                	;0
484 214  FETCH_DIM_R/81            $213=     16?5                 323:'pid'           	;0
485 214  ISSET_ISEMPTY_DIM_OBJ/115 #214=     16?6                 $213                	;33554432
486 214  JMPZ/43                   ?0        #214                 ?489                	;0	>>489
487 215  NOP/0                     ?0        ?0                   ?0                  	;1
488 215  GOTO/253                  ?0        ?493                 ?324                	;0
489 217  FETCH_DIM_R/81            $215=     16?5                 325:'command'       	;0	<<486
490 217  ECHO/40                   ?0        $215                 ?0                  	;0
491 218  NOP/0                     ?0        ?0                   ?0                  	;1
492 218  GOTO/253                  ?0        ?372                 ?326                	;0
493 220  FETCH_DIM_R/81            $216=     16?5                 327:'pid'           	;0
494 220  FETCH_DIM_R/81            $217=     16?6                 $216                	;0
495 220  FETCH_DIM_R/81            $218=     $217                 328:'title'         	;0
496 220  ECHO/40                   ?0        $218                 ?0                  	;0
497 221  NOP/0                     ?0        ?0                   ?0                  	;1
498 221  GOTO/253                  ?0        ?372                 ?329                	;0
499 223  ECHO/40                   ?0        330:'" type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-eye"></i></button></a>
											' ?0                  	;0
500 225  ECHO/40                   ?0        331:'											<button data-toggle="tooltip" data-placement="top" title="" data-original-title="' ?0                  	;0
501 226  FETCH_DIM_R/81            $219=     16?2                 332:'kill_process_info'	;0
502 226  ECHO/40                   ?0        $219                 ?0                  	;0
503 227  ECHO/40                   ?0        333:'" type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="kill(' ?0                  	;0
504 228  NOP/0                     ?0        ?0                   ?0                  	;1
505 228  GOTO/253                  ?0        ?181                 ?334                	;0
506 231  NOP/0                     ?0        ?0                   ?0                  	;1
507 231  GOTO/253                  ?0        ?160                 ?335                	;0
508 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'basename'      	;2
509 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'explode'       	;2
510 233  SEND_VAL_EX/116           ?80       341:' '              ?1                  	;0
511 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'trim'          	;1
512 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'explode'       	;2
513 233  SEND_VAL_EX/116           ?80       346:'#'              ?1                  	;0
514 233  FETCH_DIM_FUNC_ARG/93     $221=     16?5                 347:'command'       	;2
515 233  SEND_VAR_EX/66            ?96       $221                 ?2                  	;0
516 233  DO_FCALL_BY_NAME/131      $222=     ?0                   ?0                  	;0
517 233  SEPARATE/156              $222=     $222                 ?0                  	;0
518 233  FETCH_DIM_FUNC_ARG/93     $223=     $222                 348:0               	;1
519 233  SEND_VAR_EX/66            ?80       $223                 ?1                  	;0
520 233  DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
521 233  SEND_VAR_NO_REF_EX/50     ?96       $224                 ?2                  	;0
522 233  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
523 233  SEPARATE/156              $225=     $225                 ?0                  	;0
524 233  FETCH_DIM_FUNC_ARG/93     $226=     $225                 349:0               	;1
525 233  SEND_VAR_EX/66            ?80       $226                 ?1                  	;0
526 233  SEND_VAL_EX/116           ?96       350:'.php'           ?2                  	;0
527 233  DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
528 233  FETCH_DIM_R/81            $228=     16?9                 $227                	;0
529 233  ASSIGN_DIM/147            ?192      16?5                 336:'command'       	;0
530 233  OP_DATA/137               ?0        $228                 ?0                  	;0
531 234  ASSIGN/38                 ?201      16?7                 351:'XUI CLI'       	;0
532 235  NOP/0                     ?0        ?0                   ?0                  	;1
533 235  GOTO/253                  ?0        ?160                 ?352                	;0
534 238  NOP/0                     ?0        ?0                   ?0                  	;1
535 238  GOTO/253                  ?0        ?343                 ?353                	;0
536 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'basename'      	;2
537 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   357:'explode'       	;2
538 240  SEND_VAL_EX/116           ?80       359:' '              ?1                  	;0
539 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   360:'trim'          	;1
540 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'explode'       	;2
541 240  SEND_VAL_EX/116           ?80       364:'#'              ?1                  	;0
542 240  FETCH_DIM_FUNC_ARG/93     $231=     16?5                 365:'command'       	;2
543 240  SEND_VAR_EX/66            ?96       $231                 ?2                  	;0
544 240  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
545 240  SEPARATE/156              $232=     $232                 ?0                  	;0
546 240  FETCH_DIM_FUNC_ARG/93     $233=     $232                 366:0               	;1
547 240  SEND_VAR_EX/66            ?80       $233                 ?1                  	;0
548 240  DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
549 240  SEND_VAR_NO_REF_EX/50     ?96       $234                 ?2                  	;0
550 240  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
551 240  SEPARATE/156              $235=     $235                 ?0                  	;0
552 240  FETCH_DIM_FUNC_ARG/93     $236=     $235                 367:0               	;1
553 240  SEND_VAR_EX/66            ?80       $236                 ?1                  	;0
554 240  SEND_VAL_EX/116           ?96       368:'.php'           ?2                  	;0
555 240  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
556 240  FETCH_DIM_R/81            $238=     16?10                $237                	;0
557 240  ASSIGN_DIM/147            ?202      16?5                 354:'command'       	;0
558 240  OP_DATA/137               ?0        $238                 ?0                  	;0
559 241  ASSIGN/38                 ?211      16?7                 369:'XUI Cron'      	;0
560 242  NOP/0                     ?0        ?0                   ?0                  	;1
561 242  GOTO/253                  ?0        ?343                 ?370                	;0
562 243  JMP/42                    ?0        ?133                 ?0                  	;0	>>133
563 243  FE_FREE/127               ?0        $71                  ?0                  	;0	<<132
564 246  ECHO/40                   ?0        371:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
565 247  GOTO/253                  ?0        ?943                 ?372                	;0
566 249  ECHO/40                   ?0        373:'                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <table class="table table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Stream ID</th>
                                            <th>Stream Name</th>
                                            <th class="text-center">Bitrate</th>
                                            <th class="text-center">Mount Usage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' ?0                  	;0
567 250  FE_RESET_R/77             $240=     16?12                ?606                	;0
568 250  FE_FETCH_R/78             #241=     $240                 16?13               	;606	>>606	<<605
569 250  ASSIGN/38                 ?214      16?14                #241                	;0
570 251  NOP/0                     ?0        ?0                   ?0                  	;1
571 251  GOTO/253                  ?0        ?598                 ?374                	;0
572 253  ECHO/40                   ?0        16?14                ?0                  	;0
573 254  ECHO/40                   ?0        375:'">'             ?0                  	;0
574 255  FETCH_DIM_R/81            $243=     16?15                16?14               	;0
575 255  FETCH_DIM_R/81            $244=     $243                 376:'stream_display_name'	;0
576 255  ECHO/40                   ?0        $244                 ?0                  	;0
577 256  ECHO/40                   ?0        377:'</a></td>
                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
578 257  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'number_format' 	;2
579 257  FETCH_DIM_FUNC_ARG/93     $245=     16?15                16?14               	;1
580 257  FETCH_DIM_FUNC_ARG/93     $246=     $245                 380:'bitrate'       	;1
581 257  SEND_VAR_EX/66            ?80       $246                 ?1                  	;0
582 257  SEND_VAL_EX/116           ?96       381:0                ?2                  	;0
583 257  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
584 257  ECHO/40                   ?0        $247                 ?0                  	;0
585 258  NOP/0                     ?0        ?0                   ?0                  	;1
586 258  GOTO/253                  ?0        ?587                 ?382                	;0
587 260  ECHO/40                   ?0        383:' Kbps</button></td>
                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
588 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   384:'number_format' 	;2
589 261  DIV/4                     #248=     16?13                386:1024            	;0
590 261  DIV/4                     #249=     #248                 387:1024            	;0
591 261  SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
592 261  SEND_VAL_EX/116           ?96       388:0                ?2                  	;0
593 261  DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
594 261  ECHO/40                   ?0        $250                 ?0                  	;0
595 262  ECHO/40                   ?0        389:' MB</button></td>
                                        </tr>
                                        ' ?0                  	;0
596 264  NOP/0                     ?0        ?0                   ?0                  	;1
597 264  GOTO/253                  ?0        ?605                 ?390                	;0
598 266  ECHO/40                   ?0        391:'                                        <tr>
                                            <td class="text-center"><a class="text-dark" href="stream_view?id=' ?0                  	;0
599 267  ECHO/40                   ?0        16?14                ?0                  	;0
600 268  ECHO/40                   ?0        392:'">'             ?0                  	;0
601 269  ECHO/40                   ?0        16?14                ?0                  	;0
602 270  ECHO/40                   ?0        393:'</a></td>
                                            <td><a class="text-dark" href="stream_view?id=' ?0                  	;0
603 271  NOP/0                     ?0        ?0                   ?0                  	;1
604 271  GOTO/253                  ?0        ?572                 ?394                	;0
605 272  JMP/42                    ?0        ?568                 ?0                  	;0	>>568
606 272  FE_FREE/127               ?0        $240                 ?0                  	;0	<<567
607 275  ECHO/40                   ?0        395:'                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                ' ?0                  	;0
608 277  GOTO/253                  ?0        ?609                 ?396                	;0
609 280  ECHO/40                   ?0        397:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<form id="line_activity_search">
							<div class="form-group row mb-4">
								<div class="col-md-6">
									<input type="text" class="form-control" id="live_search" value="" placeholder="' ?0                  	;0
610 281  FETCH_DIM_R/81            $251=     16?2                 398:'search_processes'	;0
611 281  ECHO/40                   ?0        $251                 ?0                  	;0
612 282  ECHO/40                   ?0        399:'...">
								</div>
								<label class="col-md-1 col-form-label text-center" for="live_filter">' ?0                  	;0
613 283  FETCH_DIM_R/81            $252=     16?2                 400:'server'        	;0
614 283  ECHO/40                   ?0        $252                 ?0                  	;0
615 284  GOTO/253                  ?0        ?761                 ?401                	;0
616 286  ASSIGN/38                 ?225      16?16                402:array (
)       	;0
617 287  FE_RESET_R/77             $254=     16?17                ?628                	;0
618 287  FE_FETCH_R/78             #255=     $254                 16?13               	;628	>>628	<<627
619 287  ASSIGN/38                 ?228      16?14                #255                	;0
620 288  ISSET_ISEMPTY_DIM_OBJ/115 #257=     16?15                16?14               	;33554432
621 288  BOOL_NOT/13               #258=     #257                 ?0                  	;0
622 288  JMPZ/43                   ?0        #258                 ?625                	;0	>>625
623 289  NOP/0                     ?0        ?0                   ?0                  	;1
624 289  GOTO/253                  ?0        ?627                 ?403                	;0
625 291  ASSIGN_DIM/147            ?231      16?16                16?14               	;0	<<622
626 291  OP_DATA/137               ?0        16?13                ?0                  	;0
627 293  JMP/42                    ?0        ?618                 ?0                  	;0	>>618
628 293  FE_FREE/127               ?0        $254                 ?0                  	;0	<<617
629 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   404:'asort'         	;1
630 296  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
631 296  DO_FCALL_BY_NAME/131      ?232      ?0                   ?0                  	;0
632 297  INIT_FCALL_BY_NAME/59     ?0        ?0                   406:'array_reverse' 	;2
633 297  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
634 297  SEND_VAL_EX/116           ?96       408:true             ?2                  	;0
635 297  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
636 297  ASSIGN/38                 ?234      16?16                $261                	;0
637 298  GOTO/253                  ?0        ?833                 ?409                	;0
638 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'header'        	;1
639 300  FETCH_STATIC_PROP_R/173   $263=     412:'rRequest'       413:'XUI'           	;0
640 300  FETCH_DIM_R/81            $264=     $263                 415:'server'        	;0
641 300  CONCAT/8                  #265=     416:'Location: ./process_monitor?server=' $264                	;0
642 300  SEND_VAL_EX/116           ?80       #265                 ?1                  	;0
643 300  DO_FCALL_BY_NAME/131      ?238      ?0                   ?0                  	;0
644 301  EXIT/79                   ?0        ?0                   ?0                  	;0
645 303  FETCH_STATIC_PROP_IS/176  $267=     417:'rRequest'       418:'XUI'           	;0
646 303  ISSET_ISEMPTY_DIM_OBJ/115 #268=     $267                 420:'clear_s'       	;33554432
647 303  BOOL_NOT/13               #269=     #268                 ?0                  	;0
648 303  JMPZ/43                   ?0        #269                 ?650                	;0	>>650
649 304  GOTO/253                  ?0        ?908                 ?421                	;0
650 306  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'DdE85bb00B3A8AD3'	;1	<<648
651 306  FETCH_STATIC_PROP_FUNC_ARG/177 $270=     424:'rRequest'       425:'XUI'           	;1
652 306  FETCH_DIM_FUNC_ARG/93     $271=     $270                 427:'server'        	;1
653 306  SEND_VAR_EX/66            ?80       $271                 ?1                  	;0
654 306  DO_FCALL_BY_NAME/131      ?244      ?0                   ?0                  	;0
655 307  GOTO/253                  ?0        ?901                 ?428                	;0
656 309  INIT_FCALL_BY_NAME/59     ?0        ?0                   429:'array_slice'   	;4
657 309  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
658 309  SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
659 309  SEND_VAR_EX/66            ?112      16?18                ?3                  	;0
660 309  SEND_VAL_EX/116           ?128      431:true             ?4                  	;0
661 309  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
662 309  ASSIGN/38                 ?246      16?12                $273                	;0
663 310  IS_SMALLER/19             #275=     432:0                16?18               	;0
664 310  BOOL_NOT/13               #276=     #275                 ?0                  	;0
665 310  JMPZ/43                   ?0        #276                 ?667                	;0	>>667
666 311  GOTO/253                  ?0        ?608                 ?433                	;0
667 313  ECHO/40                   ?0        434:'                    <div class="row" style="overflow-x:auto;">
                        <div class="col-md-6">
                            <div class="card-box">
                                <table class="table table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Stream ID</th>
                                            <th>Stream Name</th>
                                            <th class="text-center">Bitrate</th>
                                            <th class="text-center">Mount Usage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' ?0                  	;0	<<665
668 314  FE_RESET_R/77             $277=     16?19                ?707                	;0
669 314  FE_FETCH_R/78             #278=     $277                 16?13               	;707	>>707	<<706
670 314  ASSIGN/38                 ?251      16?14                #278                	;0
671 315  NOP/0                     ?0        ?0                   ?0                  	;1
672 315  GOTO/253                  ?0        ?699                 ?435                	;0
673 317  ECHO/40                   ?0        436:' Kbps</button></td>
                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
674 318  INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'number_format' 	;2
675 318  DIV/4                     #280=     16?13                439:1024            	;0
676 318  DIV/4                     #281=     #280                 440:1024            	;0
677 318  SEND_VAL_EX/116           ?80       #281                 ?1                  	;0
678 318  SEND_VAL_EX/116           ?96       441:0                ?2                  	;0
679 318  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
680 318  ECHO/40                   ?0        $282                 ?0                  	;0
681 319  ECHO/40                   ?0        442:' MB</button></td>
                                        </tr>
                                        ' ?0                  	;0
682 321  NOP/0                     ?0        ?0                   ?0                  	;1
683 321  GOTO/253                  ?0        ?706                 ?443                	;0
684 323  ECHO/40                   ?0        16?14                ?0                  	;0
685 324  ECHO/40                   ?0        444:'">'             ?0                  	;0
686 325  FETCH_DIM_R/81            $283=     16?15                16?14               	;0
687 325  FETCH_DIM_R/81            $284=     $283                 445:'stream_display_name'	;0
688 325  ECHO/40                   ?0        $284                 ?0                  	;0
689 326  ECHO/40                   ?0        446:'</a></td>
                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
690 327  INIT_FCALL_BY_NAME/59     ?0        ?0                   447:'number_format' 	;2
691 327  FETCH_DIM_FUNC_ARG/93     $285=     16?15                16?14               	;1
692 327  FETCH_DIM_FUNC_ARG/93     $286=     $285                 449:'bitrate'       	;1
693 327  SEND_VAR_EX/66            ?80       $286                 ?1                  	;0
694 327  SEND_VAL_EX/116           ?96       450:0                ?2                  	;0
695 327  DO_FCALL_BY_NAME/131      $287=     ?0                   ?0                  	;0
696 327  ECHO/40                   ?0        $287                 ?0                  	;0
697 328  NOP/0                     ?0        ?0                   ?0                  	;1
698 328  GOTO/253                  ?0        ?673                 ?451                	;0
699 330  ECHO/40                   ?0        452:'                                        <tr>
                                            <td class="text-center"><a class="text-dark" href="stream_view?id=' ?0                  	;0
700 331  ECHO/40                   ?0        16?14                ?0                  	;0
701 332  ECHO/40                   ?0        453:'">'             ?0                  	;0
702 333  ECHO/40                   ?0        16?14                ?0                  	;0
703 334  ECHO/40                   ?0        454:'</a></td>
                                            <td><a class="text-dark" href="stream_view?id=' ?0                  	;0
704 335  NOP/0                     ?0        ?0                   ?0                  	;1
705 335  GOTO/253                  ?0        ?684                 ?455                	;0
706 336  JMP/42                    ?0        ?669                 ?0                  	;0	>>669
707 336  FE_FREE/127               ?0        $277                 ?0                  	;0	<<668
708 339  GOTO/253                  ?0        ?566                 ?456                	;0
709 341  ECHO/40                   ?0        457:'</th>
									<th class="text-center">' ?0                  	;0
710 342  FETCH_DIM_R/81            $288=     16?2                 458:'used'          	;0
711 342  ECHO/40                   ?0        $288                 ?0                  	;0
712 343  ECHO/40                   ?0        459:' %</th>
									<th class="text-center">' ?0                  	;0
713 344  FETCH_DIM_R/81            $289=     16?2                 460:'actions'       	;0
714 344  ECHO/40                   ?0        $289                 ?0                  	;0
715 345  ECHO/40                   ?0        461:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
716 346  GOTO/253                  ?0        ?1                   ?462                	;0
717 348  INCLUDE_OR_EVAL/73        ?262      463:'session.php'    ?0                  	;2	<<0
718 349  INCLUDE_OR_EVAL/73        ?263      464:'functions.php'  ?0                  	;2
719 350  INIT_FCALL_BY_NAME/59     ?0        ?0                   465:'e6D500e19634d513'	;0
720 350  DO_FCALL_BY_NAME/131      $292=     ?0                   ?0                  	;0
721 350  JMPZ/43                   ?0        $292                 ?723                	;0	>>723
722 351  GOTO/253                  ?0        ?725                 ?467                	;0
723 353  INIT_FCALL_BY_NAME/59     ?0        ?0                   468:'e72F42a93714Ba87'	;0	<<721
724 353  DO_FCALL_BY_NAME/131      ?265      ?0                   ?0                  	;0
725 355  GOTO/253                  ?0        ?854                 ?470                	;0
726 357  ECHO/40                   ?0        471:'                <div class="alert alert-danger text-center" role="alert">
                    <strong>You are running out of space on one or more of your mount points. You should resolve this before issues occur.</strong>
                </div>
                ' ?0                  	;0
727 359  INIT_FCALL_BY_NAME/59     ?0        ?0                   472:'getStreamsRamdisk'	;1
728 359  FETCH_STATIC_PROP_FUNC_ARG/177 $294=     474:'rRequest'       475:'XUI'           	;1
729 359  FETCH_DIM_FUNC_ARG/93     $295=     $294                 477:'server'        	;1
730 359  SEND_VAR_EX/66            ?80       $295                 ?1                  	;0
731 359  DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
732 359  ASSIGN/38                 ?269      16?17                $296                	;0
733 360  INIT_METHOD_CALL/112      ?0        16?20                478:'query'         	;2
734 360  SEND_VAL_EX/116           ?80       480:'SELECT `stream_id`, `stream_display_name`, `bitrate` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0;' ?1                  	;0
735 360  FETCH_STATIC_PROP_FUNC_ARG/177 $298=     481:'rRequest'       482:'XUI'           	;2
736 360  FETCH_DIM_FUNC_ARG/93     $299=     $298                 484:'server'        	;2
737 360  SEND_VAR_EX/66            ?96       $299                 ?2                  	;0
738 360  DO_FCALL/60               ?272      ?0                   ?0                  	;0
739 361  INIT_METHOD_CALL/112      ?0        16?20                485:'get_rows'      	;2
740 361  SEND_VAL_EX/116           ?80       487:true             ?1                  	;0
741 361  SEND_VAL_EX/116           ?96       488:'stream_id'      ?2                  	;0
742 361  DO_FCALL/60               $301=     ?0                   ?0                  	;0
743 361  ASSIGN/38                 ?274      16?15                $301                	;0
744 362  GOTO/253                  ?0        ?616                 ?489                	;0
745 364  ECHO/40                   ?0        490:'</th>
									<th>' ?0                  	;0
746 365  FETCH_DIM_R/81            $303=     16?2                 491:'type'          	;0
747 365  ECHO/40                   ?0        $303                 ?0                  	;0
748 366  ECHO/40                   ?0        492:'</th>
									<th>' ?0                  	;0
749 367  FETCH_DIM_R/81            $304=     16?2                 493:'process'       	;0
750 367  ECHO/40                   ?0        $304                 ?0                  	;0
751 368  ECHO/40                   ?0        494:'</th>
									<th>' ?0                  	;0
752 369  GOTO/253                  ?0        ?892                 ?495                	;0
753 371  ECHO/40                   ?0        496:'" style="margin-right:10px;">
									<button type="button" class="btn btn-dark waves-effect waves-light btn-sm">
										<i class="mdi mdi-refresh"></i> ' ?0                  	;0
754 372  FETCH_DIM_R/81            $305=     16?2                 497:'refresh'       	;0
755 372  ECHO/40                   ?0        $305                 ?0                  	;0
756 373  ECHO/40                   ?0        498:'									</button>
								</a>
							</li>
						</ol>
					</div>
					<h4 class="page-title">' ?0                  	;0
757 374  FETCH_DIM_R/81            $306=     16?2                 499:'process_monitor'	;0
758 374  ECHO/40                   ?0        $306                 ?0                  	;0
759 375  ECHO/40                   ?0        500:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
760 376  GOTO/253                  ?0        ?787                 ?501                	;0
761 378  ECHO/40                   ?0        502:'</label>
								<div class="col-md-3">
									<select id="live_filter" class="form-control" data-toggle="select2">
										' ?0                  	;0
762 379  FE_RESET_R/77             $307=     16?21                ?782                	;0
763 379  FE_FETCH_R/78             ?0        $307                 16?22               	;782	>>782	<<781
764 380  ECHO/40                   ?0        503:'										<option value="' ?0                  	;0
765 381  FETCH_DIM_R/81            $308=     16?22                504:'id'            	;0
766 381  ECHO/40                   ?0        $308                 ?0                  	;0
767 382  ECHO/40                   ?0        505:'"'              ?0                  	;0
768 383  FETCH_STATIC_PROP_R/173   $309=     506:'rRequest'       507:'XUI'           	;0
769 383  FETCH_DIM_R/81            $310=     $309                 509:'server'        	;0
770 383  FETCH_DIM_R/81            $311=     16?22                510:'id'            	;0
771 383  IS_EQUAL/17               #312=     $310                 $311                	;0
772 383  BOOL_NOT/13               #313=     #312                 ?0                  	;0
773 383  JMPZ/43                   ?0        #313                 ?776                	;0	>>776
774 384  NOP/0                     ?0        ?0                   ?0                  	;1
775 384  GOTO/253                  ?0        ?777                 ?511                	;0
776 386  ECHO/40                   ?0        512:' selected'      ?0                  	;0	<<773
777 388  ECHO/40                   ?0        513:'>'              ?0                  	;0
778 389  FETCH_DIM_R/81            $314=     16?22                514:'server_name'   	;0
779 389  ECHO/40                   ?0        $314                 ?0                  	;0
780 390  ECHO/40                   ?0        515:'</option>
										' ?0                  	;0
781 391  JMP/42                    ?0        ?763                 ?0                  	;0	>>763
782 391  FE_FREE/127               ?0        $307                 ?0                  	;0	<<762
783 394  ECHO/40                   ?0        516:'									</select>
								</div>
								<label class="col-md-1 col-form-label text-center" for="live_show_entries">' ?0                  	;0
784 395  FETCH_DIM_R/81            $315=     16?2                 517:'show'          	;0
785 395  ECHO/40                   ?0        $315                 ?0                  	;0
786 396  GOTO/253                  ?0        ?921                 ?518                	;0
787 398  JMPZ/43                   ?0        16?23                ?789                	;0	>>789
788 399  GOTO/253                  ?0        ?609                 ?519                	;0
789 401  INIT_FCALL_BY_NAME/59     ?0        ?0                   520:'count'         	;1	<<787
790 401  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
791 401  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
792 401  IS_SMALLER/19             #317=     522:0                $316                	;0
793 401  BOOL_NOT/13               #318=     #317                 ?0                  	;0
794 401  JMPZ/43                   ?0        #318                 ?796                	;0	>>796
795 402  GOTO/253                  ?0        ?122                 ?523                	;0
796 404  ECHO/40                   ?0        524:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table class="table table-borderless mb-0">
							<thead class="thead-light">
								<tr>
									<th>' ?0                  	;0	<<794
797 405  FETCH_DIM_R/81            $319=     16?2                 525:'mount_point'   	;0
798 405  ECHO/40                   ?0        $319                 ?0                  	;0
799 406  ECHO/40                   ?0        526:'</th>
									<th class="text-center">' ?0                  	;0
800 407  GOTO/253                  ?0        ?801                 ?527                	;0
801 409  FETCH_DIM_R/81            $320=     16?2                 528:'size'          	;0
802 409  ECHO/40                   ?0        $320                 ?0                  	;0
803 410  ECHO/40                   ?0        529:'</th>
									<th class="text-center">' ?0                  	;0
804 411  FETCH_DIM_R/81            $321=     16?2                 530:'used'          	;0
805 411  ECHO/40                   ?0        $321                 ?0                  	;0
806 412  ECHO/40                   ?0        531:'</th>
									<th class="text-center">' ?0                  	;0
807 413  FETCH_DIM_R/81            $322=     16?2                 532:'available'     	;0
808 413  ECHO/40                   ?0        $322                 ?0                  	;0
809 414  GOTO/253                  ?0        ?709                 ?533                	;0
810 416  FETCH_IS/89               $323=     534:'_SERVER'        ?0                  	;0
811 416  ISSET_ISEMPTY_DIM_OBJ/115 #324=     $323                 535:'HTTP_X_REQUESTED_WITH'	;16777216
812 416  BOOL_NOT/13               #325=     #324                 ?0                  	;0
813 416  JMPZ_EX/46                #325=     #325                 ?821                	;0	>>821
814 416  INIT_FCALL_BY_NAME/59     ?0        ?0                   536:'strtolower'    	;1
815 416  FETCH_FUNC_ARG/92         $326=     538:'_SERVER'        ?0                  	;1
816 416  FETCH_DIM_FUNC_ARG/93     $327=     $326                 539:'HTTP_X_REQUESTED_WITH'	;1
817 416  SEND_VAR_EX/66            ?80       $327                 ?1                  	;0
818 416  DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
819 416  IS_EQUAL/17               #329=     $328                 540:'xmlhttprequest'	;0
820 416  BOOL/52                   #325=     #329                 ?0                  	;0
821 416  BOOL_NOT/13               #330=     #325                 ?0                  	;0	<<813
822 416  JMPZ/43                   ?0        #330                 ?824                	;0	>>824
823 417  GOTO/253                  ?0        ?825                 ?541                	;0
824 419  ECHO/40                   ?0        542:' style="display: none;"' ?0                  	;0	<<822
825 421  ECHO/40                   ?0        543:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li>
								<a href="process_monitor?server=' ?0                  	;0
826 422  INIT_FCALL_BY_NAME/59     ?0        ?0                   544:'intval'        	;1
827 422  FETCH_STATIC_PROP_FUNC_ARG/177 $331=     546:'rRequest'       547:'XUI'           	;1
828 422  FETCH_DIM_FUNC_ARG/93     $332=     $331                 549:'server'        	;1
829 422  SEND_VAR_EX/66            ?80       $332                 ?1                  	;0
830 422  DO_FCALL_BY_NAME/131      $333=     ?0                   ?0                  	;0
831 422  ECHO/40                   ?0        $333                 ?0                  	;0
832 423  GOTO/253                  ?0        ?753                 ?550                	;0
833 425  INIT_FCALL_BY_NAME/59     ?0        ?0                   551:'ceil'          	;1
834 425  INIT_FCALL_BY_NAME/59     ?0        ?0                   553:'count'         	;1
835 425  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
836 425  DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
837 425  DIV/4                     #335=     $334                 555:2.0             	;0
838 425  SEND_VAL_EX/116           ?80       #335                 ?1                  	;0
839 425  DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
840 425  ASSIGN/38                 ?309      16?18                $336                	;0
841 426  IS_SMALLER/19             #338=     556:10               16?18               	;0
842 426  BOOL_NOT/13               #339=     #338                 ?0                  	;0
843 426  JMPZ/43                   ?0        #339                 ?845                	;0	>>845
844 427  GOTO/253                  ?0        ?846                 ?557                	;0
845 429  ASSIGN/38                 ?312      16?18                558:10              	;0	<<843
846 431  INIT_FCALL_BY_NAME/59     ?0        ?0                   559:'array_slice'   	;4
847 431  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
848 431  SEND_VAL_EX/116           ?96       561:0                ?2                  	;0
849 431  SEND_VAR_EX/66            ?112      16?18                ?3                  	;0
850 431  SEND_VAL_EX/116           ?128      562:true             ?4                  	;0
851 431  DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
852 431  ASSIGN/38                 ?314      16?19                $341                	;0
853 432  GOTO/253                  ?0        ?656                 ?563                	;0
854 434  FETCH_STATIC_PROP_IS/176  $343=     564:'rRequest'       565:'XUI'           	;0
855 434  ISSET_ISEMPTY_DIM_OBJ/115 #344=     $343                 567:'server'        	;33554432
856 434  BOOL_NOT/13               #345=     #344                 ?0                  	;0
857 434  JMPNZ_EX/47               #345=     #345                 ?863                	;0	>>863
858 434  FETCH_STATIC_PROP_R/173   $346=     568:'rRequest'       569:'XUI'           	;0
859 434  FETCH_DIM_R/81            $347=     $346                 571:'server'        	;0
860 434  ISSET_ISEMPTY_DIM_OBJ/115 #348=     16?21                $347                	;33554432
861 434  BOOL_NOT/13               #349=     #348                 ?0                  	;0
862 434  BOOL/52                   #345=     #349                 ?0                  	;0
863 434  BOOL_NOT/13               #350=     #345                 ?0                  	;0	<<857
864 434  JMPZ/43                   ?0        #350                 ?866                	;0	>>866
865 435  GOTO/253                  ?0        ?870                 ?572                	;0
866 437  FETCH_CONSTANT/99         #353=     ?0                   577:'SERVER_ID'     	;16	<<864
867 437  FETCH_STATIC_PROP_W/174   $351=     573:'rRequest'       574:'XUI'           	;0
868 437  ASSIGN_DIM/147            ?324      $351                 576:'server'        	;0
869 437  OP_DATA/137               ?0        #353                 ?0                  	;0
870 439  FETCH_STATIC_PROP_IS/176  $354=     580:'rRequest'       581:'XUI'           	;0
871 439  ISSET_ISEMPTY_DIM_OBJ/115 #355=     $354                 583:'clear'         	;33554432
872 439  BOOL_NOT/13               #356=     #355                 ?0                  	;0
873 439  JMPZ/43                   ?0        #356                 ?875                	;0	>>875
874 440  GOTO/253                  ?0        ?645                 ?584                	;0
875 442  INIT_FCALL_BY_NAME/59     ?0        ?0                   585:'FD0E20dFF7028A69'	;1	<<873
876 442  FETCH_STATIC_PROP_FUNC_ARG/177 $357=     587:'rRequest'       588:'XUI'           	;1
877 442  FETCH_DIM_FUNC_ARG/93     $358=     $357                 590:'server'        	;1
878 442  SEND_VAR_EX/66            ?80       $358                 ?1                  	;0
879 442  DO_FCALL_BY_NAME/131      ?331      ?0                   ?0                  	;0
880 443  GOTO/253                  ?0        ?638                 ?591                	;0
881 445  INIT_FCALL_BY_NAME/59     ?0        ?0                   592:'C87bc8E30A2b322d'	;1
882 445  FETCH_STATIC_PROP_FUNC_ARG/177 $360=     594:'rRequest'       595:'XUI'           	;1
883 445  FETCH_DIM_FUNC_ARG/93     $361=     $360                 597:'server'        	;1
884 445  SEND_VAR_EX/66            ?80       $361                 ?1                  	;0
885 445  DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
886 445  ASSIGN/38                 ?335      16?4                 $362                	;0
887 446  ASSIGN/38                 ?336      16?24                598:array (
  'D' => 'Uninterruptible Sleep',
  'I' => 'Idle',
  'R' => 'Running',
  'S' => 'Interruptible Sleep',
  'T' => 'Stopped',
  'W' => 'Paging',
  'X' => 'Dead',
  'Z' => 'Zombie',
)	;0
888 447  ASSIGN/38                 ?337      16?25                599:'Process Monitor'	;0
889 448  INCLUDE_OR_EVAL/73        ?338      600:'header.php'     ?0                  	;2
890 449  ECHO/40                   ?0        601:'<div class="wrapper"' ?0                  	;0
891 450  GOTO/253                  ?0        ?810                 ?602                	;0
892 452  FETCH_DIM_R/81            $367=     16?2                 603:'cpu_%'         	;0
893 452  ECHO/40                   ?0        $367                 ?0                  	;0
894 453  ECHO/40                   ?0        604:'</th>
									<th>' ?0                  	;0
895 454  FETCH_DIM_R/81            $368=     16?2                 605:'mem_mb'        	;0
896 454  ECHO/40                   ?0        $368                 ?0                  	;0
897 455  ECHO/40                   ?0        606:'</th>
									<th>Runtime</th>
                                    <th>CPU Time</th>
									<th>' ?0                  	;0
898 456  FETCH_DIM_R/81            $369=     16?2                 607:'actions'       	;0
899 456  ECHO/40                   ?0        $369                 ?0                  	;0
900 457  GOTO/253                  ?0        ?131                 ?608                	;0
901 459  INIT_FCALL_BY_NAME/59     ?0        ?0                   609:'header'        	;1
902 459  FETCH_STATIC_PROP_R/173   $370=     611:'rRequest'       612:'XUI'           	;0
903 459  FETCH_DIM_R/81            $371=     $370                 614:'server'        	;0
904 459  CONCAT/8                  #372=     615:'Location: ./process_monitor?server=' $371                	;0
905 459  SEND_VAL_EX/116           ?80       #372                 ?1                  	;0
906 459  DO_FCALL_BY_NAME/131      ?345      ?0                   ?0                  	;0
907 460  EXIT/79                   ?0        ?0                   ?0                  	;0
908 462  INIT_FCALL_BY_NAME/59     ?0        ?0                   616:'Df7F787e9f296801'	;1
909 462  FETCH_STATIC_PROP_FUNC_ARG/177 $374=     618:'rRequest'       619:'XUI'           	;1
910 462  FETCH_DIM_FUNC_ARG/93     $375=     $374                 621:'server'        	;1
911 462  SEND_VAR_EX/66            ?80       $375                 ?1                  	;0
912 462  DO_FCALL_BY_NAME/131      $376=     ?0                   ?0                  	;0
913 462  ASSIGN/38                 ?349      16?6                 $376                	;0
914 463  INIT_FCALL_BY_NAME/59     ?0        ?0                   622:'C2B0C0f9dd458149'	;1
915 463  FETCH_STATIC_PROP_FUNC_ARG/177 $378=     624:'rRequest'       625:'XUI'           	;1
916 463  FETCH_DIM_FUNC_ARG/93     $379=     $378                 627:'server'        	;1
917 463  SEND_VAR_EX/66            ?80       $379                 ?1                  	;0
918 463  DO_FCALL_BY_NAME/131      $380=     ?0                   ?0                  	;0
919 463  ASSIGN/38                 ?353      16?0                 $380                	;0
920 464  GOTO/253                  ?0        ?881                 ?628                	;0
921 466  ECHO/40                   ?0        629:'</label>
								<div class="col-md-1">
									<select id="live_show_entries" class="form-control" data-toggle="select2">
										' ?0                  	;0
922 467  FE_RESET_R/77             $382=     630:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?938                	;0
923 467  FE_FETCH_R/78             ?0        $382                 16?26               	;938	>>938	<<937
924 468  ECHO/40                   ?0        631:'										<option' ?0                  	;0
925 469  FETCH_DIM_R/81            $383=     16?27                632:'default_entries'	;0
926 469  IS_EQUAL/17               #384=     $383                 16?26               	;0
927 469  BOOL_NOT/13               #385=     #384                 ?0                  	;0
928 469  JMPZ/43                   ?0        #385                 ?931                	;0	>>931
929 470  NOP/0                     ?0        ?0                   ?0                  	;1
930 470  GOTO/253                  ?0        ?932                 ?633                	;0
931 472  ECHO/40                   ?0        634:' selected'      ?0                  	;0	<<928
932 474  ECHO/40                   ?0        635:' value="'       ?0                  	;0
933 475  ECHO/40                   ?0        16?26                ?0                  	;0
934 476  ECHO/40                   ?0        636:'">'             ?0                  	;0
935 477  ECHO/40                   ?0        16?26                ?0                  	;0
936 478  ECHO/40                   ?0        637:'</option>
										' ?0                  	;0
937 479  JMP/42                    ?0        ?923                 ?0                  	;0	>>923
938 479  FE_FREE/127               ?0        $382                 ?0                  	;0	<<922
939 482  ECHO/40                   ?0        638:'									</select>
								</div>
							</div>
						</form>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th>' ?0                  	;0
940 483  FETCH_DIM_R/81            $386=     16?2                 639:'pid'           	;0
941 483  ECHO/40                   ?0        $386                 ?0                  	;0
942 484  GOTO/253                  ?0        ?745                 ?640                	;0
943 486  INCLUDE_OR_EVAL/73        ?359      641:'footer.php'     ?0                  	;2
944 487  NOP/0                     ?0        642:1                ?0                  	;4294967295
*/

?>