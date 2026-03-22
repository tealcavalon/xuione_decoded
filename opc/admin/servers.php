<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?679                 ?0                  	;0	>>679
1   5    FETCH_STATIC_PROP_R/173   $11=      1:'rServers'         2:'XUI'             	;0
2   5    FE_RESET_R/77             $12=      $11                  ?676                	;0
3   5    FE_FETCH_R/78             ?0        $12                  16?0                	;676	>>676	<<675
4   6    NOP/0                     ?0        ?0                   ?0                  	;1
5   6    GOTO/253                  ?0        ?547                 ?4                  	;0
6   8    FETCH_DIM_R/81            $13=      16?0                 5:'id'              	;0
7   8    ECHO/40                   ?0        $13                  ?0                  	;0
8   9    ECHO/40                   ?0        6:', \'stop\');">Stop All Streams</a>
												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
9   10   FETCH_DIM_R/81            $14=      16?0                 7:'id'              	;0
10  10   ECHO/40                   ?0        $14                  ?0                  	;0
11  11   ECHO/40                   ?0        8:', \'kill\');">Kill Connections</a>
												<a class="dropdown-item" href="./server?id=' ?0                  	;0
12  12   FETCH_DIM_R/81            $15=      16?0                 9:'id'              	;0
13  12   ECHO/40                   ?0        $15                  ?0                  	;0
14  13   NOP/0                     ?0        ?0                   ?0                  	;1
15  13   GOTO/253                  ?0        ?402                 ?10                 	;0
16  15   FETCH_DIM_R/81            $16=      16?0                 11:'id'             	;0
17  15   ECHO/40                   ?0        $16                  ?0                  	;0
18  16   ECHO/40                   ?0        12:'"><button type="button" title="Edit Server" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>
                                            ' ?0                  	;0
19  17   FETCH_DIM_R/81            $17=      16?0                 13:'enable_proxy'   	;0
20  17   JMPZ/43                   ?0        $17                  ?23                 	;0	>>23
21  18   NOP/0                     ?0        ?0                   ?0                  	;1
22  18   GOTO/253                  ?0        ?580                 ?14                 	;0
23  20   ECHO/40                   ?0        15:'                                            <button type="button" title="Enable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0	<<20
24  21   FETCH_DIM_R/81            $18=      16?0                 16:'id'             	;0
25  21   ECHO/40                   ?0        $18                  ?0                  	;0
26  22   NOP/0                     ?0        ?0                   ?0                  	;1
27  22   GOTO/253                  ?0        ?577                 ?17                 	;0
28  24   FETCH_DIM_R/81            $19=      16?0                 18:'id'             	;0
29  24   ECHO/40                   ?0        $19                  ?0                  	;0
30  25   ECHO/40                   ?0        19:'"><i class="mdi mdi-creation"></i></button>
                                            <button type="button" title="Restart Live Streams" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
31  26   FETCH_DIM_R/81            $20=      16?0                 20:'id'             	;0
32  26   ECHO/40                   ?0        $20                  ?0                  	;0
33  27   ECHO/40                   ?0        21:', \'restart\');"><i class="mdi mdi-refresh"></i></button>
											<button type="button" title="Start All Streams" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
34  28   FETCH_DIM_R/81            $21=      16?0                 22:'id'             	;0
35  28   ECHO/40                   ?0        $21                  ?0                  	;0
36  29   NOP/0                     ?0        ?0                   ?0                  	;1
37  29   GOTO/253                  ?0        ?258                 ?23                 	;0
38  31   FETCH_DIM_R/81            $22=      16?0                 24:'enabled'        	;0
39  31   BOOL_NOT/13               #23=      $22                  ?0                  	;0
40  31   JMPZ/43                   ?0        #23                  ?43                 	;0	>>43
41  32   NOP/0                     ?0        ?0                   ?0                  	;1
42  32   GOTO/253                  ?0        ?503                 ?25                 	;0
43  34   FETCH_DIM_R/81            $24=      16?0                 26:'server_online'  	;0	<<40
44  34   JMPZ/43                   ?0        $24                  ?47                 	;0	>>47
45  35   NOP/0                     ?0        ?0                   ?0                  	;1
46  35   GOTO/253                  ?0        ?95                  ?27                 	;0
47  37   FETCH_DIM_R/81            $25=      16?0                 28:'last_check_ago' 	;0	<<44
48  37   IS_SMALLER/19             #26=      29:0                 $25                 	;0
49  37   JMPZ/43                   ?0        #26                  ?52                 	;0	>>52
50  38   NOP/0                     ?0        ?0                   ?0                  	;1
51  38   GOTO/253                  ?0        ?189                 ?30                 	;0
52  40   ASSIGN/38                 ?16       16?1                 31:'Never'          	;0	<<49
53  41   NOP/0                     ?0        ?0                   ?0                  	;1
54  41   GOTO/253                  ?0        ?196                 ?32                 	;0
55  42   NOP/0                     ?0        ?0                   ?0                  	;1
56  42   GOTO/253                  ?0        ?189                 ?33                 	;0
57  44   ASSIGN/38                 ?17       16?2                 34:array (
  'total_mem_used_percent' => '0',
  'cpu' => '0',
)	;0
58  46   FETCH_DIM_R/81            $30=      16?0                 38:'id'             	;0
59  46   FETCH_STATIC_PROP_R/173   $29=      35:'rServers'        36:'XUI'            	;0
60  46   FETCH_DIM_R/81            $31=      $29                  $30                 	;0
61  46   FETCH_DIM_R/81            $32=      $31                  39:'server_online'  	;0
62  46   JMPZ/43                   ?0        $32                  ?65                 	;0	>>65
63  47   NOP/0                     ?0        ?0                   ?0                  	;1
64  47   GOTO/253                  ?0        ?394                 ?40                 	;0
65  49   ASSIGN_DIM/147            ?22       16?2                 41:'cpu'            	;0	<<62
66  49   OP_DATA/137               ?0        42:0                 ?0                  	;0
67  50   ASSIGN_DIM/147            ?23       16?2                 43:'total_mem_used_percent'	;0
68  50   OP_DATA/137               ?0        44:0                 ?0                  	;0
69  51   NOP/0                     ?0        ?0                   ?0                  	;1
70  51   GOTO/253                  ?0        ?394                 ?45                 	;0
71  53   ECHO/40                   ?0        46:'                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="' ?0                  	;0
72  54   FETCH_DIM_R/81            $35=      16?3                 47:'theme'          	;0
73  54   IS_EQUAL/17               #36=      $35                  48:1                	;0
74  54   JMPZ/43                   ?0        #36                  ?77                 	;0	>>77
75  55   NOP/0                     ?0        ?0                   ?0                  	;1
76  55   GOTO/253                  ?0        ?80                  ?49                 	;0
77  57   ECHO/40                   ?0        50:'#ebeff2'         ?0                  	;0	<<74
78  58   NOP/0                     ?0        ?0                   ?0                  	;1
79  58   GOTO/253                  ?0        ?236                 ?51                 	;0
80  60   NOP/0                     ?0        ?0                   ?0                  	;1
81  60   GOTO/253                  ?0        ?235                 ?52                 	;0
82  62   FETCH_DIM_R/81            $37=      16?0                 53:'xui_revision'   	;0
83  62   CONCAT/8                  #38=      54:' R'              $37                 	;0
84  62   ECHO/40                   ?0        #38                  ?0                  	;0
85  65   ECHO/40                   ?0        55:'                                        </button>
                                    </td>
									<td class="text-center">
										' ?0                  	;0
