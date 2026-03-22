<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?14                  ?0                  	;0	>>14
1   6    ECHO/40                   ?0        1:'									</select>
								</div>
							</div>
						</form>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
                                    <th>RTMP URL</th>
                                    <th class="text-center">Publisher IP</th>
                                    <th class="text-center">Uptime</th>
                                    <th class="text-center">Clients</th>
                                    <th class="text-center">Stream Info</th>
                                    <th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
                                ' ?0                  	;0
2   7    FETCH_DIM_R/81            $14=      16?1                 2:'server'          	;0
3   7    FETCH_DIM_R/81            $15=      $14                  3:'application'     	;0
4   7    FETCH_DIM_R/81            $16=      $15                  4:'live'            	;0
5   7    FETCH_DIM_R/81            $17=      $16                  5:'stream'          	;0
6   7    ASSIGN/38                 ?4        16?0                 $17                 	;0
7   8    ISSET_ISEMPTY_DIM_OBJ/115 #19=      16?0                 6:'name'            	;33554432
8   8    BOOL_NOT/13               #20=      #19                  ?0                  	;0
9   8    JMPZ/43                   ?0        #20                  ?11                 	;0	>>11
10  9    GOTO/253                  ?0        ?99                  ?7                  	;0
11  11   INIT_ARRAY/71             #21=      16?0                 ?0                  	;4	<<9
12  11   ASSIGN/38                 ?8        16?0                 #21                 	;0
13  12   GOTO/253                  ?0        ?99                  ?8                  	;0
14  14   INCLUDE_OR_EVAL/73        ?9        9:'session.php'      ?0                  	;2	<<0
15  15   INCLUDE_OR_EVAL/73        ?10       10:'functions.php'   ?0                  	;2
16  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'e6D500E19634d513'	;0
17  16   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
18  16   JMPZ/43                   ?0        $25                  ?20                 	;0	>>20
19  17   GOTO/253                  ?0        ?22                  ?13                 	;0
20  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'e72F42a93714ba87'	;0	<<18
21  19   DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
22  21   GOTO/253                  ?0        ?315                 ?16                 	;0
23  24   ROPE_INIT/54              #28=      ?0                   17:'<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed\'>'	;3
24  24   ROPE_ADD/55               #28=      #28                  16?2                	;1
25  24   ROPE_END/56               #27=      #28                  18:'</button>'      	;2
26  24   ECHO/40                   ?0        #27                  ?0                  	;0
27  25   ECHO/40                   ?0        19:'                                    </td>
									<td class="text-center">' ?0                  	;0
28  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'number_format'  	;2
29  26   FETCH_DIM_R/81            $30=      16?1                 22:'bw_in'          	;0
30  26   DIV/4                     #31=      $30                  23:1000             	;0
31  26   DIV/4                     #32=      #31                  24:1000             	;0
32  26   SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
33  26   SEND_VAL_EX/116           ?96       25:2                 ?2                  	;0
34  26   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
35  26   ECHO/40                   ?0        $33                  ?0                  	;0
36  27   ECHO/40                   ?0        26:' Mbps</td>
                                    <td class="text-center">' ?0                  	;0
37  28   GOTO/253                  ?0        ?47                  ?27                 	;0
38  30   FETCH_DIM_R/81            $34=      16?1                 28:'nginx_version'  	;0
39  30   ECHO/40                   ?0        $34                  ?0                  	;0
40  31   ECHO/40                   ?0        29:'</td>
                                    <td class="text-center">' ?0                  	;0
41  32   FETCH_DIM_R/81            $35=      16?1                 30:'nginx_http_flv_version'	;0
42  32   ECHO/40                   ?0        $35                  ?0                  	;0
43  33   ECHO/40                   ?0        31:'</td>
									<td class="text-center">
                                        ' ?0                  	;0
