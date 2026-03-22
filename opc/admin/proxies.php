<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?506                 ?0                  	;0	>>506
1   5    ECHO/40                   ?0        1:' style="display: none;"' ?0                  	;0
2   7    ECHO/40                   ?0        2:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						' ?0                  	;0
3   8    INCLUDE_OR_EVAL/73        ?0        3:'topbar.php'       ?0                  	;2
4   9    ECHO/40                   ?0        4:'					</div>
					<h4 class="page-title">Proxy Servers</h4>
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
									<th class="text-center">ID</th>
									<th class="text-center">Status</th>
                                    <th>Proxy Name</th>
                                    <th>Proxied Server</th>
									<th class="text-center">Proxy IP</th>
									<th class="text-center">Network</th>
									<th class="text-center">Connections</th>
									<th class="text-center">CPU %</th>
									<th class="text-center">MEM %</th>
									<th class="text-center">Ping</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
5   10   GOTO/253                  ?0        ?6                   ?5                  	;0
6   12   FETCH_STATIC_PROP_R/173   $10=      6:'rServers'         7:'XUI'             	;0
7   12   FE_RESET_R/77             $11=      $10                  ?480                	;0
8   12   FE_FETCH_R/78             ?0        $11                  16?0                	;480	>>480	<<479
9   13   NOP/0                     ?0        ?0                   ?0                  	;1
10  13   GOTO/253                  ?0        ?182                 ?9                  	;0
11  15   ECHO/40                   ?0        10:'										<div class="btn-group">
											<button type="button" title="Proxy Tools" class="btn btn-light waves-effect waves-light btn-xs btn-reboot-server tooltip" data-id="' ?0                  	;0
12  16   FETCH_DIM_R/81            $12=      16?0                 11:'id'             	;0
13  16   ECHO/40                   ?0        $12                  ?0                  	;0
14  17   ECHO/40                   ?0        12:'"><i class="mdi mdi-creation"></i></button>
											<button type="button" title="Kill All Connections" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
15  18   FETCH_DIM_R/81            $13=      16?0                 13:'id'             	;0
16  18   ECHO/40                   ?0        $13                  ?0                  	;0
17  19   ECHO/40                   ?0        14:', \'kill\');"><i class="fas fa-hammer"></i></button>
                                            <a href="./proxy?id=' ?0                  	;0
18  20   NOP/0                     ?0        ?0                   ?0                  	;1
19  20   GOTO/253                  ?0        ?437                 ?15                 	;0
20  22   ASSIGN/38                 ?5        16?1                 16:array (
  'total_mem_used_percent' => 0,
  'cpu' => 0,
)	;0
21  24   FETCH_DIM_R/81            $16=      16?0                 20:'id'             	;0
22  24   FETCH_STATIC_PROP_R/173   $15=      17:'rServers'        18:'XUI'            	;0
23  24   FETCH_DIM_R/81            $17=      $15                  $16                 	;0
24  24   FETCH_DIM_R/81            $18=      $17                  21:'server_online'  	;0
25  24   JMPZ/43                   ?0        $18                  ?28                 	;0	>>28
26  25   NOP/0                     ?0        ?0                   ?0                  	;1
27  25   GOTO/253                  ?0        ?34                  ?22                 	;0
28  27   ASSIGN_DIM/147            ?10       16?1                 23:'cpu'            	;0	<<25
29  27   OP_DATA/137               ?0        24:0                 ?0                  	;0
30  28   ASSIGN_DIM/147            ?11       16?1                 25:'total_mem_used_percent'	;0
31  28   OP_DATA/137               ?0        26:0                 ?0                  	;0
32  29   NOP/0                     ?0        ?0                   ?0                  	;1
33  29   GOTO/253                  ?0        ?34                  ?27                 	;0
34  32   ECHO/40                   ?0        28:'								<tr id="server-' ?0                  	;0
35  33   FETCH_DIM_R/81            $21=      16?0                 29:'id'             	;0
36  33   ECHO/40                   ?0        $21                  ?0                  	;0
37  34   ECHO/40                   ?0        30:'">
									<td class="text-center">' ?0                  	;0
38  35   FETCH_DIM_R/81            $22=      16?0                 31:'id'             	;0
39  35   ECHO/40                   ?0        $22                  ?0                  	;0
40  36   NOP/0                     ?0        ?0                   ?0                  	;1
41  36   GOTO/253                  ?0        ?449                 ?32                 	;0
42  38   ECHO/40                   ?0        33:'" data-fgColor="' ?0                  	;0
43  39   ECHO/40                   ?0        16?2                 ?0                  	;0
44  40   ECHO/40                   ?0        34:'" data-readOnly=true value="' ?0                  	;0
45  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'intval'         	;1
46  41   FETCH_DIM_FUNC_ARG/93     $23=      16?1                 37:'cpu'            	;1
47  41   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
48  41   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
49  41   ECHO/40                   ?0        $24                  ?0                  	;0
50  42   ECHO/40                   ?0        38:'"/>
                                    </td>
                                    <td class="text-center">
                                        ' ?0                  	;0