86  66   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'E589a4bF54A2Dad1'	;2
87  66   SEND_VAL_EX/116           ?80       58:'adv'             ?1                  	;0
88  66   SEND_VAL_EX/116           ?96       59:'edit_server'     ?2                  	;0
89  66   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
90  66   JMPZ/43                   ?0        $39                  ?93                 	;0	>>93
91  67   NOP/0                     ?0        ?0                   ?0                  	;1
92  67   GOTO/253                  ?0        ?481                 ?60                 	;0
93  69   NOP/0                     ?0        ?0                   ?0                  	;1	<<90
94  69   GOTO/253                  ?0        ?478                 ?61                 	;0
95  72   BOOL_NOT/13               #40=      16?4                 ?0                  	;0
96  72   JMPZ_EX/46                #40=      #40                  ?99                 	;0	>>99
97  72   BOOL_NOT/13               #41=      16?5                 ?0                  	;0
98  72   BOOL/52                   #40=      #41                  ?0                  	;0
99  72   JMPZ_EX/46                #40=      #40                  ?102                	;0	>>102	<<96
100 72   FETCH_DIM_R/81            $42=      16?0                 62:'xui_version'    	;0
101 72   BOOL/52                   #40=      $42                  ?0                  	;0
102 72   JMPZ_EX/46                #40=      #40                  ?116                	;0	>>116	<<99
103 72   FETCH_DIM_R/81            $43=      16?0                 63:'xui_version'    	;0
104 72   FETCH_CONSTANT/99         #44=      ?0                   64:'SERVER_ID'      	;16
105 72   FETCH_DIM_R/81            $45=      16?6                 #44                 	;0
106 72   FETCH_DIM_R/81            $46=      $45                  67:'xui_version'    	;0
107 72   IS_NOT_EQUAL/18           #47=      $43                  $46                 	;0
108 72   JMPNZ_EX/47               #47=      #47                  ?115                	;0	>>115
109 72   FETCH_DIM_R/81            $48=      16?0                 68:'xui_revision'   	;0
110 72   FETCH_CONSTANT/99         #49=      ?0                   69:'SERVER_ID'      	;16
111 72   FETCH_DIM_R/81            $50=      16?6                 #49                 	;0
112 72   FETCH_DIM_R/81            $51=      $50                  72:'xui_revision'   	;0
113 72   IS_NOT_EQUAL/18           #52=      $48                  $51                 	;0
114 72   BOOL/52                   #47=      #52                  ?0                  	;0
115 72   BOOL/52                   #40=      #47                  ?0                  	;0	<<108
116 72   JMPZ/43                   ?0        #40                  ?119                	;0	>>119	<<102
117 73   NOP/0                     ?0        ?0                   ?0                  	;1
118 73   GOTO/253                  ?0        ?122                 ?73                 	;0
119 75   ECHO/40                   ?0        74:'<i class="text-success fas fa-square tooltip" title="Online"></i>' ?0                  	;0	<<116
120 76   NOP/0                     ?0        ?0                   ?0                  	;1
121 76   GOTO/253                  ?0        ?501                 ?75                 	;0
122 78   NOP/0                     ?0        ?0                   ?0                  	;1
123 78   GOTO/253                  ?0        ?489                 ?76                 	;0
124 80   NOP/0                     ?0        ?0                   ?0                  	;1
125 80   GOTO/253                  ?0        ?136                 ?77                 	;0
126 82   FETCH_DIM_R/81            $53=      16?0                 78:'id'             	;0
127 82   CONCAT/8                  #54=      79:'<a href="./live_connections?server=' $53                 	;0
128 82   CONCAT/8                  #55=      #54                  80:'"><button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>'	;0
129 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'number_format'  	;2
130 82   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
131 82   SEND_VAL_EX/116           ?96       83:0                 ?2                  	;0
132 82   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
133 82   CONCAT/8                  #57=      #55                  $56                 	;0
134 82   CONCAT/8                  #58=      #57                  84:'</button></a>'  	;0
135 82   ASSIGN/38                 ?48       16?7                 #58                 	;0
136 84   ECHO/40                   ?0        16?7                 ?0                  	;0
137 85   NOP/0                     ?0        ?0                   ?0                  	;1
138 85   GOTO/253                  ?0        ?420                 ?85                 	;0
139 87   ECHO/40                   ?0        86:'">Server Tools</a>
                                                <a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
140 88   FETCH_DIM_R/81            $60=      16?0                 87:'id'             	;0
141 88   ECHO/40                   ?0        $60                  ?0                  	;0
142 89   ECHO/40                   ?0        88:', \'restart\');">Restart Live Streams</a>
												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
143 90   FETCH_DIM_R/81            $61=      16?0                 89:'id'             	;0
144 90   ECHO/40                   ?0        $61                  ?0                  	;0
145 91   ECHO/40                   ?0        90:', \'start\');">Start All Streams</a>
												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
146 92   NOP/0                     ?0        ?0                   ?0                  	;1
147 92   GOTO/253                  ?0        ?6                   ?91                 	;0
148 94   ECHO/40                   ?0        92:'" href="server_view?id=' ?0                  	;0
149 95   FETCH_DIM_R/81            $62=      16?0                 93:'id'             	;0
150 95   ECHO/40                   ?0        $62                  ?0                  	;0
151 96   ECHO/40                   ?0        94:'">'              ?0                  	;0
152 97   FETCH_DIM_R/81            $63=      16?0                 95:'order'          	;0
153 97   JMP_SET/152               #64=      $63                  ?156                	;0
154 97   FETCH_DIM_R/81            $65=      16?0                 96:'id'             	;0
155 97   QM_ASSIGN/22              #64=      $65                  ?0                  	;0
156 97   ECHO/40                   ?0        #64                  ?0                  	;0
157 98   ECHO/40                   ?0        97:'</a></td>
                                    <td class="text-center">
                                        ' ?0                  	;0
158 99   NOP/0                     ?0        ?0                   ?0                  	;1
159 99   GOTO/253                  ?0        ?38                  ?98                 	;0
160 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'htmlentities'   	;1
161 101  FETCH_DIM_FUNC_ARG/93     $66=      16?0                 101:'server_ip'     	;1
162 101  SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
163 101  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
164 101  CONCAT/8                  #68=      102:'<i class="text-danger fas fa-square tooltip" title="Can\'t connect on ' $67                 	;0
165 101  CONCAT/8                  #69=      #68                  103:':'             	;0
166 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'intval'        	;1
167 101  FETCH_DIM_FUNC_ARG/93     $70=      16?0                 106:'http_broadcast_port'	;1
168 101  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
169 101  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
170 101  CONCAT/8                  #72=      #69                  $71                 	;0
171 101  CONCAT/8                  #73=      #72                  107:'<br/>Last Ping: '	;0
172 101  CONCAT/8                  #74=      #73                  16?1                	;0
173 101  CONCAT/8                  #75=      #74                  108:'"></i>'        	;0
174 101  ECHO/40                   ?0        #75                  ?0                  	;0
175 103  NOP/0                     ?0        ?0                   ?0                  	;1
176 103  GOTO/253                  ?0        ?230                 ?109                	;0
177 105  ECHO/40                   ?0        110:'<i class="text-info fas fa-square tooltip" title="Updating..."></i>' ?0                  	;0
178 106  NOP/0                     ?0        ?0                   ?0                  	;1
179 106  GOTO/253                  ?0        ?230                 ?111                	;0
180 108  ECHO/40                   ?0        112:'<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>' ?0                  	;0
181 110  ECHO/40                   ?0        113:'                                    </td>
                                    <td class="text-center">
                                        ' ?0                  	;0