44  34   FETCH_DIM_R/81            $36=      16?1                 32:'uptime'         	;0
45  34   ASSIGN/38                 ?23       16?2                 $36                 	;0
46  35   GOTO/253                  ?0        ?369                 ?33                 	;0
47  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'number_format'  	;2
48  37   FETCH_DIM_R/81            $38=      16?1                 36:'bw_out'         	;0
49  37   DIV/4                     #39=      $38                  37:1000             	;0
50  37   DIV/4                     #40=      #39                  38:1000             	;0
51  37   SEND_VAL_EX/116           ?80       #40                  ?1                  	;0
52  37   SEND_VAL_EX/116           ?96       39:2                 ?2                  	;0
53  37   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
54  37   ECHO/40                   ?0        $41                  ?0                  	;0
55  38   ECHO/40                   ?0        40:' Mbps</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<form id="line_activity_search">
							<div class="form-group row mb-4">
								<div class="col-md-4">
									<input type="text" class="form-control" id="live_search" value="" placeholder="Search Streams...">
								</div>
								<label class="col-md-1 col-form-label text-center" for="live_filter">' ?0                  	;0
56  39   FETCH_DIM_R/81            $42=      16?3                 41:'server'         	;0
57  39   ECHO/40                   ?0        $42                  ?0                  	;0
58  40   ECHO/40                   ?0        42:'</label>
								<div class="col-md-4">
									<select id="live_filter" class="form-control" data-toggle="select2">
										' ?0                  	;0
59  41   FE_RESET_R/77             $43=      16?4                 ?79                 	;0
60  41   FE_FETCH_R/78             ?0        $43                  16?5                	;79	>>79	<<78
61  42   ECHO/40                   ?0        43:'										<option value="' ?0                  	;0
62  43   FETCH_DIM_R/81            $44=      16?5                 44:'id'             	;0
63  43   ECHO/40                   ?0        $44                  ?0                  	;0
64  44   ECHO/40                   ?0        45:'"'               ?0                  	;0
65  45   FETCH_STATIC_PROP_R/173   $45=      46:'rRequest'        47:'XUI'            	;0
66  45   FETCH_DIM_R/81            $46=      $45                  49:'server'         	;0
67  45   FETCH_DIM_R/81            $47=      16?5                 50:'id'             	;0
68  45   IS_EQUAL/17               #48=      $46                  $47                 	;0
69  45   BOOL_NOT/13               #49=      #48                  ?0                  	;0
70  45   JMPZ/43                   ?0        #49                  ?73                 	;0	>>73
71  46   NOP/0                     ?0        ?0                   ?0                  	;1
72  46   GOTO/253                  ?0        ?74                  ?51                 	;0
73  48   ECHO/40                   ?0        52:' selected'       ?0                  	;0	<<70
74  50   ECHO/40                   ?0        53:'>'               ?0                  	;0
75  51   FETCH_DIM_R/81            $50=      16?5                 54:'server_name'    	;0
76  51   ECHO/40                   ?0        $50                  ?0                  	;0
77  52   ECHO/40                   ?0        55:'</option>
										' ?0                  	;0
78  53   JMP/42                    ?0        ?60                  ?0                  	;0	>>60
79  53   FE_FREE/127               ?0        $43                  ?0                  	;0	<<59
80  55   GOTO/253                  ?0        ?339                 ?56                 	;0
81  57   INCLUDE_OR_EVAL/73        ?37       57:'header.php'      ?0                  	;2
82  58   ECHO/40                   ?0        58:'<div class="wrapper"' ?0                  	;0
83  59   FETCH_IS/89               $52=      59:'_SERVER'         ?0                  	;0
84  59   ISSET_ISEMPTY_DIM_OBJ/115 #53=      $52                  60:'HTTP_X_REQUESTED_WITH'	;16777216
85  59   BOOL_NOT/13               #54=      #53                  ?0                  	;0
86  59   JMPZ_EX/46                #54=      #54                  ?94                 	;0	>>94
87  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'strtolower'     	;1
88  59   FETCH_FUNC_ARG/92         $55=      63:'_SERVER'         ?0                  	;1
89  59   FETCH_DIM_FUNC_ARG/93     $56=      $55                  64:'HTTP_X_REQUESTED_WITH'	;1
90  59   SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
91  59   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
92  59   IS_EQUAL/17               #58=      $57                  65:'xmlhttprequest' 	;0
93  59   BOOL/52                   #54=      #58                  ?0                  	;0
94  59   BOOL_NOT/13               #59=      #54                  ?0                  	;0	<<86
95  59   JMPZ/43                   ?0        #59                  ?97                 	;0	>>97
96  60   GOTO/253                  ?0        ?98                  ?66                 	;0
97  62   ECHO/40                   ?0        67:' style="display: none;"' ?0                  	;0	<<95
98  64   GOTO/253                  ?0        ?361                 ?68                 	;0
99  67   FE_RESET_R/77             $60=      16?0                 ?312                	;0
100 67   FE_FETCH_R/78             ?0        $60                  16?6                	;312	>>312	<<311
101 68   NOP/0                     ?0        ?0                   ?0                  	;1
102 68   GOTO/253                  ?0        ?161                 ?69                 	;0
103 70   ECHO/40                   ?0        70:'</td>
									<td>' ?0                  	;0