51  43   NOP/0                     ?0        ?0                   ?0                  	;1
52  43   GOTO/253                  ?0        ?53                  ?39                 	;0
53  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'intval'         	;1
54  45   FETCH_DIM_FUNC_ARG/93     $25=      16?1                 42:'total_mem_used_percent'	;1
55  45   SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
56  45   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
57  45   IS_SMALLER_OR_EQUAL/20    #27=      $26                  43:34               	;0
58  45   JMPZ/43                   ?0        #27                  ?61                 	;0	>>61
59  46   NOP/0                     ?0        ?0                   ?0                  	;1
60  46   GOTO/253                  ?0        ?207                 ?44                 	;0
61  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'intval'         	;1	<<58
62  48   FETCH_DIM_FUNC_ARG/93     $28=      16?1                 47:'total_mem_used_percent'	;1
63  48   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
64  48   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
65  48   IS_SMALLER_OR_EQUAL/20    #30=      $29                  48:67               	;0
66  48   JMPZ/43                   ?0        #30                  ?69                 	;0	>>69
67  49   NOP/0                     ?0        ?0                   ?0                  	;1
68  49   GOTO/253                  ?0        ?72                  ?49                 	;0
69  51   ASSIGN/38                 ?22       16?2                 50:'#f0643b'        	;0	<<66
70  52   NOP/0                     ?0        ?0                   ?0                  	;1
71  52   GOTO/253                  ?0        ?205                 ?51                 	;0
72  54   NOP/0                     ?0        ?0                   ?0                  	;1
73  54   GOTO/253                  ?0        ?204                 ?52                 	;0
74  56   ECHO/40                   ?0        53:'">'              ?0                  	;0
75  57   FETCH_DIM_R/81            $32=      16?0                 54:'server_name'    	;0
76  57   ECHO/40                   ?0        $32                  ?0                  	;0
77  58   ISSET_ISEMPTY_DIM_OBJ/115 #33=      16?0                 55:'domain_name'    	;16777216
78  58   BOOL_NOT/13               #34=      #33                  ?0                  	;0
79  58   JMPZ/43                   ?0        #34                  ?90                 	;0	>>90
80  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'explode'        	;2
81  58   SEND_VAL_EX/116           ?80       58:','               ?1                  	;0
82  58   FETCH_DIM_FUNC_ARG/93     $35=      16?0                 59:'domain_name'    	;2
83  58   SEND_VAR_EX/66            ?96       $35                  ?2                  	;0
84  58   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
85  58   FETCH_DIM_R/81            $37=      $36                  60:0                	;0
86  58   CONCAT/8                  #38=      61:'<br/><small>'    $37                 	;0
87  58   CONCAT/8                  #39=      #38                  62:'</small>'       	;0
88  58   QM_ASSIGN/22              #40=      #39                  ?0                  	;0
89  58   JMP/42                    ?0        ?91                  ?0                  	;0	>>91
90  58   QM_ASSIGN/22              #40=      63:''                ?0                  	;0	<<79
91  58   ECHO/40                   ?0        #40                  ?0                  	;0	<<89
92  59   ECHO/40                   ?0        64:'</a></td>
                                    <td><a href="server_view?id=' ?0                  	;0
93  60   FETCH_DIM_R/81            $41=      16?0                 65:'parent_id'      	;0
94  60   FETCH_DIM_R/81            $42=      $41                  66:0                	;0
95  60   ECHO/40                   ?0        $42                  ?0                  	;0
96  61   NOP/0                     ?0        ?0                   ?0                  	;1
97  61   GOTO/253                  ?0        ?328                 ?67                 	;0
98  64   ECHO/40                   ?0        68:'<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>' ?0                  	;0
99  66   ECHO/40                   ?0        69:'                                    </td>
                                    <td><a href="server_view?id=' ?0                  	;0
100 67   FETCH_DIM_R/81            $43=      16?0                 70:'id'             	;0
101 67   ECHO/40                   ?0        $43                  ?0                  	;0
102 68   NOP/0                     ?0        ?0                   ?0                  	;1
103 68   GOTO/253                  ?0        ?74                  ?71                 	;0
104 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'intval'         	;1
105 70   FETCH_DIM_FUNC_ARG/93     $44=      16?0                 74:'id'             	;1
106 70   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
107 70   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
108 70   ECHO/40                   ?0        $45                  ?0                  	;0
109 71   ECHO/40                   ?0        75:');" type=\'button\' class=\'tooltip-left btn btn-info btn-xs waves-effect waves-light\'>+ ' ?0                  	;0
110 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'count'          	;1
111 72   FETCH_DIM_FUNC_ARG/93     $46=      16?0                 78:'parent_id'      	;1
112 72   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
113 72   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
114 72   SUB/2                     #48=      $47                  79:1                	;0
115 72   ECHO/40                   ?0        #48                  ?0                  	;0
116 73   ECHO/40                   ?0        80:'</button>'       ?0                  	;0
117 75   NOP/0                     ?0        ?0                   ?0                  	;1
118 75   GOTO/253                  ?0        ?210                 ?81                 	;0
119 78   NOP/0                     ?0        ?0                   ?0                  	;1
120 78   GOTO/253                  ?0        ?479                 ?82                 	;0
121 80   ECHO/40                   ?0        83:'</small>
                                    </td>
									<td class="text-center">
                                        <button type="button" class="btn btn-dark bg-animate btn-xs waves-effect waves-light no-border"><span id="header_streams_up">' ?0                  	;0
