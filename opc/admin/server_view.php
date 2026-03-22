<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?91                  ?0                  	;0	>>91
1   5    EXIT/79                   ?0        ?0                   ?0                  	;0
2   6    GOTO/253                  ?0        ?7                   ?1                  	;0
3   8    FETCH_STATIC_PROP_R/173   $17=      2:'rRequest'         3:'XUI'             	;0
4   8    FETCH_DIM_R/81            $18=      $17                  5:'id'              	;0
5   8    FETCH_DIM_R/81            $19=      16?1                 $18                 	;0
6   8    ASSIGN/38                 ?3        16?0                 $19                 	;0
7   10   GOTO/253                  ?0        ?418                 ?6                  	;0
8   12   GOTO/253                  ?0        ?10                  ?7                  	;0
9   14   ECHO/40                   ?0        8:'                        <div class="text-center" style="padding-top: 15px;">
                            <i class="mdi mdi-creation avatar-title font-24 text-info"></i><br/>
                            <h4 class="header-title text-info">Installing...</h4>
                            <textarea readonly style="padding: 15px; margin-top: 20px; background: #56c2d6; color: #fff; border: 0; width: 100%; height: 150px; scroll-y: auto;" id="server_install"></textarea>
                        </div>
                        ' ?0                  	;0
10  16   ECHO/40                   ?0        9:'					</div>
				</div>
				' ?0                  	;0
11  17   GOTO/253                  ?0        ?531                 ?10                 	;0
12  19   FETCH_DIM_R/81            $21=      16?2                 11:'dark_mode'      	;0
13  19   JMPZ/43                   ?0        $21                  ?15                 	;0	>>15
14  20   GOTO/253                  ?0        ?17                  ?12                 	;0
15  22   ECHO/40                   ?0        13:'text-pink'       ?0                  	;0	<<13
16  23   GOTO/253                  ?0        ?430                 ?14                 	;0
17  25   ECHO/40                   ?0        15:'text-white'      ?0                  	;0
18  26   GOTO/253                  ?0        ?430                 ?16                 	;0
19  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'number_format'  	;2
20  28   FETCH_DIM_FUNC_ARG/93     $22=      16?0                 19:'network_guaranteed_speed'	;1
21  28   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
22  28   SEND_VAL_EX/116           ?96       20:0                 ?2                  	;0
23  28   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
24  28   ECHO/40                   ?0        $23                  ?0                  	;0
25  29   ECHO/40                   ?0        21:' Mbps</small></h5>
						<div class="progress-w-percent" id="watchdog_input">
							<span class="progress-value font-weight-bold">0 Mbps</span>
							<div class="progress progress-sm">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h5 class="mb-1 mt-0">Network Output<small class="text-muted ml-2">of ' ?0                  	;0
26  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'number_format'  	;2
27  30   FETCH_DIM_FUNC_ARG/93     $24=      16?0                 24:'network_guaranteed_speed'	;1
28  30   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
29  30   SEND_VAL_EX/116           ?96       25:0                 ?2                  	;0
30  30   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
31  30   ECHO/40                   ?0        $25                  ?0                  	;0
32  31   ECHO/40                   ?0        26:' Mbps</small></h5>
						<div class="progress-w-percent" id="watchdog_output">
							<span class="progress-value font-weight-bold">0 Mbps</span>
							<div class="progress progress-sm">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
                        ' ?0                  	;0
33  33   GOTO/253                  ?0        ?8                   ?27                 	;0
34  36   ECHO/40                   ?0        28:'"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="text-right">
											<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="open_connections">0</span></h3>
											<p class="text-white mb-1 text-truncate">Connections</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						' ?0                  	;0
35  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'E589A4BF54A2Dad1'	;2
36  37   SEND_VAL_EX/116           ?80       31:'adv'             ?1                  	;0
37  37   SEND_VAL_EX/116           ?96       32:'live_connections' ?2                  	;0
38  37   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
39  37   BOOL_NOT/13               #27=      $26                  ?0                  	;0
40  37   JMPZ/43                   ?0        #27                  ?42                 	;0	>>42
41  38   GOTO/253                  ?0        ?43                  ?33                 	;0
42  40   ECHO/40                   ?0        34:'</a>'            ?0                  	;0	<<40
43  42   GOTO/253                  ?0        ?440                 ?35                 	;0
44  44   FETCH_DIM_R/81            $28=      16?3                 36:'cpu_cores'      	;0
45  44   ECHO/40                   ?0        $28                  ?0                  	;0
46  45   ECHO/40                   ?0        37:' Cores</small></h5>
						<div class="progress-w-percent" id="watchdog_cpu">
							<span class="progress-value font-weight-bold">0%</span>
							<div class="progress progress-sm">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h5 class="mb-1 mt-0">Memory Usage<small class="text-muted ml-2">of ' ?0                  	;0
47  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'round'          	;2
48  46   FETCH_DIM_R/81            $29=      16?3                 40:'total_mem'      	;0
49  46   DIV/4                     #30=      $29                  41:1024.0           	;0
50  46   DIV/4                     #31=      #30                  42:1024.0           	;0
51  46   SEND_VAL_EX/116           ?80       #31                  ?1                  	;0
52  46   SEND_VAL_EX/116           ?96       43:0                 ?2                  	;0
53  46   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
54  46   ECHO/40                   ?0        $32                  ?0                  	;0
55  47   ECHO/40                   ?0        44:' GB</small></h5>
						<div class="progress-w-percent" id="watchdog_mem">
							<span class="progress-value font-weight-bold">0%</span>
							<div class="progress progress-sm">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
                        ' ?0                  	;0
56  48   FETCH_DIM_R/81            $33=      16?0                 45:'server_type'    	;0
57  48   IS_EQUAL/17               #34=      $33                  46:0                	;0
58  48   BOOL_NOT/13               #35=      #34                  ?0                  	;0
59  48   JMPZ/43                   ?0        #35                  ?61                 	;0	>>61
60  49   GOTO/253                  ?0        ?240                 ?47                 	;0
61  51   GOTO/253                  ?0        ?212                 ?48                 	;0	<<59
62  53   ASSIGN/38                 ?19       16?4                 49:false            	;0
63  54   FETCH_DIM_R/81            $37=      16?5                 50:'expiration'     	;0
64  54   JMPZ/43                   ?0        $37                  ?66                 	;0	>>66
65  55   GOTO/253                  ?0        ?825                 ?51                 	;0
66  57   ASSIGN/38                 ?21       16?6                 52:false            	;0	<<64
67  58   ASSIGN/38                 ?22       16?7                 53:'No Certificate Installed'	;0
68  59   GOTO/253                  ?0        ?77                  ?54                 	;0
69  60   GOTO/253                  ?0        ?825                 ?55                 	;0
70  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'date'           	;2
71  62   FETCH_DIM_FUNC_ARG/93     $40=      16?2                 58:'datetime_format'	;1
72  62   SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
73  62   FETCH_DIM_FUNC_ARG/93     $41=      16?5                 59:'expiration'     	;2
74  62   SEND_VAR_EX/66            ?96       $41                  ?2                  	;0
75  62   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
76  62   ASSIGN/38                 ?26       16?7                 $42                 	;0
77  64   FETCH_DIM_R/81            $44=      16?0                 60:'server_type'    	;0
78  64   IS_EQUAL/17               #45=      $44                  61:0                	;0
79  64   JMPZ/43                   ?0        #45                  ?81                 	;0	>>81
80  65   GOTO/253                  ?0        ?409                 ?62                 	;0
81  67   ASSIGN/38                 ?29       16?8                 63:'View Proxy'     	;0	<<79
82  68   GOTO/253                  ?0        ?410                 ?64                 	;0
83  69   GOTO/253                  ?0        ?409                 ?65                 	;0
84  72   ECHO/40                   ?0        66:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Certbot will run in the background and attempt to generate certificates for your server automatically, check back here shortly for a progress update. Once a certificate is installed, you can turn SSL on for this server.
				</div>
                ' ?0                  	;0
85  74   ECHO/40                   ?0        67:'				<div class="row text-center">
                    ' ?0                  	;0