104 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'htmlspecialchars'	;1
105 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'intval'         	;1
106 71   FETCH_STATIC_PROP_FUNC_ARG/177 $62=      78:'rRequest'        79:'XUI'            	;1
107 71   FETCH_DIM_FUNC_ARG/93     $63=      $62                  81:'server'         	;1
108 71   SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
109 71   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
110 71   FETCH_STATIC_PROP_FUNC_ARG/177 $61=      73:'rServers'        74:'XUI'            	;1
111 71   FETCH_DIM_FUNC_ARG/93     $65=      $61                  $64                 	;1
112 71   FETCH_DIM_FUNC_ARG/93     $66=      $65                  82:'rtmp_server'    	;1
113 71   SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
114 71   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
115 71   FETCH_DIM_R/81            $68=      16?6                 83:'name'           	;0
116 71   CONCAT/8                  #69=      $67                  $68                 	;0
117 71   ECHO/40                   ?0        #69                  ?0                  	;0
118 72   ECHO/40                   ?0        84:'</td>
                                    <td class="text-center">' ?0                  	;0
119 73   ECHO/40                   ?0        16?7                 ?0                  	;0
120 74   ECHO/40                   ?0        85:'</td>
                                    <td class="text-center">
                                        ' ?0                  	;0
121 75   NOP/0                     ?0        ?0                   ?0                  	;1
122 75   GOTO/253                  ?0        ?123                 ?86                 	;0
123 77   FETCH_DIM_R/81            $70=      16?6                 87:'time'           	;0
124 77   DIV/4                     #71=      $70                  88:1000             	;0
125 77   ASSIGN/38                 ?58       16?2                 #71                 	;0
126 78   IS_SMALLER_OR_EQUAL/20    #73=      89:86400             16?2                	;0
127 78   JMPZ/43                   ?0        #73                  ?130                	;0	>>130
128 79   NOP/0                     ?0        ?0                   ?0                  	;1
129 79   GOTO/253                  ?0        ?143                 ?90                 	;0
130 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'sprintf'        	;4	<<127
131 81   SEND_VAL_EX/116           ?80       93:'%02dh %02dm %02ds' ?1                  	;0
132 81   DIV/4                     #74=      16?2                 94:3600             	;0
133 81   SEND_VAL_EX/116           ?96       #74                  ?2                  	;0
134 81   DIV/4                     #75=      16?2                 95:60               	;0
135 81   MOD/5                     #76=      #75                  96:60               	;0
136 81   SEND_VAL_EX/116           ?112      #76                  ?3                  	;0
137 81   MOD/5                     #77=      16?2                 97:60               	;0
138 81   SEND_VAL_EX/116           ?128      #77                  ?4                  	;0
139 81   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
140 81   ASSIGN/38                 ?65       16?2                 $78                 	;0
141 82   NOP/0                     ?0        ?0                   ?0                  	;1
142 82   GOTO/253                  ?0        ?298                 ?98                 	;0
143 84   NOP/0                     ?0        ?0                   ?0                  	;1
144 84   GOTO/253                  ?0        ?286                 ?99                 	;0
145 86   ECHO/40                   ?0        100:'</td>
									<td class="text-center">
                                        <table class=\'table-data\' style="width: 300px !important; white-space: nowrap;" align=\'center\'><tbody><tr><td class=\'double\'>' ?0                  	;0