122 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'number_format'  	;2
123 81   FETCH_DIM_R/81            $49=      16?1                 86:'bytes_sent'     	;0
124 81   DIV/4                     #50=      $49                  87:125000           	;0
125 81   SEND_VAL_EX/116           ?80       #50                  ?1                  	;0
126 81   SEND_VAL_EX/116           ?96       88:0                 ?2                  	;0
127 81   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
128 81   ECHO/40                   ?0        $51                  ?0                  	;0
129 82   ECHO/40                   ?0        89:'</span> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_streams_down">' ?0                  	;0
130 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'number_format'  	;2
131 83   FETCH_DIM_R/81            $52=      16?1                 92:'bytes_received' 	;0
132 83   DIV/4                     #53=      $52                  93:125000           	;0
133 83   SEND_VAL_EX/116           ?80       #53                  ?1                  	;0
134 83   SEND_VAL_EX/116           ?96       94:0                 ?2                  	;0
135 83   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
136 83   ECHO/40                   ?0        $54                  ?0                  	;0
137 84   ECHO/40                   ?0        95:'</span> <i class="mdi mdi-arrow-down-thick"></i></button>
										<br/><small>' ?0                  	;0
138 85   NOP/0                     ?0        ?0                   ?0                  	;1
139 85   GOTO/253                  ?0        ?355                 ?96                 	;0
140 87   ECHO/40                   ?0        97:', \'disable\');"><i class="mdi mdi-close-network-outline"></i></button>
                                            ' ?0                  	;0
141 89   ECHO/40                   ?0        98:'                                            <button type="button" title="Delete Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
142 90   FETCH_DIM_R/81            $55=      16?0                 99:'id'             	;0
143 90   ECHO/40                   ?0        $55                  ?0                  	;0
144 91   ECHO/40                   ?0        100:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
										' ?0                  	;0
145 92   NOP/0                     ?0        ?0                   ?0                  	;1
146 92   GOTO/253                  ?0        ?347                 ?101                	;0
147 94   FETCH_DIM_R/81            $56=      16?0                 102:'id'            	;0
148 94   ECHO/40                   ?0        $56                  ?0                  	;0
149 95   ECHO/40                   ?0        103:', \'delete\');">Delete Proxy</a>
											</div>
										</div>
										' ?0                  	;0
150 98   ECHO/40                   ?0        104:'									</td>
								</tr>
								' ?0                  	;0
151 99   NOP/0                     ?0        ?0                   ?0                  	;1
152 99   GOTO/253                  ?0        ?119                 ?105                	;0
153 101  NOP/0                     ?0        ?0                   ?0                  	;1
154 101  GOTO/253                  ?0        ?162                 ?106                	;0
155 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'date'          	;2
156 103  FETCH_DIM_FUNC_ARG/93     $57=      16?4                 109:'datetime_format'	;1
157 103  SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
158 103  FETCH_DIM_FUNC_ARG/93     $58=      16?0                 110:'last_check_ago'	;2
159 103  SEND_VAR_EX/66            ?96       $58                  ?2                  	;0
160 103  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
161 103  ASSIGN/38                 ?51       16?3                 $59                 	;0
162 105  FETCH_DIM_R/81            $61=      16?0                 111:'status'        	;0
163 105  IS_EQUAL/17               #62=      $61                  112:3               	;0
164 105  JMPZ/43                   ?0        #62                  ?167                	;0	>>167
165 106  NOP/0                     ?0        ?0                   ?0                  	;1
166 106  GOTO/253                  ?0        ?434                 ?113                	;0
167 108  NOP/0                     ?0        ?0                   ?0                  	;1	<<164
168 108  GOTO/253                  ?0        ?407                 ?114                	;0
169 110  ECHO/40                   ?0        115:'<i class="text-info fas fa-square tooltip" title="Updating..."></i>' ?0                  	;0
170 112  NOP/0                     ?0        ?0                   ?0                  	;1
171 112  GOTO/253                  ?0        ?432                 ?116                	;0
172 114  ECHO/40                   ?0        117:'<i class="text-warning fas fa-square tooltip" title="Installation Failed!"></i>' ?0                  	;0
173 115  NOP/0                     ?0        ?0                   ?0                  	;1
174 115  GOTO/253                  ?0        ?432                 ?118                	;0
175 117  NOP/0                     ?0        ?0                   ?0                  	;1
176 117  GOTO/253                  ?0        ?178                 ?119                	;0
177 119  ECHO/40                   ?0        120:'<i class="text-success fas fa-square tooltip" title="Online"></i>' ?0                  	;0
178 121  NOP/0                     ?0        ?0                   ?0                  	;1
179 121  GOTO/253                  ?0        ?99                  ?121                	;0
180 122  NOP/0                     ?0        ?0                   ?0                  	;1
181 122  GOTO/253                  ?0        ?98                  ?122                	;0
182 124  FETCH_DIM_R/81            $63=      16?0                 123:'server_type'   	;0
183 124  IS_NOT_EQUAL/18           #64=      $63                  124:1               	;0
184 124  BOOL_NOT/13               #65=      #64                  ?0                  	;0
185 124  JMPZ/43                   ?0        #65                  ?188                	;0	>>188
186 125  NOP/0                     ?0        ?0                   ?0                  	;1
187 125  GOTO/253                  ?0        ?190                 ?125                	;0
188 127  NOP/0                     ?0        ?0                   ?0                  	;1	<<185
189 127  GOTO/253                  ?0        ?119                 ?126                	;0
190 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'json_decode'   	;2
191 129  FETCH_DIM_FUNC_ARG/93     $66=      16?0                 129:'watchdog_data' 	;1
192 129  SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
193 129  SEND_VAL_EX/116           ?96       130:true             ?2                  	;0
194 129  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
195 129  ASSIGN/38                 ?59       16?1                 $67                 	;0
196 130  INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'is_array'      	;1
197 130  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
198 130  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
199 130  JMPZ/43                   ?0        $69                  ?202                	;0	>>202
200 131  NOP/0                     ?0        ?0                   ?0                  	;1
201 131  GOTO/253                  ?0        ?21                  ?133                	;0
202 133  NOP/0                     ?0        ?0                   ?0                  	;1	<<199
203 133  GOTO/253                  ?0        ?20                  ?134                	;0
204 135  ASSIGN/38                 ?61       16?2                 135:'#f8cc6b'       	;0
205 137  NOP/0                     ?0        ?0                   ?0                  	;1
206 137  GOTO/253                  ?0        ?250                 ?136                	;0
207 139  ASSIGN/38                 ?62       16?2                 137:'#23b397'       	;0
208 140  NOP/0                     ?0        ?0                   ?0                  	;1
209 140  GOTO/253                  ?0        ?250                 ?138                	;0
210 142  ECHO/40                   ?0        139:'                                    </td>
									<td class="text-center"><a onClick="whois(\'' ?0                  	;0