86  75   FETCH_DIM_R/81            $47=      16?0                 68:'server_type'    	;0
87  75   IS_EQUAL/17               #48=      $47                  69:0                	;0
88  75   JMPZ/43                   ?0        #48                  ?90                 	;0	>>90
89  76   GOTO/253                  ?0        ?244                 ?70                 	;0
90  78   GOTO/253                  ?0        ?242                 ?71                 	;0	<<88
91  80   INCLUDE_OR_EVAL/73        ?32       72:'session.php'     ?0                  	;2	<<0
92  81   INCLUDE_OR_EVAL/73        ?33       73:'functions.php'   ?0                  	;2
93  82   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'E6d500e19634d513'	;0
94  82   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
95  82   JMPZ/43                   ?0        $51                  ?97                 	;0	>>97
96  83   GOTO/253                  ?0        ?99                  ?76                 	;0
97  85   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'E72f42A93714ba87'	;0	<<95
98  85   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
99  87   GOTO/253                  ?0        ?189                 ?79                 	;0
100 89   FETCH_IS/89               $53=      80:'_SERVER'         ?0                  	;0
101 89   ISSET_ISEMPTY_DIM_OBJ/115 #54=      $53                  81:'HTTP_X_REQUESTED_WITH'	;16777216
102 89   BOOL_NOT/13               #55=      #54                  ?0                  	;0
103 89   JMPZ_EX/46                #55=      #55                  ?111                	;0	>>111
104 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'strtolower'     	;1
105 89   FETCH_FUNC_ARG/92         $56=      84:'_SERVER'         ?0                  	;1
106 89   FETCH_DIM_FUNC_ARG/93     $57=      $56                  85:'HTTP_X_REQUESTED_WITH'	;1
107 89   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
108 89   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
109 89   IS_EQUAL/17               #59=      $58                  86:'xmlhttprequest' 	;0
110 89   BOOL/52                   #55=      #59                  ?0                  	;0
111 89   BOOL_NOT/13               #60=      #55                  ?0                  	;0	<<103
112 89   JMPZ/43                   ?0        #60                  ?114                	;0	>>114
113 90   GOTO/253                  ?0        ?115                 ?87                 	;0
114 92   ECHO/40                   ?0        88:' style="display: none;"' ?0                  	;0	<<112
115 94   ECHO/40                   ?0        89:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
116 95   INCLUDE_OR_EVAL/73        ?44       90:'topbar.php'      ?0                  	;2
117 96   GOTO/253                  ?0        ?118                 ?91                 	;0
118 98   ECHO/40                   ?0        92:'					</div>
					<h4 class="page-title">
						' ?0                  	;0
119 99   FETCH_DIM_R/81            $62=      16?0                 93:'server_name'    	;0
120 99   ECHO/40                   ?0        $62                  ?0                  	;0
121 100  ECHO/40                   ?0        94:'						<small style="margin-left: 5px;">' ?0                  	;0
122 101  FETCH_DIM_R/81            $63=      16?0                 95:'server_ip'      	;0
123 101  ECHO/40                   ?0        $63                  ?0                  	;0
124 102  ECHO/40                   ?0        96:'</small>
					</h4>
				</div>
			</div>
		</div> 
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
125 103  GOTO/253                  ?0        ?478                 ?97                 	;0
126 106  ECHO/40                   ?0        98:'text-white'      ?0                  	;0
127 108  ECHO/40                   ?0        99:'"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="text-right">
											<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="online_users">0</span></h3>
											<p class="text-white mb-1 text-truncate">Users</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						' ?0                  	;0
128 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'E589A4BF54A2dad1'	;2
129 109  SEND_VAL_EX/116           ?80       102:'adv'            ?1                  	;0
130 109  SEND_VAL_EX/116           ?96       103:'live_connections' ?2                  	;0
131 109  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
132 109  BOOL_NOT/13               #65=      $64                  ?0                  	;0
133 109  JMPZ/43                   ?0        #65                  ?135                	;0	>>135
134 110  GOTO/253                  ?0        ?523                 ?104                	;0
135 112  GOTO/253                  ?0        ?522                 ?105                	;0	<<133
136 114  FETCH_DIM_R/81            $66=      16?2                 106:'dark_mode'     	;0
137 114  JMPZ/43                   ?0        $66                  ?139                	;0	>>139
138 115  GOTO/253                  ?0        ?141                 ?107                	;0
139 117  ECHO/40                   ?0        108:'text-purple'    ?0                  	;0	<<137
140 118  GOTO/253                  ?0        ?34                  ?109                	;0
141 120  ECHO/40                   ?0        110:'text-white'     ?0                  	;0
142 121  GOTO/253                  ?0        ?34                  ?111                	;0
143 124  ECHO/40                   ?0        112:'					</div>
                    ' ?0                  	;0
144 126  ECHO/40                   ?0        113:'				</div>
				<div class="card-box">
					<div class="col-md-12 align-self-center">
                        ' ?0                  	;0
145 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'in_array'      	;2
146 127  FETCH_DIM_FUNC_ARG/93     $67=      16?0                 116:'status'        	;1
147 127  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
148 127  SEND_VAL_EX/116           ?96       117:array (
  0 => 3,
  1 => 4,
) ?2                  	;0
149 127  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
150 127  JMPZ/43                   ?0        $68                  ?152                	;0	>>152
151 128  GOTO/253                  ?0        ?9                   ?118                	;0
152 130  GOTO/253                  ?0        ?460                 ?119                	;0	<<150
153 133  ECHO/40                   ?0        120:' text-white">
							<div class="card-body active-connections">
								<div class="media align-items-center">
									<div class="col-3">
										<div class="avatar-sm bg-light">
											<i class="fe-users avatar-title font-22 ' ?0                  	;0
154 134  FETCH_DIM_R/81            $69=      16?2                 121:'dark_mode'     	;0
155 134  JMPZ/43                   ?0        $69                  ?157                	;0	>>157
156 135  GOTO/253                  ?0        ?126                 ?122                	;0
157 137  ECHO/40                   ?0        123:'text-success'   ?0                  	;0	<<155
158 138  GOTO/253                  ?0        ?127                 ?124                	;0
159 139  GOTO/253                  ?0        ?126                 ?125                	;0
160 141  ECHO/40                   ?0        126:'					</div>
					<div class="col-md-3">
						' ?0                  	;0
161 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'e589a4Bf54A2dAd1'	;2
162 142  SEND_VAL_EX/116           ?80       129:'adv'            ?1                  	;0
163 142  SEND_VAL_EX/116           ?96       130:'streams'        ?2                  	;0
164 142  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
165 142  BOOL_NOT/13               #71=      $70                  ?0                  	;0
166 142  JMPZ/43                   ?0        #71                  ?168                	;0	>>168
167 143  GOTO/253                  ?0        ?516                 ?131                	;0
168 145  ECHO/40                   ?0        132:'<a href="./streams?filter=2&server=' ?0                  	;0	<<166
169 146  FETCH_DIM_R/81            $72=      16?0                 133:'id'            	;0
170 146  ECHO/40                   ?0        $72                  ?0                  	;0
171 147  ECHO/40                   ?0        134:'">'             ?0                  	;0
172 148  GOTO/253                  ?0        ?516                 ?135                	;0
173 150  ECHO/40                   ?0        136:'						<li class="nav-item">
							<a href="#streams" data-toggle="tab" aria-expanded="false" class="nav-link">
								Online Streams
							</a>
						</li>
                        ' ?0                  	;0
174 152  ECHO/40                   ?0        137:'						<li class="nav-item">
							<a href="#connections" data-toggle="tab" aria-expanded="false" class="nav-link">
								Active Connections
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="cpu">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div id="cpu_chart-col" class="pt-3 show" dir="ltr">
											<div id="cpu_chart" class="apex-charts"></div>
										</div> 
									</div> 
								</div>
							</div>
						</div>
						<div class="tab-pane" id="network">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div id="network_chart-col" class="pt-3 show" dir="ltr">
											<div id="network_chart" class="apex-charts"></div>
										</div> 
									</div> 
								</div>
							</div>
						</div>
                        ' ?0                  	;0
175 153  FETCH_DIM_R/81            $73=      16?0                 138:'server_type'   	;0
176 153  IS_EQUAL/17               #74=      $73                  139:0               	;0
177 153  BOOL_NOT/13               #75=      #74                  ?0                  	;0
178 153  JMPZ/43                   ?0        #75                  ?180                	;0	>>180
179 154  GOTO/253                  ?0        ?413                 ?140                	;0
180 156  ECHO/40                   ?0        141:'						<div class="tab-pane" id="streams">
							<div class="table">
								<table id="datatable_streams" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th>ID</th>
											<th></th>
											<th>Name</th>
											<th></th>
											<th>Clients</th>
											<th>Uptime</th>
											<th>Actions</th>
											<th></th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="10" class="text-center">Loading stream information...</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0	<<178
181 157  GOTO/253                  ?0        ?413                 ?142                	;0
182 159  ECHO/40                   ?0        143:' text-white">
							<div class="card-body active-connections">
								<div class="media align-items-center">
									<div class="col-3">
										<div class="avatar-sm bg-light">
											<i class="fe-pause avatar-title font-22 ' ?0                  	;0