146 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'number_format' 	;2
147 87   FETCH_DIM_R/81            $80=      16?6                 103:'bw_in'         	;0
148 87   DIV/4                     #81=      $80                  104:1000            	;0
149 87   SEND_VAL_EX/116           ?80       #81                  ?1                  	;0
150 87   SEND_VAL_EX/116           ?96       105:0                ?2                  	;0
151 87   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
152 87   ECHO/40                   ?0        $82                  ?0                  	;0
153 88   ECHO/40                   ?0        106:' Kbps</td><td style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' ?0                  	;0
154 89   FETCH_DIM_R/81            $83=      16?6                 107:'meta'          	;0
155 89   FETCH_DIM_R/81            $84=      $83                  108:'video'         	;0
156 89   FETCH_DIM_R/81            $85=      $84                  109:'width'         	;0
157 89   ECHO/40                   ?0        $85                  ?0                  	;0
158 90   ECHO/40                   ?0        110:' x '            ?0                  	;0
159 91   NOP/0                     ?0        ?0                   ?0                  	;1
160 91   GOTO/253                  ?0        ?198                 ?111                	;0
161 93   FETCH_DIM_IS/90           $86=      16?6                 112:'client'        	;0
162 93   ISSET_ISEMPTY_DIM_OBJ/115 #87=      $86                  113:'id'            	;33554432
163 93   BOOL_NOT/13               #88=      #87                  ?0                  	;0
164 93   JMPZ/43                   ?0        #88                  ?167                	;0	>>167
165 94   NOP/0                     ?0        ?0                   ?0                  	;1
166 94   GOTO/253                  ?0        ?171                 ?114                	;0
167 96   FETCH_DIM_R/81            $90=      16?6                 116:'client'        	;0	<<164
168 96   INIT_ARRAY/71             #91=      $90                  ?0                  	;4
169 96   ASSIGN_DIM/147            ?75       16?6                 115:'client'        	;0
170 96   OP_DATA/137               ?0        #91                  ?0                  	;0
171 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'count'         	;1
172 98   FETCH_DIM_FUNC_ARG/93     $92=      16?6                 119:'client'        	;1
173 98   SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
174 98   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
175 98   ASSIGN/38                 ?80       16?8                 $93                 	;0
176 99   ASSIGN/38                 ?81       16?7                 120:''              	;0
177 100  NOP/0                     ?0        ?0                   ?0                  	;1
178 100  GOTO/253                  ?0        ?235                 ?121                	;0
179 102  ECHO/40                   ?0        122:'</td><td>'      ?0                  	;0
180 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'round'         	;2
181 103  FETCH_DIM_FUNC_ARG/93     $96=      16?6                 125:'meta'          	;1
182 103  FETCH_DIM_FUNC_ARG/93     $97=      $96                  126:'video'         	;1
183 103  FETCH_DIM_FUNC_ARG/93     $98=      $97                  127:'frame_rate'    	;1
184 103  SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
185 103  SEND_VAL_EX/116           ?96       128:0                ?2                  	;0
186 103  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
187 103  ECHO/40                   ?0        $99                  ?0                  	;0
188 104  ECHO/40                   ?0        129:' FPS</td></tr></tbody></table>
                                    </td>
									<td class="text-center">
										<div class="btn-group">
											<button data-toggle="tooltip" title="Kill Stream" type="button" class="btn tooltip btn-light waves-effect waves-light btn-xs" onClick="kill(' ?0                  	;0