211 143  FETCH_DIM_R/81            $72=      16?0                 140:'server_ip'     	;0
212 143  ECHO/40                   ?0        $72                  ?0                  	;0
213 144  ECHO/40                   ?0        141:'\');" href="javascript: void(0);">' ?0                  	;0
214 145  FETCH_DIM_R/81            $73=      16?0                 142:'server_ip'     	;0
215 145  ECHO/40                   ?0        $73                  ?0                  	;0
216 146  ECHO/40                   ?0        143:'</a></td>
									<td class="text-center">
									' ?0                  	;0
217 147  NOP/0                     ?0        ?0                   ?0                  	;1
218 147  GOTO/253                  ?0        ?219                 ?144                	;0
219 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'D8Bb46CE92cE0066'	;2
220 149  FETCH_DIM_FUNC_ARG/93     $74=      16?0                 147:'id'            	;1
221 149  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
222 149  SEND_VAL_EX/116           ?96       148:true             ?2                  	;0
223 149  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
224 149  ASSIGN/38                 ?67       16?5                 $75                 	;0
225 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'E589A4bF54a2dAd1'	;2
226 150  SEND_VAL_EX/116           ?80       151:'adv'            ?1                  	;0
227 150  SEND_VAL_EX/116           ?96       152:'live_connections' ?2                  	;0
228 150  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
229 150  JMPZ/43                   ?0        $77                  ?232                	;0	>>232
230 151  NOP/0                     ?0        ?0                   ?0                  	;1
231 151  GOTO/253                  ?0        ?241                 ?153                	;0
232 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'number_format' 	;2	<<229
233 153  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
234 153  SEND_VAL_EX/116           ?96       156:0                ?2                  	;0
235 153  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
236 153  CONCAT/8                  #79=      157:'<button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>' $78                 	;0
237 153  CONCAT/8                  #80=      #79                  158:'</button>'     	;0
238 153  ASSIGN/38                 ?72       16?5                 #80                 	;0
239 154  NOP/0                     ?0        ?0                   ?0                  	;1
240 154  GOTO/253                  ?0        ?301                 ?159                	;0
241 156  NOP/0                     ?0        ?0                   ?0                  	;1
242 156  GOTO/253                  ?0        ?291                 ?160                	;0
243 158  ECHO/40                   ?0        161:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
244 159  FETCH_DIM_R/81            $82=      16?0                 162:'id'            	;0
245 159  ECHO/40                   ?0        $82                  ?0                  	;0
246 160  ECHO/40                   ?0        163:', \'disable\');">Disable Proxy</a>
												' ?0                  	;0