183 160  FETCH_DIM_R/81            $76=      16?2                 144:'dark_mode'     	;0
184 160  JMPZ/43                   ?0        $76                  ?186                	;0	>>186
185 161  GOTO/253                  ?0        ?188                 ?145                	;0
186 163  ECHO/40                   ?0        146:'text-info'      ?0                  	;0	<<184
187 164  GOTO/253                  ?0        ?468                 ?147                	;0
188 166  GOTO/253                  ?0        ?467                 ?148                	;0
189 168  FETCH_STATIC_PROP_IS/176  $77=      149:'rRequest'       150:'XUI'           	;0
190 168  ISSET_ISEMPTY_DIM_OBJ/115 #78=      $77                  152:'id'            	;33554432
191 168  JMPZ/43                   ?0        #78                  ?193                	;0	>>193
192 169  GOTO/253                  ?0        ?194                 ?153                	;0
193 171  EXIT/79                   ?0        ?0                   ?0                  	;0	<<191
194 173  FETCH_STATIC_PROP_R/173   $79=      154:'rRequest'       155:'XUI'           	;0
195 173  FETCH_DIM_R/81            $80=      $79                  157:'id'            	;0
196 173  ISSET_ISEMPTY_DIM_OBJ/115 #81=      16?9                 $80                 	;33554432
197 173  JMPZ/43                   ?0        #81                  ?199                	;0	>>199
198 174  GOTO/253                  ?0        ?419                 ?158                	;0
199 176  FETCH_STATIC_PROP_R/173   $82=      159:'rRequest'       160:'XUI'           	;0	<<197
200 176  FETCH_DIM_R/81            $83=      $82                  162:'id'            	;0
201 176  ISSET_ISEMPTY_DIM_OBJ/115 #84=      16?1                 $83                 	;33554432
202 176  JMPZ/43                   ?0        #84                  ?204                	;0	>>204
203 177  GOTO/253                  ?0        ?3                   ?163                	;0
204 179  GOTO/253                  ?0        ?1                   ?164                	;0	<<202
205 181  FETCH_DIM_R/81            $85=      16?5                 165:'serial'        	;0
206 181  ECHO/40                   ?0        $85                  ?0                  	;0
207 182  ECHO/40                   ?0        166:'" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label" for="cert_subject">Certificate Subject</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="cert_subject" value="' ?0                  	;0
208 183  FETCH_DIM_R/81            $86=      16?5                 167:'subject'       	;0
209 183  ECHO/40                   ?0        $86                  ?0                  	;0
210 184  ECHO/40                   ?0        168:'" readonly>
                            </div>
                        </div>
                        ' ?0                  	;0
211 186  GOTO/253                  ?0        ?401                 ?169                	;0
212 188  ECHO/40                   ?0        170:'                        <h5 class="mb-1 mt-0">Disk Usage<small class="text-muted ml-2"> of ' ?0                  	;0
213 189  FETCH_DIM_R/81            $87=      16?3                 171:'total_disk_space'	;0
214 189  IS_SMALLER/19             #88=      172:1099511627776.0  $87                 	;0
215 189  JMPZ/43                   ?0        #88                  ?228                	;0	>>228
216 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'number_format' 	;2
217 189  FETCH_DIM_R/81            $89=      16?3                 175:'total_disk_space'	;0
218 189  DIV/4                     #90=      $89                  176:1024            	;0
219 189  DIV/4                     #91=      #90                  177:1024            	;0
220 189  DIV/4                     #92=      #91                  178:1024            	;0
221 189  DIV/4                     #93=      #92                  179:1024            	;0
222 189  SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
223 189  SEND_VAL_EX/116           ?96       180:0                ?2                  	;0
224 189  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
225 189  CONCAT/8                  #95=      $94                  181:' TB'           	;0
226 189  QM_ASSIGN/22              #96=      #95                  ?0                  	;0
227 189  JMP/42                    ?0        ?238                 ?0                  	;0	>>238
228 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'number_format' 	;2	<<215
229 189  FETCH_DIM_R/81            $97=      16?3                 184:'total_disk_space'	;0
230 189  DIV/4                     #98=      $97                  185:1024            	;0
231 189  DIV/4                     #99=      #98                  186:1024            	;0
232 189  DIV/4                     #100=     #99                  187:1024            	;0
233 189  SEND_VAL_EX/116           ?80       #100                 ?1                  	;0
234 189  SEND_VAL_EX/116           ?96       188:0                ?2                  	;0
235 189  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
236 189  CONCAT/8                  #102=     $101                 189:' GB'           	;0
237 189  QM_ASSIGN/22              #96=      #102                 ?0                  	;0
238 189  ECHO/40                   ?0        #96                  ?0                  	;0	<<227
239 190  ECHO/40                   ?0        190:'</small></h5>
						<div class="progress-w-percent" id="watchdog_disk">
							<span class="progress-value font-weight-bold">0%</span>
							<div class="progress progress-sm">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
                        <h5 class="mb-1 mt-0">IO Wait<small class="text-muted ml-2" id="watchdog_idle"> 0% Idle</small></h5>
						<div class="progress-w-percent" id="watchdog_io">
							<span class="progress-value font-weight-bold">0%</span>
							<div class="progress progress-sm">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
                        ' ?0                  	;0
240 192  ECHO/40                   ?0        191:'						<h5 class="mb-1 mt-0">Network Input<small class="text-muted ml-2">of ' ?0                  	;0
241 193  GOTO/253                  ?0        ?19                  ?192                	;0
242 195  ECHO/40                   ?0        193:'                    <div class="col-md-6">
                    ' ?0                  	;0
243 196  GOTO/253                  ?0        ?245                 ?194                	;0
244 198  ECHO/40                   ?0        195:'					<div class="col-md-3">
                    ' ?0                  	;0