189 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'intval'        	;1
190 105  FETCH_STATIC_PROP_FUNC_ARG/177 $100=     132:'rRequest'       133:'XUI'           	;1
191 105  FETCH_DIM_FUNC_ARG/93     $101=     $100                 135:'server'        	;1
192 105  SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
193 105  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
194 105  ECHO/40                   ?0        $102                 ?0                  	;0
195 106  ECHO/40                   ?0        136:', \''           ?0                  	;0
196 107  NOP/0                     ?0        ?0                   ?0                  	;1
197 107  GOTO/253                  ?0        ?306                 ?137                	;0
198 109  FETCH_DIM_R/81            $103=     16?6                 138:'meta'          	;0
199 109  FETCH_DIM_R/81            $104=     $103                 139:'video'         	;0
200 109  FETCH_DIM_R/81            $105=     $104                 140:'height'        	;0
201 109  ECHO/40                   ?0        $105                 ?0                  	;0
202 110  ECHO/40                   ?0        141:'</td><td>'      ?0                  	;0
203 111  FETCH_DIM_R/81            $106=     16?6                 142:'meta'          	;0
204 111  FETCH_DIM_R/81            $107=     $106                 143:'video'         	;0
205 111  FETCH_DIM_R/81            $108=     $107                 144:'codec'         	;0
206 111  ECHO/40                   ?0        $108                 ?0                  	;0
207 112  ECHO/40                   ?0        145:'</td><td>'      ?0                  	;0
208 113  FETCH_DIM_R/81            $109=     16?6                 146:'meta'          	;0
209 113  FETCH_DIM_R/81            $110=     $109                 147:'audio'         	;0
210 113  FETCH_DIM_R/81            $111=     $110                 148:'codec'         	;0
211 113  ECHO/40                   ?0        $111                 ?0                  	;0
212 114  NOP/0                     ?0        ?0                   ?0                  	;1
213 114  GOTO/253                  ?0        ?179                 ?149                	;0
214 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'intval'        	;1
215 117  FETCH_DIM_FUNC_ARG/93     $112=     16?6                 152:'name'          	;1
216 117  SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
217 117  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
218 117  CONCAT/8                  #114=     153:'<a href=\'live_connections?search=RTMP&stream_id=' $113                	;0
219 117  CONCAT/8                  #115=     #114                 154:'&server='      	;0
220 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'intval'        	;1
221 117  FETCH_STATIC_PROP_FUNC_ARG/177 $116=     157:'rRequest'       158:'XUI'           	;1
222 117  FETCH_DIM_FUNC_ARG/93     $117=     $116                 160:'server'        	;1
223 117  SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
224 117  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
225 117  CONCAT/8                  #119=     #115                 $118                	;0
226 117  CONCAT/8                  #120=     #119                 161:'\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>'	;0
227 117  CONCAT/8                  #121=     #120                 16?8                	;0
228 117  CONCAT/8                  #122=     #121                 162:'</button></a>' 	;0
229 117  ASSIGN/38                 ?109      16?9                 #122                	;0
230 119  ECHO/40                   ?0        163:'								<tr>
									<td class="text-center">' ?0                  	;0