247 162  ECHO/40                   ?0        164:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
248 163  NOP/0                     ?0        ?0                   ?0                  	;1
249 163  GOTO/253                  ?0        ?147                 ?165                	;0
250 166  ECHO/40                   ?0        166:'                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="' ?0                  	;0
251 167  FETCH_DIM_R/81            $83=      16?6                 167:'theme'         	;0
252 167  IS_EQUAL/17               #84=      $83                  168:1               	;0
253 167  JMPZ/43                   ?0        #84                  ?256                	;0	>>256
254 168  NOP/0                     ?0        ?0                   ?0                  	;1
255 168  GOTO/253                  ?0        ?402                 ?169                	;0
256 170  ECHO/40                   ?0        170:'#ebeff2'        ?0                  	;0	<<253
257 171  NOP/0                     ?0        ?0                   ?0                  	;1
258 171  GOTO/253                  ?0        ?403                 ?171                	;0
259 172  NOP/0                     ?0        ?0                   ?0                  	;1
260 172  GOTO/253                  ?0        ?402                 ?172                	;0
261 174  ECHO/40                   ?0        173:'" data-readOnly=true value="' ?0                  	;0
262 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'intval'        	;1
263 175  FETCH_DIM_FUNC_ARG/93     $85=      16?1                 176:'total_mem_used_percent'	;1
264 175  SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
265 175  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
266 175  ECHO/40                   ?0        $86                  ?0                  	;0
267 176  ECHO/40                   ?0        177:'"/>
                                    </td>
									<td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>' ?0                  	;0
268 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'number_format' 	;2
269 177  FETCH_DIM_R/81            $87=      16?0                 180:'server_online' 	;0
270 177  JMPZ/43                   ?0        $87                  ?274                	;0	>>274
271 177  FETCH_DIM_R/81            $88=      16?0                 181:'ping'          	;0
272 177  QM_ASSIGN/22              #89=      $88                  ?0                  	;0
273 177  JMP/42                    ?0        ?275                 ?0                  	;0	>>275
274 177  QM_ASSIGN/22              #89=      182:0                ?0                  	;0	<<270
275 177  SEND_VAL_EX/116           ?80       #89                  ?1                  	;0	<<273
276 177  SEND_VAL_EX/116           ?96       183:0                ?2                  	;0
277 177  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
278 177  ECHO/40                   ?0        $90                  ?0                  	;0
279 178  ECHO/40                   ?0        184:' ms</button></td>
									<td class="text-center">
										' ?0                  	;0
280 179  NOP/0                     ?0        ?0                   ?0                  	;1
281 179  GOTO/253                  ?0        ?311                 ?185                	;0
282 182  ASSIGN/38                 ?82       16?2                 186:'#23b397'       	;0
283 184  ECHO/40                   ?0        187:'                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="' ?0                  	;0
284 185  FETCH_DIM_R/81            $92=      16?6                 188:'theme'         	;0
285 185  IS_EQUAL/17               #93=      $92                  189:1               	;0
286 185  JMPZ/43                   ?0        #93                  ?289                	;0	>>289
287 186  NOP/0                     ?0        ?0                   ?0                  	;1
288 186  GOTO/253                  ?0        ?392                 ?190                	;0
289 188  NOP/0                     ?0        ?0                   ?0                  	;1	<<286
290 188  GOTO/253                  ?0        ?389                 ?191                	;0
291 190  FETCH_DIM_R/81            $94=      16?0                 192:'id'            	;0
292 190  CONCAT/8                  #95=      193:'<a href="./live_connections?server=' $94                 	;0
293 190  CONCAT/8                  #96=      #95                  194:'"><button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>'	;0
294 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'number_format' 	;2
295 190  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
296 190  SEND_VAL_EX/116           ?96       197:0                ?2                  	;0
297 190  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
298 190  CONCAT/8                  #98=      #96                  $97                 	;0
299 190  CONCAT/8                  #99=      #98                  198:'</button></a>' 	;0
300 190  ASSIGN/38                 ?91       16?5                 #99                 	;0
301 192  ECHO/40                   ?0        16?5                 ?0                  	;0
302 193  ECHO/40                   ?0        199:'									<br/><small>of ' ?0                  	;0
303 194  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'number_format' 	;2
304 194  FETCH_DIM_FUNC_ARG/93     $101=     16?0                 202:'total_clients' 	;1
305 194  SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
306 194  SEND_VAL_EX/116           ?96       203:0                ?2                  	;0
307 194  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
308 194  ECHO/40                   ?0        $102                 ?0                  	;0
309 195  NOP/0                     ?0        ?0                   ?0                  	;1
310 195  GOTO/253                  ?0        ?121                 ?204                	;0
311 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'E589A4Bf54a2dAD1'	;2
312 197  SEND_VAL_EX/116           ?80       207:'adv'            ?1                  	;0
313 197  SEND_VAL_EX/116           ?96       208:'edit_server'    ?2                  	;0
314 197  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
315 197  JMPZ/43                   ?0        $103                 ?318                	;0	>>318
316 198  NOP/0                     ?0        ?0                   ?0                  	;1
317 198  GOTO/253                  ?0        ?321                 ?209                	;0
318 200  ECHO/40                   ?0        210:'--'             ?0                  	;0	<<315
319 201  NOP/0                     ?0        ?0                   ?0                  	;1
320 201  GOTO/253                  ?0        ?150                 ?211                	;0
321 203  FETCH_STATIC_PROP_R/173   $104=     212:'rSettings'      213:'XUI'           	;0
322 203  FETCH_DIM_R/81            $105=     $104                 215:'group_buttons' 	;0
323 203  JMPZ/43                   ?0        $105                 ?326                	;0	>>326
324 204  NOP/0                     ?0        ?0                   ?0                  	;1
325 204  GOTO/253                  ?0        ?349                 ?216                	;0
326 206  NOP/0                     ?0        ?0                   ?0                  	;1	<<323
327 206  GOTO/253                  ?0        ?11                  ?217                	;0
328 208  ECHO/40                   ?0        218:'">'             ?0                  	;0
329 209  FETCH_DIM_R/81            $106=     16?0                 219:'parent_id'     	;0
330 209  FETCH_DIM_R/81            $107=     $106                 220:0               	;0
331 209  FETCH_DIM_R/81            $108=     16?7                 $107                	;0
332 209  FETCH_DIM_R/81            $109=     $108                 221:'server_name'   	;0
333 209  ECHO/40                   ?0        $109                 ?0                  	;0
334 210  ECHO/40                   ?0        222:'</a>'           ?0                  	;0
335 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'count'         	;1
336 211  FETCH_DIM_FUNC_ARG/93     $110=     16?0                 225:'parent_id'     	;1
337 211  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
338 211  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
339 211  IS_SMALLER/19             #112=     226:1                $111                	;0
340 211  BOOL_NOT/13               #113=     #112                 ?0                  	;0
341 211  JMPZ/43                   ?0        #113                 ?344                	;0	>>344
342 212  NOP/0                     ?0        ?0                   ?0                  	;1
343 212  GOTO/253                  ?0        ?117                 ?227                	;0
344 214  ECHO/40                   ?0        228:'&nbsp; <button title="View All Servers" onClick="viewServers(' ?0                  	;0	<<341
345 215  NOP/0                     ?0        ?0                   ?0                  	;1
346 215  GOTO/253                  ?0        ?104                 ?229                	;0
347 217  NOP/0                     ?0        ?0                   ?0                  	;1
348 217  GOTO/253                  ?0        ?150                 ?230                	;0
349 219  ECHO/40                   ?0        231:'										<div class="btn-group dropdown">
											<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item btn-reboot-server" href="javascript:void(0);" data-id="' ?0                  	;0