245 200  GOTO/253                  ?0        ?246                 ?196                	;0
246 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'e589a4Bf54a2Dad1'	;2
247 202  SEND_VAL_EX/116           ?80       199:'adv'            ?1                  	;0
248 202  SEND_VAL_EX/116           ?96       200:'live_connections' ?2                  	;0
249 202  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
250 202  BOOL_NOT/13               #104=     $103                 ?0                  	;0
251 202  JMPZ/43                   ?0        #104                 ?253                	;0	>>253
252 203  GOTO/253                  ?0        ?257                 ?201                	;0
253 205  ECHO/40                   ?0        202:'<a href="./live_connections?server_id=' ?0                  	;0	<<251
254 206  FETCH_DIM_R/81            $105=     16?0                 203:'id'            	;0
255 206  ECHO/40                   ?0        $105                 ?0                  	;0
256 207  ECHO/40                   ?0        204:'">'             ?0                  	;0
257 209  GOTO/253                  ?0        ?818                 ?205                	;0
258 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'json_decode'   	;2
259 211  FETCH_DIM_FUNC_ARG/93     $107=     16?0                 209:'gpu_info'      	;1
260 211  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
261 211  SEND_VAL_EX/116           ?96       210:true             ?2                  	;0
262 211  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
263 211  ASSIGN_DIM/147            ?89       16?0                 206:'gpu_info'      	;0
264 211  OP_DATA/137               ?0        $108                 ?0                  	;0
265 212  ASSIGN/38                 ?92       16?10                211:array (
  'cpu' => 
  array (
  ),
  'memory' => 
  array (
  ),
  'io' => 
  array (
  ),
  'input' => 
  array (
  ),
  'output' => 
  array (
  ),
  'dates' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
)	;0
266 213  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'A28a55B8F823E432'	;1
267 213  FETCH_DIM_FUNC_ARG/93     $110=     16?0                 214:'id'            	;1
268 213  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
269 213  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
270 213  FE_RESET_R/77             $112=     $111                 ?393                	;0
271 213  FE_FETCH_R/78             ?0        $112                 16?11               	;393	>>393	<<392
272 214  NOP/0                     ?0        ?0                   ?0                  	;1
273 214  GOTO/253                  ?0        ?337                 ?215                	;0
274 217  FETCH_DIM_R/81            $115=     16?11                217:'time'          	;0
275 217  MUL/3                     #116=     $115                 218:1000            	;0
276 217  INIT_ARRAY/71             #117=     #116                 ?0                  	;8
277 217  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'floatval'      	;1
278 217  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'rtrim'         	;2
279 217  FETCH_DIM_FUNC_ARG/93     $118=     16?11                223:'cpu'           	;1
280 217  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
281 217  SEND_VAL_EX/116           ?96       224:'%'              ?2                  	;0
282 217  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
283 217  SEND_VAR_NO_REF_EX/50     ?80       $119                 ?1                  	;0
284 217  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
285 217  ADD_ARRAY_ELEMENT/72      #117=     $120                 ?0                  	;0
286 217  FETCH_DIM_W/84            $113=     16?10                216:'cpu'           	;0
287 217  ASSIGN_DIM/147            ?97       $113                 ?1671734312         	;0
288 217  OP_DATA/137               ?0        #117                 ?0                  	;0
289 218  FETCH_DIM_R/81            $123=     16?11                226:'time'          	;0
290 218  MUL/3                     #124=     $123                 227:1000            	;0
291 218  INIT_ARRAY/71             #125=     #124                 ?0                  	;8
292 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'floatval'      	;1
293 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'rtrim'         	;2
294 218  FETCH_DIM_FUNC_ARG/93     $126=     16?11                232:'total_mem_used_percent'	;1
295 218  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
296 218  SEND_VAL_EX/116           ?96       233:'%'              ?2                  	;0
297 218  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
298 218  SEND_VAR_NO_REF_EX/50     ?80       $127                 ?1                  	;0
299 218  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
300 218  ADD_ARRAY_ELEMENT/72      #125=     $128                 ?0                  	;0
301 218  FETCH_DIM_W/84            $121=     16?10                225:'memory'        	;0
302 218  ASSIGN_DIM/147            ?105      $121                 ?0                  	;0
303 218  OP_DATA/137               ?0        #125                 ?0                  	;0
304 219  FETCH_DIM_R/81            $131=     16?11                235:'time'          	;0
305 219  MUL/3                     #132=     $131                 236:1000            	;0
306 219  INIT_ARRAY/71             #133=     #132                 ?0                  	;8
307 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'floatval'      	;1
308 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'json_decode'   	;2
309 219  FETCH_DIM_FUNC_ARG/93     $134=     16?11                241:'iostat_info'   	;1
310 219  SEND_VAR_EX/66            ?80       $134                 ?1                  	;0
311 219  SEND_VAL_EX/116           ?96       242:true             ?2                  	;0
312 219  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
313 219  SEPARATE/156              $135=     $135                 ?0                  	;0
314 219  FETCH_DIM_FUNC_ARG/93     $136=     $135                 243:'avg-cpu'       	;1
315 219  FETCH_DIM_FUNC_ARG/93     $137=     $136                 244:'iowait'        	;1
316 219  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
317 219  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
318 219  ADD_ARRAY_ELEMENT/72      #133=     $138                 ?0                  	;0
319 219  FETCH_DIM_W/84            $129=     16?10                234:'io'            	;0
320 219  ASSIGN_DIM/147            ?113      $129                 ?0                  	;0
321 219  OP_DATA/137               ?0        #133                 ?0                  	;0
322 220  FETCH_DIM_R/81            $141=     16?11                246:'time'          	;0
323 220  MUL/3                     #142=     $141                 247:1000            	;0
324 220  INIT_ARRAY/71             #143=     #142                 ?0                  	;8
325 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'round'         	;2
326 220  FETCH_DIM_R/81            $144=     16?11                250:'bytes_received'	;0
327 220  DIV/4                     #145=     $144                 251:125000          	;0
328 220  SEND_VAL_EX/116           ?80       #145                 ?1                  	;0
329 220  SEND_VAL_EX/116           ?96       252:0                ?2                  	;0
330 220  DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
331 220  ADD_ARRAY_ELEMENT/72      #143=     $146                 ?0                  	;0
332 220  FETCH_DIM_W/84            $139=     16?10                245:'input'         	;0
333 220  ASSIGN_DIM/147            ?123      $139                 ?0                  	;0
334 220  OP_DATA/137               ?0        #143                 ?0                  	;0
335 221  NOP/0                     ?0        ?0                   ?0                  	;1
336 221  GOTO/253                  ?0        ?377                 ?253                	;0
337 223  FETCH_DIM_R/81            $147=     16?10                254:'dates'         	;0
338 223  FETCH_DIM_R/81            $148=     $147                 255:0               	;0
339 223  BOOL_NOT/13               #149=     $148                 ?0                  	;0
340 223  JMPNZ_EX/47               #149=     #149                 ?347                	;0	>>347
341 223  FETCH_DIM_R/81            $150=     16?11                256:'time'          	;0
342 223  MUL/3                     #151=     $150                 257:1000            	;0
343 223  FETCH_DIM_R/81            $152=     16?10                258:'dates'         	;0
344 223  FETCH_DIM_R/81            $153=     $152                 259:0               	;0
345 223  IS_SMALLER_OR_EQUAL/20    #154=     #151                 $153                	;0
346 223  BOOL/52                   #149=     #154                 ?0                  	;0
347 223  BOOL_NOT/13               #155=     #149                 ?0                  	;0	<<340
348 223  JMPZ/43                   ?0        #155                 ?351                	;0	>>351
349 224  NOP/0                     ?0        ?0                   ?0                  	;1
350 224  GOTO/253                  ?0        ?356                 ?260                	;0
351 226  FETCH_DIM_R/81            $158=     16?11                263:'time'          	;0	<<348
352 226  MUL/3                     #159=     $158                 264:1000            	;0
353 226  FETCH_DIM_W/84            $156=     16?10                261:'dates'         	;0
354 226  ASSIGN_DIM/147            ?140      $156                 262:0               	;0
355 226  OP_DATA/137               ?0        #159                 ?0                  	;0
356 228  FETCH_DIM_R/81            $160=     16?10                265:'dates'         	;0
357 228  FETCH_DIM_R/81            $161=     $160                 266:1               	;0
358 228  BOOL_NOT/13               #162=     $161                 ?0                  	;0
359 228  JMPNZ_EX/47               #162=     #162                 ?366                	;0	>>366
360 228  FETCH_DIM_R/81            $163=     16?11                267:'time'          	;0
361 228  MUL/3                     #164=     $163                 268:1000            	;0
362 228  FETCH_DIM_R/81            $165=     16?10                269:'dates'         	;0
363 228  FETCH_DIM_R/81            $166=     $165                 270:1               	;0
364 228  IS_SMALLER_OR_EQUAL/20    #167=     $166                 #164                	;0
365 228  BOOL/52                   #162=     #167                 ?0                  	;0
366 228  BOOL_NOT/13               #168=     #162                 ?0                  	;0	<<359
367 228  JMPZ/43                   ?0        #168                 ?370                	;0	>>370
368 229  NOP/0                     ?0        ?0                   ?0                  	;1
369 229  GOTO/253                  ?0        ?274                 ?271                	;0
370 231  FETCH_DIM_R/81            $171=     16?11                274:'time'          	;0	<<367
371 231  MUL/3                     #172=     $171                 275:1000            	;0
372 231  FETCH_DIM_W/84            $169=     16?10                272:'dates'         	;0
373 231  ASSIGN_DIM/147            ?153      $169                 273:1               	;0
374 231  OP_DATA/137               ?0        #172                 ?0                  	;0
375 232  NOP/0                     ?0        ?0                   ?0                  	;1
376 232  GOTO/253                  ?0        ?274                 ?276                	;0
377 234  FETCH_DIM_R/81            $175=     16?11                278:'time'          	;0
378 234  MUL/3                     #176=     $175                 279:1000            	;0
379 234  INIT_ARRAY/71             #177=     #176                 ?0                  	;8
380 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'round'         	;2
381 234  FETCH_DIM_R/81            $178=     16?11                282:'bytes_sent'    	;0
382 234  DIV/4                     #179=     $178                 283:125000          	;0
383 234  SEND_VAL_EX/116           ?80       #179                 ?1                  	;0
384 234  SEND_VAL_EX/116           ?96       284:0                ?2                  	;0
385 234  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
386 234  ADD_ARRAY_ELEMENT/72      #177=     $180                 ?0                  	;0
387 234  FETCH_DIM_W/84            $173=     16?10                277:'output'        	;0
388 234  ASSIGN_DIM/147            ?157      $173                 ?0                  	;0
389 234  OP_DATA/137               ?0        #177                 ?0                  	;0
390 236  NOP/0                     ?0        ?0                   ?0                  	;1
391 236  GOTO/253                  ?0        ?392                 ?285                	;0
392 237  JMP/42                    ?0        ?271                 ?0                  	;0	>>271
393 237  FE_FREE/127               ?0        $112                 ?0                  	;0	<<270
394 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'json_decode'   	;2
395 240  FETCH_DIM_FUNC_ARG/93     $181=     16?0                 288:'certbot_ssl'   	;1
396 240  SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
397 240  SEND_VAL_EX/116           ?96       289:true             ?2                  	;0
398 240  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
399 240  ASSIGN/38                 ?166      16?5                 $182                	;0
400 241  GOTO/253                  ?0        ?62                  ?290                	;0
401 243  ECHO/40                   ?0        291:'					</div>
				</div>
				' ?0                  	;0
402 246  ECHO/40                   ?0        292:'				<div class="card-box">
					<ul class="nav nav-tabs nav-bordered nav-justified">
						<li class="nav-item">
							<a href="#cpu" data-toggle="tab" aria-expanded="true" class="nav-link active">
								Resources
							</a>
						</li>
						<li class="nav-item">
							<a href="#network" data-toggle="tab" aria-expanded="false" class="nav-link">
								Network Traffic
							</a>
						</li>
                        ' ?0                  	;0
403 247  FETCH_DIM_R/81            $184=     16?0                 293:'server_type'   	;0
404 247  IS_EQUAL/17               #185=     $184                 294:0               	;0
405 247  BOOL_NOT/13               #186=     #185                 ?0                  	;0
406 247  JMPZ/43                   ?0        #186                 ?408                	;0	>>408
407 248  GOTO/253                  ?0        ?174                 ?295                	;0
408 250  GOTO/253                  ?0        ?173                 ?296                	;0	<<406
409 253  ASSIGN/38                 ?170      16?8                 297:'View Server'   	;0
410 255  INCLUDE_OR_EVAL/73        ?171      298:'header.php'     ?0                  	;2
411 256  ECHO/40                   ?0        299:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
412 257  GOTO/253                  ?0        ?100                 ?300                	;0
413 260  ECHO/40                   ?0        301:'						<div class="tab-pane" id="connections">
							<div class="table">
								<table id="datatable_connections" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th class="text-center">ID</th>
                                            <th class="text-center">Quality</th>
                                            <th>Username</th>
                                            <th>Stream</th>
                                            <th>Server</th>
                                            <th>Player</th>
                                            <th>ISP</th>
                                            <th class="text-center">IP</th>
                                            <th class="text-center">Duration</th>
                                            <th class="text-center">Output</th>
                                            <th class="text-center">Restreamer</th>
                                            <th class="text-center">' ?0                  	;0