182 111  FETCH_DIM_R/81            $76=      16?0                 114:'enable_proxy'  	;0
183 111  JMPZ/43                   ?0        $76                  ?186                	;0	>>186
184 112  NOP/0                     ?0        ?0                   ?0                  	;1
185 112  GOTO/253                  ?0        ?671                 ?115                	;0
186 114  ECHO/40                   ?0        116:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0	<<183
187 115  NOP/0                     ?0        ?0                   ?0                  	;1
188 115  GOTO/253                  ?0        ?669                 ?117                	;0
189 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'date'          	;2
190 118  FETCH_DIM_FUNC_ARG/93     $77=      16?8                 120:'datetime_format'	;1
191 118  SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
192 118  FETCH_DIM_FUNC_ARG/93     $78=      16?0                 121:'last_check_ago'	;2
193 118  SEND_VAR_EX/66            ?96       $78                  ?2                  	;0
194 118  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
195 118  ASSIGN/38                 ?69       16?1                 $79                 	;0
196 120  FETCH_DIM_R/81            $81=      16?0                 122:'status'        	;0
197 120  IS_EQUAL/17               #82=      $81                  123:3               	;0
198 120  JMPZ/43                   ?0        #82                  ?201                	;0	>>201
199 121  NOP/0                     ?0        ?0                   ?0                  	;1
200 121  GOTO/253                  ?0        ?415                 ?124                	;0
201 123  FETCH_DIM_R/81            $83=      16?0                 125:'status'        	;0	<<198
202 123  IS_EQUAL/17               #84=      $83                  126:4               	;0
203 123  JMPZ/43                   ?0        #84                  ?206                	;0	>>206
204 124  NOP/0                     ?0        ?0                   ?0                  	;1
205 124  GOTO/253                  ?0        ?232                 ?127                	;0
206 126  NOP/0                     ?0        ?0                   ?0                  	;1	<<203
207 126  GOTO/253                  ?0        ?213                 ?128                	;0
208 129  NOP/0                     ?0        ?0                   ?0                  	;1
209 129  GOTO/253                  ?0        ?211                 ?129                	;0
210 131  ASSIGN/38                 ?74       16?9                 130:'#23b397'       	;0
211 133  NOP/0                     ?0        ?0                   ?0                  	;1
212 133  GOTO/253                  ?0        ?71                  ?131                	;0
213 135  FETCH_DIM_R/81            $86=      16?0                 132:'status'        	;0
214 135  IS_EQUAL/17               #87=      $86                  133:5               	;0
215 135  JMPZ/43                   ?0        #87                  ?218                	;0	>>218
216 136  NOP/0                     ?0        ?0                   ?0                  	;1
217 136  GOTO/253                  ?0        ?177                 ?134                	;0
218 138  FETCH_DIM_R/81            $88=      16?0                 135:'remote_status' 	;0	<<215
219 138  BOOL_NOT/13               #89=      $88                  ?0                  	;0
220 138  JMPZ/43                   ?0        #89                  ?223                	;0	>>223
221 139  NOP/0                     ?0        ?0                   ?0                  	;1
222 139  GOTO/253                  ?0        ?228                 ?136                	;0
223 141  CONCAT/8                  #90=      137:'<i class="text-danger fas fa-square tooltip" title="Last Ping: ' 16?1                	;0	<<220
224 141  CONCAT/8                  #91=      #90                  138:'"></i>'        	;0
225 141  ECHO/40                   ?0        #91                  ?0                  	;0
226 142  NOP/0                     ?0        ?0                   ?0                  	;1
227 142  GOTO/253                  ?0        ?175                 ?139                	;0
228 144  NOP/0                     ?0        ?0                   ?0                  	;1
229 144  GOTO/253                  ?0        ?160                 ?140                	;0
230 147  NOP/0                     ?0        ?0                   ?0                  	;1
231 147  GOTO/253                  ?0        ?233                 ?141                	;0
232 149  ECHO/40                   ?0        142:'<i class="text-warning fas fa-square tooltip" title="Installation Failed!"></i>' ?0                  	;0
233 151  NOP/0                     ?0        ?0                   ?0                  	;1
234 151  GOTO/253                  ?0        ?413                 ?143                	;0
235 153  ECHO/40                   ?0        144:'#7e8e9d'        ?0                  	;0
236 155  ECHO/40                   ?0        145:'" data-fgColor="' ?0                  	;0
237 156  ECHO/40                   ?0        16?9                 ?0                  	;0
238 157  ECHO/40                   ?0        146:'" data-readOnly=true value="' ?0                  	;0
239 158  NOP/0                     ?0        ?0                   ?0                  	;1
240 158  GOTO/253                  ?0        ?522                 ?147                	;0
241 160  ECHO/40                   ?0        148:'										</div>
										' ?0                  	;0
242 161  NOP/0                     ?0        ?0                   ?0                  	;1
243 161  GOTO/253                  ?0        ?465                 ?149                	;0
244 163  ECHO/40                   ?0        150:'										<div class="btn-group dropdown">
											<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item btn-reboot-server" href="javascript:void(0);" data-id="' ?0                  	;0
245 164  FETCH_DIM_R/81            $92=      16?0                 151:'id'            	;0
246 164  ECHO/40                   ?0        $92                  ?0                  	;0
247 165  NOP/0                     ?0        ?0                   ?0                  	;1
248 165  GOTO/253                  ?0        ?139                 ?152                	;0
249 167  ECHO/40                   ?0        153:'                                        <br/><small style="font-size: 8pt;">private: <a onClick="whois(\'' ?0                  	;0
250 168  FETCH_DIM_R/81            $93=      16?0                 154:'private_ip'    	;0
251 168  ECHO/40                   ?0        $93                  ?0                  	;0
252 169  ECHO/40                   ?0        155:'\');" href="javascript: void(0);">' ?0                  	;0
253 170  FETCH_DIM_R/81            $94=      16?0                 156:'private_ip'    	;0
254 170  ECHO/40                   ?0        $94                  ?0                  	;0
255 171  ECHO/40                   ?0        157:'</a></small>
                                        ' ?0                  	;0
256 172  NOP/0                     ?0        ?0                   ?0                  	;1
257 172  GOTO/253                  ?0        ?321                 ?158                	;0
258 174  ECHO/40                   ?0        159:', \'start\');"><i class="mdi mdi-play"></i></button>
											<button type="button" title="Stop All Streams" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
259 175  FETCH_DIM_R/81            $95=      16?0                 160:'id'            	;0
260 175  ECHO/40                   ?0        $95                  ?0                  	;0
261 176  ECHO/40                   ?0        161:', \'stop\');"><i class="mdi mdi-stop"></i></button>
											<button type="button" title="Kill All Connections" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
262 177  FETCH_DIM_R/81            $96=      16?0                 162:'id'            	;0
263 177  ECHO/40                   ?0        $96                  ?0                  	;0
264 178  ECHO/40                   ?0        163:', \'kill\');"><i class="fas fa-hammer"></i></button>
											<a href="./server?id=' ?0                  	;0