350 220  FETCH_DIM_R/81            $114=     16?0                 232:'id'            	;0
351 220  ECHO/40                   ?0        $114                 ?0                  	;0
352 221  ECHO/40                   ?0        233:'">Proxy Tools</a>
												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
353 222  NOP/0                     ?0        ?0                   ?0                  	;1
354 222  GOTO/253                  ?0        ?467                 ?234                	;0
355 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'number_format' 	;2
356 224  FETCH_DIM_FUNC_ARG/93     $115=     16?0                 237:'network_guaranteed_speed'	;1
357 224  SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
358 224  SEND_VAL_EX/116           ?96       238:0                ?2                  	;0
359 224  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
360 224  ECHO/40                   ?0        $116                 ?0                  	;0
361 225  ECHO/40                   ?0        239:' Mbps</small>
                                    </td>
									<td class="text-center">
                                        ' ?0                  	;0
362 226  INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'intval'        	;1
363 226  FETCH_DIM_FUNC_ARG/93     $117=     16?1                 242:'cpu'           	;1
364 226  SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
365 226  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
366 226  IS_SMALLER_OR_EQUAL/20    #119=     $118                 243:34              	;0
367 226  JMPZ/43                   ?0        #119                 ?370                	;0	>>370
368 227  NOP/0                     ?0        ?0                   ?0                  	;1
369 227  GOTO/253                  ?0        ?282                 ?244                	;0
370 229  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'intval'        	;1	<<367
371 229  FETCH_DIM_FUNC_ARG/93     $120=     16?1                 247:'cpu'           	;1
372 229  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
373 229  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
374 229  IS_SMALLER_OR_EQUAL/20    #122=     $121                 248:67              	;0
375 229  JMPZ/43                   ?0        #122                 ?378                	;0	>>378
376 230  NOP/0                     ?0        ?0                   ?0                  	;1
377 230  GOTO/253                  ?0        ?397                 ?249                	;0
378 232  ASSIGN/38                 ?114      16?2                 250:'#f0643b'       	;0	<<375
379 233  NOP/0                     ?0        ?0                   ?0                  	;1
380 233  GOTO/253                  ?0        ?395                 ?251                	;0
381 235  ECHO/40                   ?0        252:', \'enable\');"><i class="mdi mdi-access-point-network"></i></button>
                                            ' ?0                  	;0