231 120  FETCH_DIM_R/81            $124=     16?6                 164:'name'          	;0
232 120  ECHO/40                   ?0        $124                 ?0                  	;0
233 121  NOP/0                     ?0        ?0                   ?0                  	;1
234 121  GOTO/253                  ?0        ?103                 ?165                	;0
235 123  FETCH_DIM_R/81            $125=     16?6                 166:'client'        	;0
236 123  FE_RESET_R/77             $126=     $125                 ?259                	;0
237 123  FE_FETCH_R/78             ?0        $126                 16?10               	;259	>>259	<<258
238 124  FETCH_DIM_R/81            $127=     16?10                167:'time'          	;0
239 124  FETCH_DIM_R/81            $128=     16?6                 168:'time'          	;0
240 124  IS_SMALLER_OR_EQUAL/20    #129=     $128                 $127                	;0
241 124  BOOL_NOT/13               #130=     #129                 ?0                  	;0
242 124  JMPZ/43                   ?0        #130                 ?246                	;0	>>246
243 125  NOP/0                     ?0        ?0                   ?0                  	;1
244 125  NOP/0                     ?0        ?0                   ?0                  	;1
245 125  GOTO/253                  ?0        ?258                 ?169                	;0
246 127  FETCH_DIM_R/81            $131=     16?10                170:'address'       	;0	<<242
247 127  CONCAT/8                  #132=     171:'<a onClick="whois(\'' $131                	;0
248 127  CONCAT/8                  #133=     #132                 172:'\');" href=\'javascript: void(0);\'>'	;0
249 127  FETCH_DIM_R/81            $134=     16?10                173:'address'       	;0
250 127  CONCAT/8                  #135=     #133                 $134                	;0
251 127  CONCAT/8                  #136=     #135                 174:'</a>'          	;0
252 127  ASSIGN/38                 ?123      16?7                 #136                	;0
253 128  POST_DEC/37               #138=     16?8                 ?0                  	;0
254 128  FREE/70                   ?0        #138                 ?0                  	;0
255 129  FE_FREE/127               ?0        $126                 ?7                  	;1
256 129  NOP/0                     ?0        ?0                   ?0                  	;1
257 129  GOTO/253                  ?0        ?260                 ?175                	;0
258 131  JMP/42                    ?0        ?237                 ?0                  	;0	>>237
259 131  FE_FREE/127               ?0        $126                 ?0                  	;0	<<236
260 134  IS_SMALLER/19             #139=     176:0                16?8                	;0
261 134  JMPZ_EX/46                #139=     #139                 ?267                	;0	>>267
262 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'is_numeric'    	;1
263 134  FETCH_DIM_FUNC_ARG/93     $140=     16?6                 179:'name'          	;1
264 134  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
265 134  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
266 134  BOOL/52                   #139=     $141                 ?0                  	;0
267 134  JMPZ/43                   ?0        #139                 ?270                	;0	>>270	<<261
268 135  NOP/0                     ?0        ?0                   ?0                  	;1
269 135  GOTO/253                  ?0        ?214                 ?180                	;0
270 137  IS_SMALLER/19             #142=     181:0                16?8                	;0	<<267
271 137  JMPZ/43                   ?0        #142                 ?274                	;0	>>274
272 138  NOP/0                     ?0        ?0                   ?0                  	;1
273 138  GOTO/253                  ?0        ?279                 ?182                	;0
274 140  ASSIGN/38                 ?129      16?9                 183:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>'	;0	<<271
275 141  NOP/0                     ?0        ?0                   ?0                  	;1
276 141  GOTO/253                  ?0        ?277                 ?184                	;0
277 143  NOP/0                     ?0        ?0                   ?0                  	;1
278 143  GOTO/253                  ?0        ?282                 ?185                	;0
279 145  CONCAT/8                  #144=     186:'<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' 16?8                	;0
280 145  CONCAT/8                  #145=     #144                 187:'</button>'     	;0
281 145  ASSIGN/38                 ?132      16?9                 #145                	;0
282 147  NOP/0                     ?0        ?0                   ?0                  	;1
283 147  GOTO/253                  ?0        ?230                 ?188                	;0
284 148  NOP/0                     ?0        ?0                   ?0                  	;1
285 148  GOTO/253                  ?0        ?214                 ?189                	;0
286 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'sprintf'       	;4
287 150  SEND_VAL_EX/116           ?80       192:'%02dd %02dh %02dm' ?1                  	;0
288 150  DIV/4                     #147=     16?2                 193:86400           	;0
289 150  SEND_VAL_EX/116           ?96       #147                 ?2                  	;0
290 150  DIV/4                     #148=     16?2                 194:3600            	;0
291 150  MOD/5                     #149=     #148                 195:24              	;0
292 150  SEND_VAL_EX/116           ?112      #149                 ?3                  	;0
293 150  DIV/4                     #150=     16?2                 196:60              	;0
294 150  MOD/5                     #151=     #150                 197:60              	;0
295 150  SEND_VAL_EX/116           ?128      #151                 ?4                  	;0
296 150  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
297 150  ASSIGN/38                 ?139      16?2                 $152                	;0
298 152  ROPE_INIT/54              #155=     ?0                   198:'<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed\'>'	;3
299 152  ROPE_ADD/55               #155=     #155                 16?2                	;1
300 152  ROPE_END/56               #154=     #155                 199:'</button>'     	;2
301 152  ECHO/40                   ?0        #154                 ?0                  	;0
302 153  ECHO/40                   ?0        200:'                                    </td>
                                    <td class="text-center">' ?0                  	;0