265 179  NOP/0                     ?0        ?0                   ?0                  	;1
266 179  GOTO/253                  ?0        ?16                  ?164                	;0
267 182  ECHO/40                   ?0        165:'                                            <button type="button" title="Delete Server" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
268 183  FETCH_DIM_R/81            $97=      16?0                 166:'id'            	;0
269 183  ECHO/40                   ?0        $97                  ?0                  	;0
270 184  ECHO/40                   ?0        167:', \'delete\');"><i class="mdi mdi-close"></i></button>
											' ?0                  	;0
271 186  NOP/0                     ?0        ?0                   ?0                  	;1
272 186  GOTO/253                  ?0        ?241                 ?168                	;0
273 189  FETCH_DIM_R/81            $98=      16?0                 169:'connections'   	;0
274 189  ASSIGN/38                 ?88       16?7                 $98                 	;0
275 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'e589A4Bf54A2DaD1'	;2
276 191  SEND_VAL_EX/116           ?80       172:'adv'            ?1                  	;0
277 191  SEND_VAL_EX/116           ?96       173:'live_connections' ?2                  	;0
278 191  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
279 191  JMPZ/43                   ?0        $100                 ?282                	;0	>>282
280 192  NOP/0                     ?0        ?0                   ?0                  	;1
281 192  GOTO/253                  ?0        ?126                 ?174                	;0
282 194  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'number_format' 	;2	<<279
283 194  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
284 194  SEND_VAL_EX/116           ?96       177:0                ?2                  	;0
285 194  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
286 194  CONCAT/8                  #102=     178:'<button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>' $101                	;0
287 194  CONCAT/8                  #103=     #102                 179:'</button>'     	;0
288 194  ASSIGN/38                 ?93       16?7                 #103                	;0
289 195  NOP/0                     ?0        ?0                   ?0                  	;1
290 195  GOTO/253                  ?0        ?124                 ?180                	;0
291 197  NOP/0                     ?0        ?0                   ?0                  	;1
292 197  GOTO/253                  ?0        ?267                 ?181                	;0
293 199  ECHO/40                   ?0        182:'                                            <button type="button" title="Disable Server" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
294 200  FETCH_DIM_R/81            $105=     16?0                 183:'id'            	;0
295 200  ECHO/40                   ?0        $105                 ?0                  	;0
296 201  ECHO/40                   ?0        184:', \'disable\');"><i class="mdi mdi-close-network-outline"></i></button>
                                            ' ?0                  	;0
297 202  NOP/0                     ?0        ?0                   ?0                  	;1
298 202  GOTO/253                  ?0        ?267                 ?185                	;0
299 204  NOP/0                     ?0        ?0                   ?0                  	;1
300 204  GOTO/253                  ?0        ?302                 ?186                	;0
301 206  ASSIGN/38                 ?95       16?9                 187:'#f8cc6b'       	;0
302 208  NOP/0                     ?0        ?0                   ?0                  	;1
303 208  GOTO/253                  ?0        ?439                 ?188                	;0
304 209  NOP/0                     ?0        ?0                   ?0                  	;1
305 209  GOTO/253                  ?0        ?438                 ?189                	;0
306 212  FETCH_DIM_R/81            $107=     16?0                 190:'is_main'       	;0
307 212  IS_EQUAL/17               #108=     $107                 191:0               	;0
308 212  BOOL_NOT/13               #109=     #108                 ?0                  	;0
309 212  JMPZ/43                   ?0        #109                 ?312                	;0	>>312
310 213  NOP/0                     ?0        ?0                   ?0                  	;1
311 213  GOTO/253                  ?0        ?464                 ?192                	;0
312 215  FETCH_DIM_R/81            $110=     16?0                 193:'enabled'       	;0	<<309
313 215  JMPZ/43                   ?0        $110                 ?316                	;0	>>316
314 216  NOP/0                     ?0        ?0                   ?0                  	;1
315 216  GOTO/253                  ?0        ?572                 ?194                	;0
316 218  ECHO/40                   ?0        195:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0	<<313
317 219  FETCH_DIM_R/81            $111=     16?0                 196:'id'            	;0
318 219  ECHO/40                   ?0        $111                 ?0                  	;0
319 220  NOP/0                     ?0        ?0                   ?0                  	;1
320 220  GOTO/253                  ?0        ?569                 ?197                	;0
321 223  ECHO/40                   ?0        198:'                                    </td>
                                    <td class="text-center">
									' ?0                  	;0
322 224  FETCH_STATIC_PROP_R/173   $112=     199:'rSettings'      200:'XUI'           	;0
323 224  FETCH_DIM_R/81            $113=     $112                 202:'redis_handler' 	;0
324 224  JMPZ/43                   ?0        $113                 ?327                	;0	>>327
325 225  NOP/0                     ?0        ?0                   ?0                  	;1
326 225  GOTO/253                  ?0        ?273                 ?203                	;0
327 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'d8Bb46ce92ce0066'	;1	<<324
328 227  FETCH_DIM_FUNC_ARG/93     $114=     16?0                 206:'id'            	;1
329 227  SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
330 227  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
331 227  ASSIGN/38                 ?105      16?7                 $115                	;0
332 228  NOP/0                     ?0        ?0                   ?0                  	;1
333 228  GOTO/253                  ?0        ?275                 ?207                	;0
334 229  NOP/0                     ?0        ?0                   ?0                  	;1
335 229  GOTO/253                  ?0        ?273                 ?208                	;0
336 232  NOP/0                     ?0        ?0                   ?0                  	;1
337 232  GOTO/253                  ?0        ?675                 ?209                	;0
338 234  FETCH_DIM_R/81            $117=     16?0                 210:'id'            	;0
339 234  ECHO/40                   ?0        $117                 ?0                  	;0
340 235  ECHO/40                   ?0        211:'">'             ?0                  	;0
341 236  FETCH_DIM_R/81            $118=     16?0                 212:'server_name'   	;0
342 236  ECHO/40                   ?0        $118                 ?0                  	;0
343 237  ISSET_ISEMPTY_DIM_OBJ/115 #119=     16?0                 213:'domain_name'   	;16777216
344 237  BOOL_NOT/13               #120=     #119                 ?0                  	;0
345 237  JMPZ/43                   ?0        #120                 ?356                	;0	>>356
346 237  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'explode'       	;2
347 237  SEND_VAL_EX/116           ?80       216:','              ?1                  	;0
348 237  FETCH_DIM_FUNC_ARG/93     $121=     16?0                 217:'domain_name'   	;2
349 237  SEND_VAR_EX/66            ?96       $121                 ?2                  	;0
350 237  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
351 237  FETCH_DIM_R/81            $123=     $122                 218:0               	;0
352 237  CONCAT/8                  #124=     219:'<br/><small>'   $123                	;0
353 237  CONCAT/8                  #125=     #124                 220:'</small>'      	;0
354 237  QM_ASSIGN/22              #126=     #125                 ?0                  	;0
355 237  JMP/42                    ?0        ?357                 ?0                  	;0	>>357
356 237  QM_ASSIGN/22              #126=     221:''               ?0                  	;0	<<345
357 237  ECHO/40                   ?0        #126                 ?0                  	;0	<<355
358 238  ECHO/40                   ?0        222:'</a></td>
                                    <td class="text-center">
                                        <a onClick="whois(\'' ?0                  	;0