382 236  NOP/0                     ?0        ?0                   ?0                  	;1
383 236  GOTO/253                  ?0        ?141                 ?253                	;0
384 238  ECHO/40                   ?0        254:'                                            <button type="button" title="Disable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0
385 239  FETCH_DIM_R/81            $124=     16?0                 255:'id'            	;0
386 239  ECHO/40                   ?0        $124                 ?0                  	;0
387 240  NOP/0                     ?0        ?0                   ?0                  	;1
388 240  GOTO/253                  ?0        ?140                 ?256                	;0
389 242  ECHO/40                   ?0        257:'#ebeff2'        ?0                  	;0
390 243  NOP/0                     ?0        ?0                   ?0                  	;1
391 243  GOTO/253                  ?0        ?393                 ?258                	;0
392 245  ECHO/40                   ?0        259:'#7e8e9d'        ?0                  	;0
393 247  NOP/0                     ?0        ?0                   ?0                  	;1
394 247  GOTO/253                  ?0        ?42                  ?260                	;0
395 249  NOP/0                     ?0        ?0                   ?0                  	;1
396 249  GOTO/253                  ?0        ?398                 ?261                	;0
397 251  ASSIGN/38                 ?116      16?2                 262:'#f8cc6b'       	;0
398 253  NOP/0                     ?0        ?0                   ?0                  	;1
399 253  GOTO/253                  ?0        ?283                 ?263                	;0
400 254  NOP/0                     ?0        ?0                   ?0                  	;1
401 254  GOTO/253                  ?0        ?282                 ?264                	;0
402 257  ECHO/40                   ?0        265:'#7e8e9d'        ?0                  	;0
403 259  ECHO/40                   ?0        266:'" data-fgColor="' ?0                  	;0
404 260  ECHO/40                   ?0        16?2                 ?0                  	;0
405 261  NOP/0                     ?0        ?0                   ?0                  	;1
406 261  GOTO/253                  ?0        ?261                 ?267                	;0
407 263  FETCH_DIM_R/81            $126=     16?0                 268:'status'        	;0
408 263  IS_EQUAL/17               #127=     $126                 269:4               	;0
409 263  JMPZ/43                   ?0        #127                 ?412                	;0	>>412
410 264  NOP/0                     ?0        ?0                   ?0                  	;1
411 264  GOTO/253                  ?0        ?172                 ?270                	;0
412 266  FETCH_DIM_R/81            $128=     16?0                 271:'status'        	;0	<<409
413 266  IS_EQUAL/17               #129=     $128                 272:5               	;0
414 266  JMPZ/43                   ?0        #129                 ?417                	;0	>>417
415 267  NOP/0                     ?0        ?0                   ?0                  	;1
416 267  GOTO/253                  ?0        ?422                 ?273                	;0
417 269  CONCAT/8                  #130=     274:'<i class="text-danger fas fa-square tooltip" title="Last Ping: ' 16?3                	;0	<<414
418 269  CONCAT/8                  #131=     #130                 275:'"></i>'        	;0
419 269  ECHO/40                   ?0        #131                 ?0                  	;0
420 270  NOP/0                     ?0        ?0                   ?0                  	;1
421 270  GOTO/253                  ?0        ?170                 ?276                	;0
422 272  NOP/0                     ?0        ?0                   ?0                  	;1
423 272  GOTO/253                  ?0        ?169                 ?277                	;0
424 274  ECHO/40                   ?0        278:'												<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
425 275  FETCH_DIM_R/81            $132=     16?0                 279:'id'            	;0
426 275  ECHO/40                   ?0        $132                 ?0                  	;0
427 276  ECHO/40                   ?0        280:', \'enable\');">Enable Proxy</a>
												' ?0                  	;0
428 277  NOP/0                     ?0        ?0                   ?0                  	;1
429 277  GOTO/253                  ?0        ?247                 ?281                	;0
430 279  NOP/0                     ?0        ?0                   ?0                  	;1
431 279  GOTO/253                  ?0        ?243                 ?282                	;0
432 282  NOP/0                     ?0        ?0                   ?0                  	;1
433 282  GOTO/253                  ?0        ?435                 ?283                	;0
434 284  ECHO/40                   ?0        284:'<i class="text-info fas fa-square tooltip" title="Installing..."></i>' ?0                  	;0
435 286  NOP/0                     ?0        ?0                   ?0                  	;1
436 286  GOTO/253                  ?0        ?175                 ?285                	;0
437 288  FETCH_DIM_R/81            $133=     16?0                 286:'id'            	;0
438 288  ECHO/40                   ?0        $133                 ?0                  	;0
439 289  ECHO/40                   ?0        287:'"><button type="button" title="Edit Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>
                                            ' ?0                  	;0
440 290  FETCH_DIM_R/81            $134=     16?0                 288:'enabled'       	;0
441 290  JMPZ/43                   ?0        $134                 ?444                	;0	>>444
442 291  NOP/0                     ?0        ?0                   ?0                  	;1
443 291  GOTO/253                  ?0        ?384                 ?289                	;0
444 293  ECHO/40                   ?0        290:'                                            <button type="button" title="Enable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' ?0                  	;0	<<441
445 294  FETCH_DIM_R/81            $135=     16?0                 291:'id'            	;0
446 294  ECHO/40                   ?0        $135                 ?0                  	;0
447 295  NOP/0                     ?0        ?0                   ?0                  	;1
448 295  GOTO/253                  ?0        ?381                 ?292                	;0
449 297  ECHO/40                   ?0        293:'</td>
                                    <td class="text-center">
                                        ' ?0                  	;0