414 261  FETCH_DIM_R/81            $189=     16?12                302:'actions'       	;0
415 261  ECHO/40                   ?0        $189                 ?0                  	;0
416 262  ECHO/40                   ?0        303:'</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="9" class="text-center">Loading user information...</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
417 263  GOTO/253                  ?0        ?849                 ?304                	;0
418 265  GOTO/253                  ?0        ?423                 ?305                	;0
419 267  FETCH_STATIC_PROP_R/173   $190=     306:'rRequest'       307:'XUI'           	;0
420 267  FETCH_DIM_R/81            $191=     $190                 309:'id'            	;0
421 267  FETCH_DIM_R/81            $192=     16?9                 $191                	;0
422 267  ASSIGN/38                 ?176      16?0                 $192                	;0
423 269  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'json_decode'   	;2
424 269  FETCH_DIM_FUNC_ARG/93     $194=     16?0                 312:'watchdog_data' 	;1
425 269  SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
426 269  SEND_VAL_EX/116           ?96       313:true             ?2                  	;0
427 269  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
428 269  ASSIGN/38                 ?179      16?3                 $195                	;0
429 270  GOTO/253                  ?0        ?258                 ?314                	;0
430 273  ECHO/40                   ?0        315:'"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="text-right">
											<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="total_running_streams">0</span></h3>
											<p class="text-white mb-1 text-truncate">Streams</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						' ?0                  	;0
431 274  INIT_FCALL_BY_NAME/59     ?0        ?0                   316:'E589a4Bf54A2dAD1'	;2
432 274  SEND_VAL_EX/116           ?80       318:'adv'            ?1                  	;0
433 274  SEND_VAL_EX/116           ?96       319:'streams'        ?2                  	;0
434 274  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
435 274  BOOL_NOT/13               #198=     $197                 ?0                  	;0
436 274  JMPZ/43                   ?0        #198                 ?438                	;0	>>438
437 275  GOTO/253                  ?0        ?439                 ?320                	;0
438 277  ECHO/40                   ?0        321:'</a>'           ?0                  	;0	<<436
439 279  GOTO/253                  ?0        ?160                 ?322                	;0
440 281  ECHO/40                   ?0        323:'					</div>
                    ' ?0                  	;0
441 282  FETCH_DIM_R/81            $199=     16?0                 324:'server_type'   	;0
442 282  IS_EQUAL/17               #200=     $199                 325:0               	;0
443 282  JMPZ/43                   ?0        #200                 ?445                	;0	>>445
444 283  GOTO/253                  ?0        ?447                 ?326                	;0
445 285  ECHO/40                   ?0        327:'                    <div class="col-md-6">
                    ' ?0                  	;0	<<443
446 286  GOTO/253                  ?0        ?449                 ?328                	;0
447 288  GOTO/253                  ?0        ?448                 ?329                	;0
448 290  ECHO/40                   ?0        330:'					<div class="col-md-3">
                    ' ?0                  	;0
449 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   331:'e589A4bF54A2dad1'	;2
450 292  SEND_VAL_EX/116           ?80       333:'adv'            ?1                  	;0
451 292  SEND_VAL_EX/116           ?96       334:'live_connections' ?2                  	;0
452 292  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
453 292  BOOL_NOT/13               #202=     $201                 ?0                  	;0
454 292  JMPZ/43                   ?0        #202                 ?456                	;0	>>456
455 293  GOTO/253                  ?0        ?836                 ?335                	;0
456 295  ECHO/40                   ?0        336:'<a href="./live_connections?server_id=' ?0                  	;0	<<454
457 296  FETCH_DIM_R/81            $203=     16?0                 337:'id'            	;0
458 296  ECHO/40                   ?0        $203                 ?0                  	;0
459 297  GOTO/253                  ?0        ?835                 ?338                	;0
460 299  FETCH_DIM_R/81            $204=     16?0                 339:'server_online' 	;0
461 299  JMPZ/43                   ?0        $204                 ?463                	;0	>>463
462 300  GOTO/253                  ?0        ?465                 ?340                	;0
463 302  ECHO/40                   ?0        341:'                        <div class="text-center" style="padding-top: 15px;">
                            <i class="fe-alert-triangle avatar-title font-24 text-danger"></i><br/>
                        <h4 class="header-title text-danger">Server Offline</h4>
                        </div>
                        ' ?0                  	;0	<<461
464 303  GOTO/253                  ?0        ?33                  ?342                	;0
465 305  ECHO/40                   ?0        343:'						<h5 class="mb-1 mt-0">CPU Usage<small class="text-muted ml-2">of ' ?0                  	;0
466 306  GOTO/253                  ?0        ?44                  ?344                	;0
467 308  ECHO/40                   ?0        345:'text-white'     ?0                  	;0
468 310  ECHO/40                   ?0        346:'"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="text-right">
											<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="offline_streams">0</span></h3>
											<p class="text-white mb-1 text-truncate">Down</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						' ?0                  	;0
469 311  INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'E589A4bf54A2dAd1'	;2
470 311  SEND_VAL_EX/116           ?80       349:'adv'            ?1                  	;0
471 311  SEND_VAL_EX/116           ?96       350:'streams'        ?2                  	;0
472 311  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
473 311  BOOL_NOT/13               #206=     $205                 ?0                  	;0
474 311  JMPZ/43                   ?0        #206                 ?476                	;0	>>476
475 312  GOTO/253                  ?0        ?143                 ?351                	;0
476 314  ECHO/40                   ?0        352:'</a>'           ?0                  	;0	<<474
477 315  GOTO/253                  ?0        ?143                 ?353                	;0
478 317  ISSET_ISEMPTY_CV/197      #207=     16?13                ?0                  	;33554432
479 317  JMPZ_EX/46                #207=     #207                 ?483                	;0	>>483
480 317  FETCH_CONSTANT/99         #208=     ?0                   354:'STATUS_CERTBOT'	;16
481 317  IS_EQUAL/17               #209=     16?13                #208                	;0
482 317  BOOL/52                   #207=     #209                 ?0                  	;0
483 317  JMPZ/43                   ?0        #207                 ?485                	;0	>>485	<<479
484 318  GOTO/253                  ?0        ?84                  ?357                	;0
485 320  ISSET_ISEMPTY_CV/197      #210=     16?13                ?0                  	;33554432	<<483
486 320  JMPZ_EX/46                #210=     #210                 ?490                	;0	>>490
487 320  FETCH_CONSTANT/99         #211=     ?0                   358:'STATUS_CERTBOT_INVALID'	;16
488 320  IS_EQUAL/17               #212=     16?13                #211                	;0
489 320  BOOL/52                   #210=     #212                 ?0                  	;0
490 320  BOOL_NOT/13               #213=     #210                 ?0                  	;0	<<486
491 320  JMPZ/43                   ?0        #213                 ?493                	;0	>>493
492 321  GOTO/253                  ?0        ?494                 ?361                	;0
493 323  ECHO/40                   ?0        362:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					No valid domains were selected for Certbot automation. Please try again.
				</div>
				' ?0                  	;0	<<491
494 325  GOTO/253                  ?0        ?85                  ?363                	;0
495 326  GOTO/253                  ?0        ?84                  ?364                	;0
496 328  ECHO/40                   ?0        365:'                <div class="card-box">
					<div class="col-md-12 align-self-center">
                        <div class="form-group row mb-4">
                            <label class="col-md-4 col-form-label" for="expiration_date">Certificate Expiration Date</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="expiration_date" value="' ?0                  	;0
497 329  ECHO/40                   ?0        16?7                 ?0                  	;0
498 330  ECHO/40                   ?0        366:'" readonly>
                            </div>
                        </div>
                        ' ?0                  	;0
499 331  BOOL_NOT/13               #214=     16?4                 ?0                  	;0
500 331  JMPZ/43                   ?0        #214                 ?502                	;0	>>502
501 332  GOTO/253                  ?0        ?211                 ?367                	;0
502 334  ECHO/40                   ?0        368:'                        <div class="form-group row mb-4">
                            <label class="col-md-4 col-form-label" for="cert_serial">Certificate Serial</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="cert_serial" value="' ?0                  	;0	<<500
503 335  GOTO/253                  ?0        ?205                 ?369                	;0
504 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'E589a4bf54A2DAD1'	;2
505 337  SEND_VAL_EX/116           ?80       372:'adv'            ?1                  	;0
506 337  SEND_VAL_EX/116           ?96       373:'streams'        ?2                  	;0
507 337  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
508 337  BOOL_NOT/13               #216=     $215                 ?0                  	;0
509 337  JMPZ/43                   ?0        #216                 ?511                	;0	>>511
510 338  GOTO/253                  ?0        ?515                 ?374                	;0
511 340  ECHO/40                   ?0        375:'<a href="./streams?filter=1&server=' ?0                  	;0	<<509
512 341  FETCH_DIM_R/81            $217=     16?0                 376:'id'            	;0
513 341  ECHO/40                   ?0        $217                 ?0                  	;0
514 342  ECHO/40                   ?0        377:'">'             ?0                  	;0
515 344  GOTO/253                  ?0        ?842                 ?378                	;0
516 347  ECHO/40                   ?0        379:'						<div class="card cta-box ' ?0                  	;0
517 348  FETCH_DIM_R/81            $218=     16?2                 380:'dark_mode'     	;0
518 348  JMPZ/43                   ?0        $218                 ?520                	;0	>>520
519 349  GOTO/253                  ?0        ?521                 ?381                	;0
520 351  ECHO/40                   ?0        382:'bg-info'        ?0                  	;0	<<518
521 353  GOTO/253                  ?0        ?182                 ?383                	;0
522 355  ECHO/40                   ?0        384:'</a>'           ?0                  	;0
523 357  ECHO/40                   ?0        385:'					</div>
                    ' ?0                  	;0