303 154  ECHO/40                   ?0        16?9                 ?0                  	;0
304 155  NOP/0                     ?0        ?0                   ?0                  	;1
305 155  GOTO/253                  ?0        ?145                 ?201                	;0
306 157  FETCH_DIM_R/81            $157=     16?6                 202:'name'          	;0
307 157  ECHO/40                   ?0        $157                 ?0                  	;0
308 158  ECHO/40                   ?0        203:'\');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
309 160  NOP/0                     ?0        ?0                   ?0                  	;1
310 160  GOTO/253                  ?0        ?311                 ?204                	;0
311 161  JMP/42                    ?0        ?100                 ?0                  	;0	>>100
312 161  FE_FREE/127               ?0        $60                  ?0                  	;0	<<99
313 164  ECHO/40                   ?0        205:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
314 165  GOTO/253                  ?0        ?397                 ?206                	;0
315 167  FETCH_STATIC_PROP_IS/176  $158=     207:'rRequest'       208:'XUI'           	;0
316 167  ISSET_ISEMPTY_DIM_OBJ/115 #159=     $158                 210:'server'        	;33554432
317 167  BOOL_NOT/13               #160=     #159                 ?0                  	;0
318 167  JMPNZ_EX/47               #160=     #160                 ?324                	;0	>>324
319 167  FETCH_STATIC_PROP_R/173   $161=     211:'rRequest'       212:'XUI'           	;0
320 167  FETCH_DIM_R/81            $162=     $161                 214:'server'        	;0
321 167  ISSET_ISEMPTY_DIM_OBJ/115 #163=     16?4                 $162                	;33554432
322 167  BOOL_NOT/13               #164=     #163                 ?0                  	;0
323 167  BOOL/52                   #160=     #164                 ?0                  	;0
324 167  BOOL_NOT/13               #165=     #160                 ?0                  	;0	<<318
325 167  JMPZ/43                   ?0        #165                 ?327                	;0	>>327
326 168  GOTO/253                  ?0        ?331                 ?215                	;0
327 170  FETCH_CONSTANT/99         #168=     ?0                   220:'SERVER_ID'     	;16	<<325
328 170  FETCH_STATIC_PROP_W/174   $166=     216:'rRequest'       217:'XUI'           	;0
329 170  ASSIGN_DIM/147            ?153      $166                 219:'server'        	;0
330 170  OP_DATA/137               ?0        #168                 ?0                  	;0
331 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'E4996afFb045c086'	;1
332 172  FETCH_STATIC_PROP_FUNC_ARG/177 $169=     225:'rRequest'       226:'XUI'           	;1
333 172  FETCH_DIM_FUNC_ARG/93     $170=     $169                 228:'server'        	;1
334 172  SEND_VAR_EX/66            ?80       $170                 ?1                  	;0
335 172  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
336 172  ASSIGN/38                 ?158      16?1                 $171                	;0
337 173  ASSIGN/38                 ?159      16?11                229:'RTMP Monitor'  	;0
338 174  GOTO/253                  ?0        ?81                  ?230                	;0
339 177  ECHO/40                   ?0        231:'									</select>
								</div>
								<label class="col-md-1 col-form-label text-center" for="live_show_entries">' ?0                  	;0
340 178  FETCH_DIM_R/81            $174=     16?3                 232:'show'          	;0
341 178  ECHO/40                   ?0        $174                 ?0                  	;0
342 179  ECHO/40                   ?0        233:'</label>
								<div class="col-md-2">
									<select id="live_show_entries" class="form-control" data-toggle="select2">
										' ?0                  	;0
343 180  FE_RESET_R/77             $175=     234:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?359                	;0
344 180  FE_FETCH_R/78             ?0        $175                 16?12               	;359	>>359	<<358
345 181  ECHO/40                   ?0        235:'										<option' ?0                  	;0
346 182  FETCH_DIM_R/81            $176=     16?13                236:'default_entries'	;0
347 182  IS_EQUAL/17               #177=     $176                 16?12               	;0
348 182  BOOL_NOT/13               #178=     #177                 ?0                  	;0
349 182  JMPZ/43                   ?0        #178                 ?352                	;0	>>352
350 183  NOP/0                     ?0        ?0                   ?0                  	;1
351 183  GOTO/253                  ?0        ?353                 ?237                	;0
352 185  ECHO/40                   ?0        238:' selected'      ?0                  	;0	<<349
353 187  ECHO/40                   ?0        239:' value="'       ?0                  	;0
354 188  ECHO/40                   ?0        16?12                ?0                  	;0
355 189  ECHO/40                   ?0        240:'">'             ?0                  	;0
356 190  ECHO/40                   ?0        16?12                ?0                  	;0
357 191  ECHO/40                   ?0        241:'</option>
										' ?0                  	;0