450 298  FETCH_DIM_R/81            $136=     16?0                 294:'enabled'       	;0
451 298  BOOL_NOT/13               #137=     $136                 ?0                  	;0
452 298  JMPZ/43                   ?0        #137                 ?455                	;0	>>455
453 299  NOP/0                     ?0        ?0                   ?0                  	;1
454 299  GOTO/253                  ?0        ?98                  ?295                	;0
455 301  FETCH_DIM_R/81            $138=     16?0                 296:'server_online' 	;0	<<452
456 301  JMPZ/43                   ?0        $138                 ?459                	;0	>>459
457 302  NOP/0                     ?0        ?0                   ?0                  	;1
458 302  GOTO/253                  ?0        ?177                 ?297                	;0
459 304  FETCH_DIM_R/81            $139=     16?0                 298:'last_check_ago'	;0	<<456
460 304  IS_SMALLER/19             #140=     299:0                $139                	;0
461 304  JMPZ/43                   ?0        #140                 ?464                	;0	>>464
462 305  NOP/0                     ?0        ?0                   ?0                  	;1
463 305  GOTO/253                  ?0        ?155                 ?300                	;0
464 307  ASSIGN/38                 ?132      16?3                 301:'Never'         	;0	<<461
465 308  NOP/0                     ?0        ?0                   ?0                  	;1
466 308  GOTO/253                  ?0        ?153                 ?302                	;0
467 310  FETCH_DIM_R/81            $142=     16?0                 303:'id'            	;0
468 310  ECHO/40                   ?0        $142                 ?0                  	;0
469 311  ECHO/40                   ?0        304:', \'kill\');">Kill Connections</a>
												<a class="dropdown-item" href="./proxy?id=' ?0                  	;0
470 312  FETCH_DIM_R/81            $143=     16?0                 305:'id'            	;0
471 312  ECHO/40                   ?0        $143                 ?0                  	;0
472 313  ECHO/40                   ?0        306:'">Edit Proxy</a>
												' ?0                  	;0
473 314  FETCH_DIM_R/81            $144=     16?0                 307:'enabled'       	;0
474 314  JMPZ/43                   ?0        $144                 ?477                	;0	>>477
475 315  NOP/0                     ?0        ?0                   ?0                  	;1
476 315  GOTO/253                  ?0        ?430                 ?308                	;0
477 317  NOP/0                     ?0        ?0                   ?0                  	;1	<<474
478 317  GOTO/253                  ?0        ?424                 ?309                	;0
479 318  JMP/42                    ?0        ?8                   ?0                  	;0	>>8
480 318  FE_FREE/127               ?0        $11                  ?0                  	;0	<<7
481 321  ECHO/40                   ?0        310:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
482 322  GOTO/253                  ?0        ?515                 ?311                	;0
483 324  INIT_STATIC_METHOD_CALL/113 ?0        315:'XUI'            317:'f76008F8dFE1898C'	;1
484 324  SEND_VAL_EX/116           ?80       319:true             ?1                  	;0
485 324  DO_FCALL/60               $146=     ?0                   ?0                  	;0
486 324  FETCH_STATIC_PROP_W/174   $145=     312:'rServers'       313:'XUI'           	;0
487 324  ASSIGN/38                 ?138      $145                 $146                	;0
488 325  ASSIGN/38                 ?139      16?8                 320:'Proxy Servers' 	;0
489 326  INCLUDE_OR_EVAL/73        ?140      321:'header.php'     ?0                  	;2
490 327  ECHO/40                   ?0        322:'<div class="wrapper"' ?0                  	;0
491 328  FETCH_IS/89               $150=     323:'_SERVER'        ?0                  	;0
492 328  ISSET_ISEMPTY_DIM_OBJ/115 #151=     $150                 324:'HTTP_X_REQUESTED_WITH'	;16777216
493 328  BOOL_NOT/13               #152=     #151                 ?0                  	;0
494 328  JMPZ_EX/46                #152=     #152                 ?502                	;0	>>502
495 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'strtolower'    	;1
496 328  FETCH_FUNC_ARG/92         $153=     327:'_SERVER'        ?0                  	;1
497 328  FETCH_DIM_FUNC_ARG/93     $154=     $153                 328:'HTTP_X_REQUESTED_WITH'	;1
498 328  SEND_VAR_EX/66            ?80       $154                 ?1                  	;0
499 328  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
500 328  IS_EQUAL/17               #156=     $155                 329:'xmlhttprequest'	;0
501 328  BOOL/52                   #152=     #156                 ?0                  	;0
502 328  BOOL_NOT/13               #157=     #152                 ?0                  	;0	<<494
503 328  JMPZ/43                   ?0        #157                 ?505                	;0	>>505
504 329  GOTO/253                  ?0        ?2                   ?330                	;0
505 331  GOTO/253                  ?0        ?1                   ?331                	;0	<<503
506 333  INCLUDE_OR_EVAL/73        ?149      332:'session.php'    ?0                  	;2	<<0
507 334  INCLUDE_OR_EVAL/73        ?150      333:'functions.php'  ?0                  	;2
508 335  INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'E6d500e19634d513'	;0
509 335  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
510 335  JMPZ/43                   ?0        $160                 ?512                	;0	>>512
511 336  GOTO/253                  ?0        ?514                 ?336                	;0
512 338  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'E72F42A93714BA87'	;0	<<510
513 338  DO_FCALL_BY_NAME/131      ?152      ?0                   ?0                  	;0
514 340  GOTO/253                  ?0        ?483                 ?339                	;0
515 342  INCLUDE_OR_EVAL/73        ?153      340:'footer.php'     ?0                  	;2
516 343  NOP/0                     ?0        341:1                ?0                  	;4294967295
*/

?>