524 358  FETCH_DIM_R/81            $219=     16?0                 386:'server_type'   	;0
525 358  IS_EQUAL/17               #220=     $219                 387:0               	;0
526 358  BOOL_NOT/13               #221=     #220                 ?0                  	;0
527 358  JMPZ/43                   ?0        #221                 ?529                	;0	>>529
528 359  GOTO/253                  ?0        ?144                 ?388                	;0
529 361  ECHO/40                   ?0        389:'					<div class="col-md-3">
						' ?0                  	;0	<<527
530 362  GOTO/253                  ?0        ?504                 ?390                	;0
531 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   391:'is_array'      	;1
532 364  FETCH_DIM_FUNC_ARG/93     $222=     16?0                 393:'gpu_info'      	;1
533 364  SEND_VAR_EX/66            ?80       $222                 ?1                  	;0
534 364  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
535 364  BOOL_NOT/13               #224=     $223                 ?0                  	;0
536 364  JMPZ/43                   ?0        #224                 ?538                	;0	>>538
537 365  GOTO/253                  ?0        ?402                 ?394                	;0
538 367  ASSIGN/38                 ?208      16?14                395:0               	;0	<<536
539 368  FETCH_DIM_R/81            $226=     16?0                 396:'gpu_info'      	;0
540 368  FETCH_DIM_R/81            $227=     $226                 397:'gpus'          	;0
541 368  FE_RESET_R/77             $228=     $227                 ?813                	;0
542 368  FE_FETCH_R/78             ?0        $228                 16?15               	;813	>>813	<<812
543 369  NOP/0                     ?0        ?0                   ?0                  	;1
544 369  GOTO/253                  ?0        ?608                 ?398                	;0
545 371  ECHO/40                   ?0        399:' Memory Usage<small class="text-muted ml-2"> ' ?0                  	;0
546 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'number_format' 	;2
547 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'explode'       	;2
548 372  SEND_VAL_EX/116           ?80       404:' '              ?1                  	;0
549 372  FETCH_DIM_FUNC_ARG/93     $229=     16?15                405:'memory_usage'  	;2
550 372  FETCH_DIM_FUNC_ARG/93     $230=     $229                 406:'used'          	;2
551 372  SEND_VAR_EX/66            ?96       $230                 ?2                  	;0
552 372  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
553 372  SEPARATE/156              $231=     $231                 ?0                  	;0
554 372  FETCH_DIM_FUNC_ARG/93     $232=     $231                 407:0               	;1
555 372  SEND_VAR_EX/66            ?80       $232                 ?1                  	;0
556 372  SEND_VAL_EX/116           ?96       408:0                ?2                  	;0
557 372  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
558 372  ECHO/40                   ?0        $233                 ?0                  	;0
559 373  ECHO/40                   ?0        409:'MB / '          ?0                  	;0
560 374  INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'number_format' 	;2
561 374  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'explode'       	;2
562 374  SEND_VAL_EX/116           ?80       414:' '              ?1                  	;0
563 374  FETCH_DIM_FUNC_ARG/93     $234=     16?15                415:'memory_usage'  	;2
564 374  FETCH_DIM_FUNC_ARG/93     $235=     $234                 416:'total'         	;2
565 374  SEND_VAR_EX/66            ?96       $235                 ?2                  	;0
566 374  DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
567 374  SEPARATE/156              $236=     $236                 ?0                  	;0
568 374  FETCH_DIM_FUNC_ARG/93     $237=     $236                 417:0               	;1
569 374  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
570 374  SEND_VAL_EX/116           ?96       418:0                ?2                  	;0
571 374  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
572 374  ECHO/40                   ?0        $238                 ?0                  	;0
573 375  ECHO/40                   ?0        419:'MB</small></h5>
						<div class="progress-w-percent">
							<span class="progress-value font-weight-bold">' ?0                  	;0
574 376  NOP/0                     ?0        ?0                   ?0                  	;1
575 376  GOTO/253                  ?0        ?662                 ?420                	;0
576 378  ECHO/40                   ?0        421:'</small></h5>
						<div class="progress-w-percent">
							<span class="progress-value font-weight-bold">' ?0                  	;0
577 379  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'intval'        	;1
578 379  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'explode'       	;2
579 379  SEND_VAL_EX/116           ?80       426:' '              ?1                  	;0
580 379  FETCH_DIM_FUNC_ARG/93     $239=     16?15                427:'utilisation'   	;2
581 379  FETCH_DIM_FUNC_ARG/93     $240=     $239                 428:'gpu_util'      	;2
582 379  SEND_VAR_EX/66            ?96       $240                 ?2                  	;0
583 379  DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
584 379  SEPARATE/156              $241=     $241                 ?0                  	;0
585 379  FETCH_DIM_FUNC_ARG/93     $242=     $241                 429:0               	;1
586 379  SEND_VAR_EX/66            ?80       $242                 ?1                  	;0
587 379  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
588 379  ECHO/40                   ?0        $243                 ?0                  	;0
589 380  ECHO/40                   ?0        430:'% </span>
							<div class="progress progress-sm">
								<div class="progress-bar ' ?0                  	;0
590 381  INIT_FCALL_BY_NAME/59     ?0        ?0                   431:'E66aE2739944Eb3A'	;1
591 381  INIT_FCALL_BY_NAME/59     ?0        ?0                   433:'intval'        	;1
592 381  INIT_FCALL_BY_NAME/59     ?0        ?0                   435:'explode'       	;2
593 381  SEND_VAL_EX/116           ?80       437:' '              ?1                  	;0
594 381  FETCH_DIM_FUNC_ARG/93     $244=     16?15                438:'utilisation'   	;2
595 381  FETCH_DIM_FUNC_ARG/93     $245=     $244                 439:'gpu_util'      	;2
596 381  SEND_VAR_EX/66            ?96       $245                 ?2                  	;0
597 381  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
598 381  SEPARATE/156              $246=     $246                 ?0                  	;0
599 381  FETCH_DIM_FUNC_ARG/93     $247=     $246                 440:0               	;1
600 381  SEND_VAR_EX/66            ?80       $247                 ?1                  	;0
601 381  DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
602 381  SEND_VAR_NO_REF_EX/50     ?80       $248                 ?1                  	;0
603 381  DO_FCALL_BY_NAME/131      $249=     ?0                   ?0                  	;0
604 381  ECHO/40                   ?0        $249                 ?0                  	;0
605 382  ECHO/40                   ?0        441:'" role="progressbar" style="width: ' ?0                  	;0
606 383  NOP/0                     ?0        ?0                   ?0                  	;1
607 383  GOTO/253                  ?0        ?783                 ?442                	;0
608 385  INIT_FCALL_BY_NAME/59     ?0        ?0                   443:'number_format' 	;2
609 385  INIT_FCALL_BY_NAME/59     ?0        ?0                   445:'intval'        	;1
610 385  INIT_FCALL_BY_NAME/59     ?0        ?0                   447:'explode'       	;2
611 385  SEND_VAL_EX/116           ?80       449:' '              ?1                  	;0
612 385  FETCH_DIM_FUNC_ARG/93     $250=     16?15                450:'memory_usage'  	;2
613 385  FETCH_DIM_FUNC_ARG/93     $251=     $250                 451:'used'          	;2
614 385  SEND_VAR_EX/66            ?96       $251                 ?2                  	;0
615 385  DO_FCALL_BY_NAME/131      $252=     ?0                   ?0                  	;0
616 385  SEPARATE/156              $252=     $252                 ?0                  	;0
617 385  FETCH_DIM_FUNC_ARG/93     $253=     $252                 452:0               	;1
618 385  SEND_VAR_EX/66            ?80       $253                 ?1                  	;0
619 385  DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
620 385  INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'intval'        	;1
621 385  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'explode'       	;2
622 385  SEND_VAL_EX/116           ?80       457:' '              ?1                  	;0
623 385  FETCH_DIM_FUNC_ARG/93     $255=     16?15                458:'memory_usage'  	;2
624 385  FETCH_DIM_FUNC_ARG/93     $256=     $255                 459:'total'         	;2
625 385  SEND_VAR_EX/66            ?96       $256                 ?2                  	;0
626 385  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
627 385  SEPARATE/156              $257=     $257                 ?0                  	;0
628 385  FETCH_DIM_FUNC_ARG/93     $258=     $257                 460:0               	;1
629 385  SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
630 385  DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
631 385  DIV/4                     #260=     $254                 $259                	;0
632 385  MUL/3                     #261=     #260                 461:100             	;0
633 385  SEND_VAL_EX/116           ?80       #261                 ?1                  	;0
634 385  SEND_VAL_EX/116           ?96       462:0                ?2                  	;0
635 385  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
636 385  ASSIGN/38                 ?246      16?16                $262                	;0
637 386  ECHO/40                   ?0        463:'				<div class="card-box">
					<div class="col-md-12 align-self-center">
						<h5 class="mb-1 mt-0">GPU' ?0                  	;0