359 239  NOP/0                     ?0        ?0                   ?0                  	;1
360 239  GOTO/253                  ?0        ?447                 ?223                	;0
361 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'number_format' 	;2
362 241  FETCH_DIM_R/81            $127=     16?2                 226:'bytes_received'	;0
363 241  DIV/4                     #128=     $127                 227:125000          	;0
364 241  SEND_VAL_EX/116           ?80       #128                 ?1                  	;0
365 241  SEND_VAL_EX/116           ?96       228:0                ?2                  	;0
366 241  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
367 241  ECHO/40                   ?0        $129                 ?0                  	;0
368 242  ECHO/40                   ?0        229:'</span> <i class="mdi mdi-arrow-down-thick"></i></button>
										<br/><small>' ?0                  	;0
369 243  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'number_format' 	;2
370 243  FETCH_DIM_FUNC_ARG/93     $130=     16?0                 232:'network_guaranteed_speed'	;1
371 243  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
372 243  SEND_VAL_EX/116           ?96       233:0                ?2                  	;0
373 243  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
374 243  ECHO/40                   ?0        $131                 ?0                  	;0
375 244  ECHO/40                   ?0        234:' Mbps</small>
                                    </td>
									<td class="text-center">
                                        ' ?0                  	;0
376 245  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'intval'        	;1
377 245  FETCH_DIM_FUNC_ARG/93     $132=     16?2                 237:'cpu'           	;1
378 245  SEND_VAR_EX/66            ?80       $132                 ?1                  	;0
379 245  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
380 245  IS_SMALLER_OR_EQUAL/20    #134=     $133                 238:34              	;0
381 245  JMPZ/43                   ?0        #134                 ?384                	;0	>>384
382 246  NOP/0                     ?0        ?0                   ?0                  	;1
383 246  GOTO/253                  ?0        ?210                 ?239                	;0
384 248  NOP/0                     ?0        ?0                   ?0                  	;1	<<381
385 248  GOTO/253                  ?0        ?643                 ?240                	;0
386 250  NOP/0                     ?0        ?0                   ?0                  	;1
387 250  GOTO/253                  ?0        ?306                 ?241                	;0
388 252  ECHO/40                   ?0        242:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
389 253  FETCH_DIM_R/81            $135=     16?0                 243:'id'            	;0
390 253  ECHO/40                   ?0        $135                 ?0                  	;0
391 254  ECHO/40                   ?0        244:', \'disable_proxy\');">Disable Proxy</a>
												' ?0                  	;0
392 255  NOP/0                     ?0        ?0                   ?0                  	;1
393 255  GOTO/253                  ?0        ?306                 ?245                	;0
394 258  ECHO/40                   ?0        246:'								<tr id="server-' ?0                  	;0
395 259  FETCH_DIM_R/81            $136=     16?0                 247:'id'            	;0
396 259  ECHO/40                   ?0        $136                 ?0                  	;0
397 260  ECHO/40                   ?0        248:'">
									<td class="text-center"><a data-id="' ?0                  	;0
398 261  FETCH_DIM_R/81            $137=     16?0                 249:'id'            	;0
399 261  ECHO/40                   ?0        $137                 ?0                  	;0
400 262  NOP/0                     ?0        ?0                   ?0                  	;1
401 262  GOTO/253                  ?0        ?148                 ?250                	;0
402 264  ECHO/40                   ?0        251:'">Edit Server</a>
												' ?0                  	;0
403 265  FETCH_DIM_R/81            $138=     16?0                 252:'enable_proxy'  	;0
404 265  JMPZ/43                   ?0        $138                 ?407                	;0	>>407
405 266  NOP/0                     ?0        ?0                   ?0                  	;1
406 266  GOTO/253                  ?0        ?388                 ?253                	;0
407 268  ECHO/40                   ?0        254:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0	<<404
408 269  FETCH_DIM_R/81            $139=     16?0                 255:'id'            	;0
409 269  ECHO/40                   ?0        $139                 ?0                  	;0
410 270  ECHO/40                   ?0        256:', \'enable_proxy\');">Enable Proxy</a>
												' ?0                  	;0
411 271  NOP/0                     ?0        ?0                   ?0                  	;1
412 271  GOTO/253                  ?0        ?386                 ?257                	;0
413 273  NOP/0                     ?0        ?0                   ?0                  	;1
414 273  GOTO/253                  ?0        ?416                 ?258                	;0
415 275  ECHO/40                   ?0        259:'<i class="text-info fas fa-square tooltip" title="Installing..."></i>' ?0                  	;0
416 277  NOP/0                     ?0        ?0                   ?0                  	;1
417 277  GOTO/253                  ?0        ?501                 ?260                	;0
418 278  NOP/0                     ?0        ?0                   ?0                  	;1
419 278  GOTO/253                  ?0        ?95                  ?261                	;0
420 280  ECHO/40                   ?0        262:'									<br/><small>of ' ?0                  	;0
421 281  INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'number_format' 	;2
422 281  FETCH_DIM_FUNC_ARG/93     $140=     16?0                 265:'total_clients' 	;1
423 281  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
424 281  SEND_VAL_EX/116           ?96       266:0                ?2                  	;0
425 281  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
426 281  ECHO/40                   ?0        $141                 ?0                  	;0
427 282  ECHO/40                   ?0        267:'</small>
                                    </td>
									<td class="text-center">
                                        <button type="button" class="btn btn-dark bg-animate btn-xs waves-effect waves-light no-border"><span id="header_streams_up">' ?0                  	;0
428 283  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'number_format' 	;2
429 283  FETCH_DIM_R/81            $142=     16?2                 270:'bytes_sent'    	;0
430 283  DIV/4                     #143=     $142                 271:125000          	;0
431 283  SEND_VAL_EX/116           ?80       #143                 ?1                  	;0
432 283  SEND_VAL_EX/116           ?96       272:0                ?2                  	;0
433 283  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
434 283  ECHO/40                   ?0        $144                 ?0                  	;0
435 284  ECHO/40                   ?0        273:'</span> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_streams_down">' ?0                  	;0
436 285  NOP/0                     ?0        ?0                   ?0                  	;1
437 285  GOTO/253                  ?0        ?361                 ?274                	;0
438 288  ASSIGN/38                 ?134      16?9                 275:'#23b397'       	;0
439 290  ECHO/40                   ?0        276:'                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="' ?0                  	;0
440 291  FETCH_DIM_R/81            $146=     16?3                 277:'theme'         	;0
441 291  IS_EQUAL/17               #147=     $146                 278:1               	;0
442 291  JMPZ/43                   ?0        #147                 ?445                	;0	>>445
443 292  NOP/0                     ?0        ?0                   ?0                  	;1
444 292  GOTO/253                  ?0        ?519                 ?279                	;0
445 294  NOP/0                     ?0        ?0                   ?0                  	;1	<<442
446 294  GOTO/253                  ?0        ?516                 ?280                	;0
447 296  FETCH_DIM_R/81            $148=     16?0                 281:'server_ip'     	;0
448 296  ECHO/40                   ?0        $148                 ?0                  	;0
449 297  ECHO/40                   ?0        282:'\');" href="javascript: void(0);">' ?0                  	;0
450 298  FETCH_DIM_R/81            $149=     16?0                 283:'server_ip'     	;0
451 298  ECHO/40                   ?0        $149                 ?0                  	;0
452 299  ECHO/40                   ?0        284:'</a>
                                        ' ?0                  	;0