358 192  JMP/42                    ?0        ?344                 ?0                  	;0	>>344
359 192  FE_FREE/127               ?0        $175                 ?0                  	;0	<<343
360 194  GOTO/253                  ?0        ?1                   ?242                	;0
361 196  ECHO/40                   ?0        243:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li>
								<a href="javascript:void(0);" onClick="navigate(\'rtmp_monitor\');" style="margin-right:10px;">
									<button type="button" class="btn btn-dark waves-effect waves-light btn-sm">
										<i class="mdi mdi-refresh"></i> ' ?0                  	;0
362 197  FETCH_DIM_R/81            $179=     16?3                 244:'refresh'       	;0
363 197  ECHO/40                   ?0        $179                 ?0                  	;0
364 198  ECHO/40                   ?0        245:'									</button>
								</a>
							</li>
						</ol>
					</div>
					<h4 class="page-title">RTMP Monitor</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table class="table table-borderless mb-0">
							<thead class="thead-light">
								<tr>
									<th class="text-center">RTMP PID</th>
                                    <th class="text-center">NGINX Version</th>
                                    <th class="text-center">FLV Version</th>
									<th class="text-center">Uptime</th>
									<th class="text-center">Input Mbps</th>
                                    <th class="text-center">Output Mbps</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">' ?0                  	;0
365 199  FETCH_DIM_R/81            $180=     16?1                 246:'pid'           	;0
366 199  ECHO/40                   ?0        $180                 ?0                  	;0
367 200  ECHO/40                   ?0        247:'</td>
									<td class="text-center">' ?0                  	;0
368 201  GOTO/253                  ?0        ?38                  ?248                	;0
369 203  IS_SMALLER_OR_EQUAL/20    #181=     249:86400            16?2                	;0
370 203  JMPZ/43                   ?0        #181                 ?372                	;0	>>372
371 204  GOTO/253                  ?0        ?384                 ?250                	;0
372 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'sprintf'       	;4	<<370
373 206  SEND_VAL_EX/116           ?80       253:'%02dh %02dm %02ds' ?1                  	;0
374 206  DIV/4                     #182=     16?2                 254:3600            	;0
375 206  SEND_VAL_EX/116           ?96       #182                 ?2                  	;0
376 206  DIV/4                     #183=     16?2                 255:60              	;0
377 206  MOD/5                     #184=     #183                 256:60              	;0
378 206  SEND_VAL_EX/116           ?112      #184                 ?3                  	;0
379 206  MOD/5                     #185=     16?2                 257:60              	;0
380 206  SEND_VAL_EX/116           ?128      #185                 ?4                  	;0
381 206  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
382 206  ASSIGN/38                 ?173      16?2                 $186                	;0
383 207  GOTO/253                  ?0        ?23                  ?258                	;0
384 209  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'sprintf'       	;4
385 209  SEND_VAL_EX/116           ?80       261:'%02dd %02dh %02dm' ?1                  	;0
386 209  DIV/4                     #188=     16?2                 262:86400           	;0
387 209  SEND_VAL_EX/116           ?96       #188                 ?2                  	;0
388 209  DIV/4                     #189=     16?2                 263:3600            	;0
389 209  MOD/5                     #190=     #189                 264:24              	;0
390 209  SEND_VAL_EX/116           ?112      #190                 ?3                  	;0
391 209  DIV/4                     #191=     16?2                 265:60              	;0
392 209  MOD/5                     #192=     #191                 266:60              	;0
393 209  SEND_VAL_EX/116           ?128      #192                 ?4                  	;0
394 209  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
395 209  ASSIGN/38                 ?180      16?2                 $193                	;0
396 210  GOTO/253                  ?0        ?23                  ?267                	;0
397 212  INCLUDE_OR_EVAL/73        ?181      268:'footer.php'     ?0                  	;2
398 213  NOP/0                     ?0        269:1                ?0                  	;4294967295
*/

?>