638 387  ECHO/40                   ?0        16?14                ?0                  	;0
639 388  ECHO/40                   ?0        464:' Usage<small class="text-muted ml-2"> ' ?0                  	;0
640 389  FETCH_DIM_R/81            $264=     16?15                465:'name'          	;0
641 389  ECHO/40                   ?0        $264                 ?0                  	;0
642 390  NOP/0                     ?0        ?0                   ?0                  	;1
643 390  GOTO/253                  ?0        ?576                 ?466                	;0
644 392  ECHO/40                   ?0        467:'%;" aria-valuenow="' ?0                  	;0
645 393  INIT_FCALL_BY_NAME/59     ?0        ?0                   468:'intval'        	;1
646 393  INIT_FCALL_BY_NAME/59     ?0        ?0                   470:'explode'       	;2
647 393  SEND_VAL_EX/116           ?80       472:' '              ?1                  	;0
648 393  FETCH_DIM_FUNC_ARG/93     $265=     16?15                473:'utilisation'   	;2
649 393  FETCH_DIM_FUNC_ARG/93     $266=     $265                 474:'encoder_util'  	;2
650 393  SEND_VAR_EX/66            ?96       $266                 ?2                  	;0
651 393  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
652 393  SEPARATE/156              $267=     $267                 ?0                  	;0
653 393  FETCH_DIM_FUNC_ARG/93     $268=     $267                 475:0               	;1
654 393  SEND_VAR_EX/66            ?80       $268                 ?1                  	;0
655 393  DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
656 393  ECHO/40                   ?0        $269                 ?0                  	;0
657 394  ECHO/40                   ?0        476:'" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h5 class="mb-1 mt-0">GPU' ?0                  	;0
658 395  ECHO/40                   ?0        16?14                ?0                  	;0
659 396  ECHO/40                   ?0        477:' Decoder Usage</h5>
						<div class="progress-w-percent">
							<span class="progress-value font-weight-bold">' ?0                  	;0
660 397  NOP/0                     ?0        ?0                   ?0                  	;1
661 397  GOTO/253                  ?0        ?740                 ?478                	;0
662 399  ECHO/40                   ?0        16?16                ?0                  	;0
663 400  ECHO/40                   ?0        479:'% </span>
							<div class="progress progress-sm">
								<div class="progress-bar ' ?0                  	;0
664 401  INIT_FCALL_BY_NAME/59     ?0        ?0                   480:'E66Ae2739944eb3a'	;1
665 401  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
666 401  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
667 401  ECHO/40                   ?0        $270                 ?0                  	;0
668 402  ECHO/40                   ?0        482:'" role="progressbar" style="width: ' ?0                  	;0
669 403  ECHO/40                   ?0        16?16                ?0                  	;0
670 404  NOP/0                     ?0        ?0                   ?0                  	;1
671 404  GOTO/253                  ?0        ?715                 ?483                	;0
672 406  INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'intval'        	;1
673 406  INIT_FCALL_BY_NAME/59     ?0        ?0                   486:'explode'       	;2
674 406  SEND_VAL_EX/116           ?80       488:' '              ?1                  	;0
675 406  FETCH_DIM_FUNC_ARG/93     $271=     16?15                489:'utilisation'   	;2
676 406  FETCH_DIM_FUNC_ARG/93     $272=     $271                 490:'encoder_util'  	;2
677 406  SEND_VAR_EX/66            ?96       $272                 ?2                  	;0
678 406  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
679 406  SEPARATE/156              $273=     $273                 ?0                  	;0
680 406  FETCH_DIM_FUNC_ARG/93     $274=     $273                 491:0               	;1
681 406  SEND_VAR_EX/66            ?80       $274                 ?1                  	;0
682 406  DO_FCALL_BY_NAME/131      $275=     ?0                   ?0                  	;0
683 406  ECHO/40                   ?0        $275                 ?0                  	;0
684 407  ECHO/40                   ?0        492:'% </span>
							<div class="progress progress-sm">
								<div class="progress-bar ' ?0                  	;0
685 408  INIT_FCALL_BY_NAME/59     ?0        ?0                   493:'E66ae2739944eB3a'	;1
686 408  INIT_FCALL_BY_NAME/59     ?0        ?0                   495:'intval'        	;1
687 408  INIT_FCALL_BY_NAME/59     ?0        ?0                   497:'explode'       	;2
688 408  SEND_VAL_EX/116           ?80       499:' '              ?1                  	;0
689 408  FETCH_DIM_FUNC_ARG/93     $276=     16?15                500:'utilisation'   	;2
690 408  FETCH_DIM_FUNC_ARG/93     $277=     $276                 501:'encoder_util'  	;2
691 408  SEND_VAR_EX/66            ?96       $277                 ?2                  	;0
692 408  DO_FCALL_BY_NAME/131      $278=     ?0                   ?0                  	;0
693 408  SEPARATE/156              $278=     $278                 ?0                  	;0
694 408  FETCH_DIM_FUNC_ARG/93     $279=     $278                 502:0               	;1
695 408  SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
696 408  DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
697 408  SEND_VAR_NO_REF_EX/50     ?80       $280                 ?1                  	;0
698 408  DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
699 408  ECHO/40                   ?0        $281                 ?0                  	;0
700 409  ECHO/40                   ?0        503:'" role="progressbar" style="width: ' ?0                  	;0
701 410  INIT_FCALL_BY_NAME/59     ?0        ?0                   504:'intval'        	;1
702 410  INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'explode'       	;2
703 410  SEND_VAL_EX/116           ?80       508:' '              ?1                  	;0
704 410  FETCH_DIM_FUNC_ARG/93     $282=     16?15                509:'utilisation'   	;2
705 410  FETCH_DIM_FUNC_ARG/93     $283=     $282                 510:'encoder_util'  	;2
706 410  SEND_VAR_EX/66            ?96       $283                 ?2                  	;0
707 410  DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
708 410  SEPARATE/156              $284=     $284                 ?0                  	;0
709 410  FETCH_DIM_FUNC_ARG/93     $285=     $284                 511:0               	;1
710 410  SEND_VAR_EX/66            ?80       $285                 ?1                  	;0
711 410  DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
712 410  ECHO/40                   ?0        $286                 ?0                  	;0
713 411  NOP/0                     ?0        ?0                   ?0                  	;1
714 411  GOTO/253                  ?0        ?644                 ?512                	;0
715 413  ECHO/40                   ?0        513:'%;" aria-valuenow="' ?0                  	;0
716 414  ECHO/40                   ?0        16?16                ?0                  	;0
717 415  ECHO/40                   ?0        514:'" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h5 class="mb-1 mt-0">GPU' ?0                  	;0
718 416  ECHO/40                   ?0        16?14                ?0                  	;0
719 417  ECHO/40                   ?0        515:' Encoder Usage</h5>
						<div class="progress-w-percent">
							<span class="progress-value font-weight-bold">' ?0                  	;0
720 418  NOP/0                     ?0        ?0                   ?0                  	;1
721 418  GOTO/253                  ?0        ?672                 ?516                	;0
722 420  ECHO/40                   ?0        517:'%;" aria-valuenow="' ?0                  	;0
723 421  INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'intval'        	;1
724 421  INIT_FCALL_BY_NAME/59     ?0        ?0                   520:'explode'       	;2
725 421  SEND_VAL_EX/116           ?80       522:' '              ?1                  	;0
726 421  FETCH_DIM_FUNC_ARG/93     $287=     16?15                523:'utilisation'   	;2
727 421  FETCH_DIM_FUNC_ARG/93     $288=     $287                 524:'decoder_util'  	;2
728 421  SEND_VAR_EX/66            ?96       $288                 ?2                  	;0
729 421  DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
730 421  SEPARATE/156              $289=     $289                 ?0                  	;0
731 421  FETCH_DIM_FUNC_ARG/93     $290=     $289                 525:0               	;1
732 421  SEND_VAR_EX/66            ?80       $290                 ?1                  	;0
733 421  DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
734 421  ECHO/40                   ?0        $291                 ?0                  	;0
735 422  ECHO/40                   ?0        526:'" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				' ?0                  	;0
736 423  POST_INC/36               #292=     16?14                ?0                  	;0
737 423  FREE/70                   ?0        #292                 ?0                  	;0
738 425  NOP/0                     ?0        ?0                   ?0                  	;1
739 425  GOTO/253                  ?0        ?812                 ?527                	;0
740 427  INIT_FCALL_BY_NAME/59     ?0        ?0                   528:'intval'        	;1
741 427  INIT_FCALL_BY_NAME/59     ?0        ?0                   530:'explode'       	;2
742 427  SEND_VAL_EX/116           ?80       532:' '              ?1                  	;0
743 427  FETCH_DIM_FUNC_ARG/93     $293=     16?15                533:'utilisation'   	;2
744 427  FETCH_DIM_FUNC_ARG/93     $294=     $293                 534:'decoder_util'  	;2
745 427  SEND_VAR_EX/66            ?96       $294                 ?2                  	;0
746 427  DO_FCALL_BY_NAME/131      $295=     ?0                   ?0                  	;0
747 427  SEPARATE/156              $295=     $295                 ?0                  	;0
748 427  FETCH_DIM_FUNC_ARG/93     $296=     $295                 535:0               	;1
749 427  SEND_VAR_EX/66            ?80       $296                 ?1                  	;0
750 427  DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
751 427  ECHO/40                   ?0        $297                 ?0                  	;0
752 428  ECHO/40                   ?0        536:'% </span>
							<div class="progress progress-sm">
								<div class="progress-bar ' ?0                  	;0