453 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'strlen'        	;1
454 300  FETCH_DIM_FUNC_ARG/93     $150=     16?0                 287:'private_ip'    	;1
455 300  SEND_VAR_EX/66            ?80       $150                 ?1                  	;0
456 300  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
457 300  IS_SMALLER/19             #152=     288:0                $151                	;0
458 300  BOOL_NOT/13               #153=     #152                 ?0                  	;0
459 300  JMPZ/43                   ?0        #153                 ?462                	;0	>>462
460 301  NOP/0                     ?0        ?0                   ?0                  	;1
461 301  GOTO/253                  ?0        ?321                 ?289                	;0
462 303  NOP/0                     ?0        ?0                   ?0                  	;1	<<459
463 303  GOTO/253                  ?0        ?249                 ?290                	;0
464 306  ECHO/40                   ?0        291:'											</div>
										</div>
										' ?0                  	;0
465 309  ECHO/40                   ?0        292:'									</td>
								</tr>
								' ?0                  	;0
466 310  NOP/0                     ?0        ?0                   ?0                  	;1
467 310  GOTO/253                  ?0        ?336                 ?293                	;0
468 313  FETCH_DIM_R/81            $154=     16?0                 294:'enabled'       	;0
469 313  JMPZ/43                   ?0        $154                 ?472                	;0	>>472
470 314  NOP/0                     ?0        ?0                   ?0                  	;1
471 314  GOTO/253                  ?0        ?293                 ?295                	;0
472 316  ECHO/40                   ?0        296:'                                            <button type="button" title="Enable Server" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0	<<469
473 317  FETCH_DIM_R/81            $155=     16?0                 297:'id'            	;0
474 317  ECHO/40                   ?0        $155                 ?0                  	;0
475 318  ECHO/40                   ?0        298:', \'enable\');"><i class="mdi mdi-access-point-network"></i></button>
                                            ' ?0                  	;0
476 319  NOP/0                     ?0        ?0                   ?0                  	;1
477 319  GOTO/253                  ?0        ?291                 ?299                	;0
478 321  ECHO/40                   ?0        300:'--'             ?0                  	;0
479 322  NOP/0                     ?0        ?0                   ?0                  	;1
480 322  GOTO/253                  ?0        ?465                 ?301                	;0
481 324  FETCH_STATIC_PROP_R/173   $156=     302:'rSettings'      303:'XUI'           	;0
482 324  FETCH_DIM_R/81            $157=     $156                 305:'group_buttons' 	;0
483 324  JMPZ/43                   ?0        $157                 ?486                	;0	>>486
484 325  NOP/0                     ?0        ?0                   ?0                  	;1
485 325  GOTO/253                  ?0        ?244                 ?306                	;0
486 327  ECHO/40                   ?0        307:'										<div class="btn-group">
											<button type="button" title="Server Tools" class="btn btn-light waves-effect waves-light btn-xs btn-reboot-server tooltip" data-id="' ?0                  	;0	<<483
487 328  NOP/0                     ?0        ?0                   ?0                  	;1
488 328  GOTO/253                  ?0        ?28                  ?308                	;0
489 330  INIT_FCALL_BY_NAME/59     ?0        ?0                   309:'intval'        	;1
490 330  FETCH_DIM_FUNC_ARG/93     $158=     16?0                 311:'id'            	;1
491 330  SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
492 330  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
493 330  CONCAT/8                  #160=     312:'<a href="javascript: void(0);" onClick="api(' $159                	;0
494 330  CONCAT/8                  #161=     #160                 313:', \'update\');"><i class="text-success mdi mdi-download tooltip" style="font-size:14pt;" title="An update is available! v'	;0
495 330  FETCH_CONSTANT/99         #162=     ?0                   314:'SERVER_ID'     	;16
496 330  FETCH_DIM_R/81            $163=     16?6                 #162                	;0
497 330  FETCH_DIM_R/81            $164=     $163                 317:'xui_version'   	;0
498 330  CONCAT/8                  #165=     #161                 $164                	;0
499 330  CONCAT/8                  #166=     #165                 318:'"></i></a>'    	;0
500 330  ECHO/40                   ?0        #166                 ?0                  	;0
501 333  NOP/0                     ?0        ?0                   ?0                  	;1
502 333  GOTO/253                  ?0        ?181                 ?319                	;0
503 335  NOP/0                     ?0        ?0                   ?0                  	;1
504 335  GOTO/253                  ?0        ?180                 ?320                	;0
505 337  ECHO/40                   ?0        321:'" data-fgColor="' ?0                  	;0
506 338  ECHO/40                   ?0        16?9                 ?0                  	;0
507 339  ECHO/40                   ?0        322:'" data-readOnly=true value="' ?0                  	;0
508 340  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'intval'        	;1
509 340  FETCH_DIM_FUNC_ARG/93     $167=     16?2                 325:'total_mem_used_percent'	;1
510 340  SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
511 340  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
512 340  ECHO/40                   ?0        $168                 ?0                  	;0
513 341  ECHO/40                   ?0        326:'"/>
                                    </td>
                                    <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>' ?0                  	;0
514 342  NOP/0                     ?0        ?0                   ?0                  	;1
515 342  GOTO/253                  ?0        ?585                 ?327                	;0
516 344  ECHO/40                   ?0        328:'#ebeff2'        ?0                  	;0
517 345  NOP/0                     ?0        ?0                   ?0                  	;1
518 345  GOTO/253                  ?0        ?520                 ?329                	;0
519 347  ECHO/40                   ?0        330:'#7e8e9d'        ?0                  	;0
520 349  NOP/0                     ?0        ?0                   ?0                  	;1
521 349  GOTO/253                  ?0        ?505                 ?331                	;0
522 351  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'intval'        	;1
523 351  FETCH_DIM_FUNC_ARG/93     $169=     16?2                 334:'cpu'           	;1
524 351  SEND_VAR_EX/66            ?80       $169                 ?1                  	;0
525 351  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
526 351  ECHO/40                   ?0        $170                 ?0                  	;0
527 352  ECHO/40                   ?0        335:'"/>
                                    </td>
                                    <td class="text-center">
                                        ' ?0                  	;0