753 429  INIT_FCALL_BY_NAME/59     ?0        ?0                   537:'E66aE2739944eB3A'	;1
754 429  INIT_FCALL_BY_NAME/59     ?0        ?0                   539:'intval'        	;1
755 429  INIT_FCALL_BY_NAME/59     ?0        ?0                   541:'explode'       	;2
756 429  SEND_VAL_EX/116           ?80       543:' '              ?1                  	;0
757 429  FETCH_DIM_FUNC_ARG/93     $298=     16?15                544:'utilisation'   	;2
758 429  FETCH_DIM_FUNC_ARG/93     $299=     $298                 545:'decoder_util'  	;2
759 429  SEND_VAR_EX/66            ?96       $299                 ?2                  	;0
760 429  DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
761 429  SEPARATE/156              $300=     $300                 ?0                  	;0
762 429  FETCH_DIM_FUNC_ARG/93     $301=     $300                 546:0               	;1
763 429  SEND_VAR_EX/66            ?80       $301                 ?1                  	;0
764 429  DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
765 429  SEND_VAR_NO_REF_EX/50     ?80       $302                 ?1                  	;0
766 429  DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
767 429  ECHO/40                   ?0        $303                 ?0                  	;0
768 430  ECHO/40                   ?0        547:'" role="progressbar" style="width: ' ?0                  	;0
769 431  INIT_FCALL_BY_NAME/59     ?0        ?0                   548:'intval'        	;1
770 431  INIT_FCALL_BY_NAME/59     ?0        ?0                   550:'explode'       	;2
771 431  SEND_VAL_EX/116           ?80       552:' '              ?1                  	;0
772 431  FETCH_DIM_FUNC_ARG/93     $304=     16?15                553:'utilisation'   	;2
773 431  FETCH_DIM_FUNC_ARG/93     $305=     $304                 554:'decoder_util'  	;2
774 431  SEND_VAR_EX/66            ?96       $305                 ?2                  	;0
775 431  DO_FCALL_BY_NAME/131      $306=     ?0                   ?0                  	;0
776 431  SEPARATE/156              $306=     $306                 ?0                  	;0
777 431  FETCH_DIM_FUNC_ARG/93     $307=     $306                 555:0               	;1
778 431  SEND_VAR_EX/66            ?80       $307                 ?1                  	;0
779 431  DO_FCALL_BY_NAME/131      $308=     ?0                   ?0                  	;0
780 431  ECHO/40                   ?0        $308                 ?0                  	;0
781 432  NOP/0                     ?0        ?0                   ?0                  	;1
782 432  GOTO/253                  ?0        ?722                 ?556                	;0
783 434  INIT_FCALL_BY_NAME/59     ?0        ?0                   557:'intval'        	;1
784 434  INIT_FCALL_BY_NAME/59     ?0        ?0                   559:'explode'       	;2
785 434  SEND_VAL_EX/116           ?80       561:' '              ?1                  	;0
786 434  FETCH_DIM_FUNC_ARG/93     $309=     16?15                562:'utilisation'   	;2
787 434  FETCH_DIM_FUNC_ARG/93     $310=     $309                 563:'gpu_util'      	;2
788 434  SEND_VAR_EX/66            ?96       $310                 ?2                  	;0
789 434  DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
790 434  SEPARATE/156              $311=     $311                 ?0                  	;0
791 434  FETCH_DIM_FUNC_ARG/93     $312=     $311                 564:0               	;1
792 434  SEND_VAR_EX/66            ?80       $312                 ?1                  	;0
793 434  DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
794 434  ECHO/40                   ?0        $313                 ?0                  	;0
795 435  ECHO/40                   ?0        565:'%;" aria-valuenow="' ?0                  	;0
796 436  INIT_FCALL_BY_NAME/59     ?0        ?0                   566:'intval'        	;1
797 436  INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'explode'       	;2
798 436  SEND_VAL_EX/116           ?80       570:' '              ?1                  	;0
799 436  FETCH_DIM_FUNC_ARG/93     $314=     16?15                571:'utilisation'   	;2
800 436  FETCH_DIM_FUNC_ARG/93     $315=     $314                 572:'gpu_util'      	;2
801 436  SEND_VAR_EX/66            ?96       $315                 ?2                  	;0
802 436  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
803 436  SEPARATE/156              $316=     $316                 ?0                  	;0
804 436  FETCH_DIM_FUNC_ARG/93     $317=     $316                 573:0               	;1
805 436  SEND_VAR_EX/66            ?80       $317                 ?1                  	;0
806 436  DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
807 436  ECHO/40                   ?0        $318                 ?0                  	;0
808 437  ECHO/40                   ?0        574:'" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h5 class="mb-1 mt-0">GPU' ?0                  	;0
809 438  ECHO/40                   ?0        16?14                ?0                  	;0
810 439  NOP/0                     ?0        ?0                   ?0                  	;1
811 439  GOTO/253                  ?0        ?545                 ?575                	;0
812 440  JMP/42                    ?0        ?542                 ?0                  	;0	>>542
813 440  FE_FREE/127               ?0        $228                 ?0                  	;0	<<541
814 443  BOOL_NOT/13               #319=     16?6                 ?0                  	;0
815 443  JMPZ/43                   ?0        #319                 ?817                	;0	>>817
816 444  GOTO/253                  ?0        ?402                 ?576                	;0
817 446  GOTO/253                  ?0        ?496                 ?577                	;0	<<815
818 448  ECHO/40                   ?0        578:'						<div class="card cta-box ' ?0                  	;0
819 449  FETCH_DIM_R/81            $320=     16?2                 579:'dark_mode'     	;0
820 449  JMPZ/43                   ?0        $320                 ?822                	;0	>>822
821 450  GOTO/253                  ?0        ?823                 ?580                	;0
822 452  ECHO/40                   ?0        581:'bg-purple'      ?0                  	;0	<<820
823 454  ECHO/40                   ?0        582:' text-white">
							<div class="card-body active-connections">
								<div class="media align-items-center">
									<div class="col-3">
										<div class="avatar-sm bg-light">
											<i class="fe-zap avatar-title font-22 ' ?0                  	;0
824 455  GOTO/253                  ?0        ?136                 ?583                	;0
825 458  ASSIGN/38                 ?304      16?6                 584:true            	;0
826 459  INIT_FCALL_BY_NAME/59     ?0        ?0                   585:'time'          	;0
827 459  DO_FCALL_BY_NAME/131      $322=     ?0                   ?0                  	;0
828 459  FETCH_DIM_R/81            $323=     16?5                 587:'expiration'    	;0
829 459  IS_SMALLER/19             #324=     $322                 $323                	;0
830 459  BOOL_NOT/13               #325=     #324                 ?0                  	;0
831 459  JMPZ/43                   ?0        #325                 ?833                	;0	>>833
832 460  GOTO/253                  ?0        ?834                 ?588                	;0
833 462  ASSIGN/38                 ?309      16?4                 589:true            	;0	<<831
834 464  GOTO/253                  ?0        ?70                  ?590                	;0
835 466  ECHO/40                   ?0        591:'">'             ?0                  	;0
836 468  ECHO/40                   ?0        592:'						<div class="card cta-box ' ?0                  	;0
837 469  FETCH_DIM_R/81            $327=     16?2                 593:'dark_mode'     	;0
838 469  JMPZ/43                   ?0        $327                 ?840                	;0	>>840
839 470  GOTO/253                  ?0        ?153                 ?594                	;0
840 472  ECHO/40                   ?0        595:'bg-success'     ?0                  	;0	<<838
841 473  GOTO/253                  ?0        ?153                 ?596                	;0
842 475  ECHO/40                   ?0        597:'						<div class="card cta-box ' ?0                  	;0
843 476  FETCH_DIM_R/81            $328=     16?2                 598:'dark_mode'     	;0
844 476  JMPZ/43                   ?0        $328                 ?846                	;0	>>846
845 477  GOTO/253                  ?0        ?847                 ?599                	;0
846 479  ECHO/40                   ?0        600:'bg-pink'        ?0                  	;0	<<844
847 481  ECHO/40                   ?0        601:' text-white">
							<div class="card-body active-connections">
								<div class="media align-items-center">
									<div class="col-3">
										<div class="avatar-sm bg-light">
											<i class="fe-play avatar-title font-22 ' ?0                  	;0
848 482  GOTO/253                  ?0        ?12                  ?602                	;0
849 484  INCLUDE_OR_EVAL/73        ?312      603:'footer.php'     ?0                  	;2
850 485  NOP/0                     ?0        604:1                ?0                  	;4294967295
*/

?>