528 353  INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'intval'        	;1
529 353  FETCH_DIM_FUNC_ARG/93     $171=     16?2                 338:'total_mem_used_percent'	;1
530 353  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
531 353  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
532 353  IS_SMALLER_OR_EQUAL/20    #173=     $172                 339:34              	;0
533 353  JMPZ/43                   ?0        #173                 ?536                	;0	>>536
534 354  NOP/0                     ?0        ?0                   ?0                  	;1
535 354  GOTO/253                  ?0        ?438                 ?340                	;0
536 356  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'intval'        	;1	<<533
537 356  FETCH_DIM_FUNC_ARG/93     $174=     16?2                 343:'total_mem_used_percent'	;1
538 356  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
539 356  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
540 356  IS_SMALLER_OR_EQUAL/20    #176=     $175                 344:67              	;0
541 356  JMPZ/43                   ?0        #176                 ?544                	;0	>>544
542 357  NOP/0                     ?0        ?0                   ?0                  	;1
543 357  GOTO/253                  ?0        ?301                 ?345                	;0
544 359  ASSIGN/38                 ?166      16?9                 346:'#f0643b'       	;0	<<541
545 360  NOP/0                     ?0        ?0                   ?0                  	;1
546 360  GOTO/253                  ?0        ?299                 ?347                	;0
547 362  FETCH_DIM_R/81            $178=     16?0                 348:'server_type'   	;0
548 362  IS_NOT_EQUAL/18           #179=     $178                 349:0               	;0
549 362  BOOL_NOT/13               #180=     #179                 ?0                  	;0
550 362  JMPZ/43                   ?0        #180                 ?553                	;0	>>553
551 363  NOP/0                     ?0        ?0                   ?0                  	;1
552 363  GOTO/253                  ?0        ?555                 ?350                	;0
553 365  NOP/0                     ?0        ?0                   ?0                  	;1	<<550
554 365  GOTO/253                  ?0        ?336                 ?351                	;0
555 367  INIT_FCALL_BY_NAME/59     ?0        ?0                   352:'json_decode'   	;2
556 367  FETCH_DIM_FUNC_ARG/93     $181=     16?0                 354:'watchdog_data' 	;1
557 367  SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
558 367  SEND_VAL_EX/116           ?96       355:true             ?2                  	;0
559 367  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
560 367  ASSIGN/38                 ?172      16?2                 $182                	;0
561 368  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'is_array'      	;1
562 368  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
563 368  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
564 368  JMPZ/43                   ?0        $184                 ?567                	;0	>>567
565 369  NOP/0                     ?0        ?0                   ?0                  	;1
566 369  GOTO/253                  ?0        ?58                  ?358                	;0
567 371  NOP/0                     ?0        ?0                   ?0                  	;1	<<564
568 371  GOTO/253                  ?0        ?57                  ?359                	;0
569 373  ECHO/40                   ?0        360:', \'enable\');">Enable Server</a>
												' ?0                  	;0
570 374  NOP/0                     ?0        ?0                   ?0                  	;1
571 374  GOTO/253                  ?0        ?618                 ?361                	;0
572 376  ECHO/40                   ?0        362:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
573 377  FETCH_DIM_R/81            $185=     16?0                 363:'id'            	;0
574 377  ECHO/40                   ?0        $185                 ?0                  	;0
575 378  NOP/0                     ?0        ?0                   ?0                  	;1
576 378  GOTO/253                  ?0        ?617                 ?364                	;0
577 380  ECHO/40                   ?0        365:', \'enable_proxy\');"><i class="mdi mdi-shield-check-outline"></i></button>
                                            ' ?0                  	;0
578 381  NOP/0                     ?0        ?0                   ?0                  	;1
579 381  GOTO/253                  ?0        ?633                 ?366                	;0
580 383  ECHO/40                   ?0        367:'                                            <button type="button" title="Disable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
581 384  FETCH_DIM_R/81            $186=     16?0                 368:'id'            	;0
582 384  ECHO/40                   ?0        $186                 ?0                  	;0
583 385  NOP/0                     ?0        ?0                   ?0                  	;1
584 385  GOTO/253                  ?0        ?632                 ?369                	;0
585 387  INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'number_format' 	;2
586 387  FETCH_DIM_R/81            $187=     16?0                 372:'server_online' 	;0
587 387  JMPZ/43                   ?0        $187                 ?591                	;0	>>591
588 387  FETCH_DIM_R/81            $188=     16?0                 373:'ping'          	;0
589 387  QM_ASSIGN/22              #189=     $188                 ?0                  	;0
590 387  JMP/42                    ?0        ?592                 ?0                  	;0	>>592
591 387  QM_ASSIGN/22              #189=     374:0                ?0                  	;0	<<587
592 387  SEND_VAL_EX/116           ?80       #189                 ?1                  	;0	<<590
593 387  SEND_VAL_EX/116           ?96       375:0                ?2                  	;0
594 387  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
595 387  ECHO/40                   ?0        $190                 ?0                  	;0
596 388  ECHO/40                   ?0        376:' ms</button></td>
                                    <td class="text-center">
                                        <button type=\'button\' class=\'btn ' ?0                  	;0
597 389  FETCH_DIM_R/81            $191=     16?0                 377:'xui_version'   	;0
598 389  FETCH_CONSTANT/99         #192=     ?0                   378:'SERVER_ID'     	;16
599 389  FETCH_DIM_R/81            $193=     16?6                 #192                	;0
600 389  FETCH_DIM_R/81            $194=     $193                 381:'xui_version'   	;0
601 389  IS_NOT_EQUAL/18           #195=     $191                 $194                	;0
602 389  JMPNZ_EX/47               #195=     #195                 ?609                	;0	>>609
603 389  FETCH_DIM_R/81            $196=     16?0                 382:'xui_revision'  	;0
604 389  FETCH_CONSTANT/99         #197=     ?0                   383:'SERVER_ID'     	;16
605 389  FETCH_DIM_R/81            $198=     16?6                 #197                	;0
606 389  FETCH_DIM_R/81            $199=     $198                 386:'xui_revision'  	;0
607 389  IS_NOT_EQUAL/18           #200=     $196                 $199                	;0
608 389  BOOL/52                   #195=     #200                 ?0                  	;0
609 389  JMPZ/43                   ?0        #195                 ?612                	;0	>>612	<<602
610 390  NOP/0                     ?0        ?0                   ?0                  	;1
611 390  GOTO/253                  ?0        ?624                 ?387                	;0
612 392  ECHO/40                   ?0        388:'btn-light'      ?0                  	;0	<<609
613 393  NOP/0                     ?0        ?0                   ?0                  	;1
614 393  GOTO/253                  ?0        ?625                 ?389                	;0
615 394  NOP/0                     ?0        ?0                   ?0                  	;1
616 394  GOTO/253                  ?0        ?624                 ?390                	;0
617 396  ECHO/40                   ?0        391:', \'disable\');">Disable Server</a>
												' ?0                  	;0
618 398  ECHO/40                   ?0        392:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
619 399  FETCH_DIM_R/81            $201=     16?0                 393:'id'            	;0
620 399  ECHO/40                   ?0        $201                 ?0                  	;0
621 400  ECHO/40                   ?0        394:', \'delete\');">Delete Server</a>
												' ?0                  	;0
622 401  NOP/0                     ?0        ?0                   ?0                  	;1
623 401  GOTO/253                  ?0        ?464                 ?395                	;0
624 404  ECHO/40                   ?0        396:'btn-warning'    ?0                  	;0
625 406  ECHO/40                   ?0        397:' btn-xs waves-effect waves-light\'>
                                            ' ?0                  	;0
626 407  FETCH_DIM_R/81            $202=     16?0                 398:'xui_version'   	;0
627 407  JMPZ/43                   ?0        $202                 ?630                	;0	>>630
628 408  NOP/0                     ?0        ?0                   ?0                  	;1
629 408  GOTO/253                  ?0        ?660                 ?399                	;0
630 410  NOP/0                     ?0        ?0                   ?0                  	;1	<<627
631 410  GOTO/253                  ?0        ?657                 ?400                	;0
632 412  ECHO/40                   ?0        401:', \'disable_proxy\');"><i class="mdi mdi-shield-off-outline"></i></button>
                                            ' ?0                  	;0
633 414  FETCH_DIM_R/81            $203=     16?0                 402:'is_main'       	;0
634 414  IS_EQUAL/17               #204=     $203                 403:0               	;0
635 414  JMPZ/43                   ?0        #204                 ?638                	;0	>>638
636 415  NOP/0                     ?0        ?0                   ?0                  	;1
637 415  GOTO/253                  ?0        ?468                 ?404                	;0
638 417  ECHO/40                   ?0        405:'                                            <button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-access-point-network"></i></button>
											<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button>
											' ?0                  	;0	<<635
639 418  NOP/0                     ?0        ?0                   ?0                  	;1
640 418  GOTO/253                  ?0        ?271                 ?406                	;0
641 419  NOP/0                     ?0        ?0                   ?0                  	;1
642 419  GOTO/253                  ?0        ?468                 ?407                	;0
643 421  INIT_FCALL_BY_NAME/59     ?0        ?0                   408:'intval'        	;1
644 421  FETCH_DIM_FUNC_ARG/93     $205=     16?2                 410:'cpu'           	;1
645 421  SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
646 421  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
647 421  IS_SMALLER_OR_EQUAL/20    #207=     $206                 411:67              	;0
648 421  JMPZ/43                   ?0        #207                 ?651                	;0	>>651
649 422  NOP/0                     ?0        ?0                   ?0                  	;1
650 422  GOTO/253                  ?0        ?654                 ?412                	;0
651 424  ASSIGN/38                 ?197      16?9                 413:'#f0643b'       	;0	<<648
652 425  NOP/0                     ?0        ?0                   ?0                  	;1
653 425  GOTO/253                  ?0        ?208                 ?414                	;0
654 427  ASSIGN/38                 ?198      16?9                 415:'#f8cc6b'       	;0
655 428  NOP/0                     ?0        ?0                   ?0                  	;1
656 428  GOTO/253                  ?0        ?208                 ?416                	;0
657 430  ECHO/40                   ?0        417:'N/A'            ?0                  	;0
658 431  NOP/0                     ?0        ?0                   ?0                  	;1
659 431  GOTO/253                  ?0        ?85                  ?418                	;0
660 433  FETCH_DIM_R/81            $210=     16?0                 419:'xui_version'   	;0
661 433  ECHO/40                   ?0        $210                 ?0                  	;0
662 434  FETCH_DIM_R/81            $211=     16?0                 420:'xui_revision'  	;0
663 434  BOOL_NOT/13               #212=     $211                 ?0                  	;0
664 434  JMPZ/43                   ?0        #212                 ?667                	;0	>>667
665 435  NOP/0                     ?0        ?0                   ?0                  	;1
666 435  GOTO/253                  ?0        ?85                  ?421                	;0
667 437  NOP/0                     ?0        ?0                   ?0                  	;1	<<664
668 437  GOTO/253                  ?0        ?82                  ?422                	;0
669 439  NOP/0                     ?0        ?0                   ?0                  	;1
670 439  GOTO/253                  ?0        ?672                 ?423                	;0
671 441  ECHO/40                   ?0        424:'<i class="text-success fas fa-square"></i>' ?0                  	;0
672 443  ECHO/40                   ?0        425:'                                    </td>
									<td><a href="server_view?id=' ?0                  	;0
673 444  NOP/0                     ?0        ?0                   ?0                  	;1
674 444  GOTO/253                  ?0        ?338                 ?426                	;0
675 445  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
676 445  FE_FREE/127               ?0        $12                  ?0                  	;0	<<2
677 448  ECHO/40                   ?0        427:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
678 449  GOTO/253                  ?0        ?716                 ?428                	;0
679 451  INCLUDE_OR_EVAL/73        ?202      429:'session.php'    ?0                  	;2	<<0
680 452  INCLUDE_OR_EVAL/73        ?203      430:'functions.php'  ?0                  	;2
681 453  INIT_FCALL_BY_NAME/59     ?0        ?0                   431:'e6D500E19634D513'	;0
682 453  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
683 453  JMPZ/43                   ?0        $215                 ?685                	;0	>>685
684 454  GOTO/253                  ?0        ?687                 ?433                	;0
685 456  INIT_FCALL_BY_NAME/59     ?0        ?0                   434:'E72f42A93714BA87'	;0	<<683
686 456  DO_FCALL_BY_NAME/131      ?205      ?0                   ?0                  	;0
687 458  GOTO/253                  ?0        ?693                 ?436                	;0
688 460  ECHO/40                   ?0        437:' style="display: none;"' ?0                  	;0
689 462  ECHO/40                   ?0        438:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						' ?0                  	;0
690 463  INCLUDE_OR_EVAL/73        ?206      439:'topbar.php'     ?0                  	;2
691 464  ECHO/40                   ?0        440:'					</div>
					<h4 class="page-title">Servers</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">Order</th>
									<th class="text-center">Status</th>
                                    <th class="text-center">Proxied</th>
                                    <th>Server Name</th>
                                    <th class="text-center">Server IP</th>
									<th class="text-center">Connections</th>
									<th class="text-center">Network</th>
									<th class="text-center">CPU %</th>
									<th class="text-center">MEM %</th>
                                    <th class="text-center">Ping</th>
                                    <th class="text-center">Version</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
692 465  GOTO/253                  ?0        ?1                   ?441                	;0
693 467  INIT_STATIC_METHOD_CALL/113 ?0        445:'XUI'            447:'f76008f8DfE1898c'	;1
694 467  SEND_VAL_EX/116           ?80       449:true             ?1                  	;0
695 467  DO_FCALL/60               $219=     ?0                   ?0                  	;0
696 467  FETCH_STATIC_PROP_W/174   $218=     442:'rServers'       443:'XUI'           	;0
697 467  ASSIGN/38                 ?209      $218                 $219                	;0
698 468  ASSIGN/38                 ?210      16?10                450:'Servers'       	;0
699 469  INCLUDE_OR_EVAL/73        ?211      451:'header.php'     ?0                  	;2
700 470  ECHO/40                   ?0        452:'<div class="wrapper"' ?0                  	;0
701 471  FETCH_IS/89               $223=     453:'_SERVER'        ?0                  	;0
702 471  ISSET_ISEMPTY_DIM_OBJ/115 #224=     $223                 454:'HTTP_X_REQUESTED_WITH'	;16777216
703 471  BOOL_NOT/13               #225=     #224                 ?0                  	;0
704 471  JMPZ_EX/46                #225=     #225                 ?712                	;0	>>712
705 471  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'strtolower'    	;1
706 471  FETCH_FUNC_ARG/92         $226=     457:'_SERVER'        ?0                  	;1
707 471  FETCH_DIM_FUNC_ARG/93     $227=     $226                 458:'HTTP_X_REQUESTED_WITH'	;1
708 471  SEND_VAR_EX/66            ?80       $227                 ?1                  	;0
709 471  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
710 471  IS_EQUAL/17               #229=     $228                 459:'xmlhttprequest'	;0
711 471  BOOL/52                   #225=     #229                 ?0                  	;0
712 471  BOOL_NOT/13               #230=     #225                 ?0                  	;0	<<704
713 471  JMPZ/43                   ?0        #230                 ?715                	;0	>>715
714 472  GOTO/253                  ?0        ?689                 ?460                	;0
715 474  GOTO/253                  ?0        ?688                 ?461                	;0	<<713
716 476  INCLUDE_OR_EVAL/73        ?220      462:'footer.php'     ?0                  	;2
717 477  NOP/0                     ?0        463:1                ?0                  	;4294967295
*/

?>