<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?21                  ?0                  	;0	>>21
1   5    FETCH_STATIC_PROP_IS/176  $10=      1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  4:'update'          	;33554432
3   5    JMPZ/43                   ?0        #11                  ?5                  	;0	>>5
4   6    GOTO/253                  ?0        ?7                   ?5                  	;0
5   8    ECHO/40                   ?0        6:'Reinstall Proxy'  ?0                  	;0	<<3
6   9    GOTO/253                  ?0        ?103                 ?7                  	;0
7   11   ECHO/40                   ?0        8:'Update Proxy'     ?0                  	;0
8   12   GOTO/253                  ?0        ?103                 ?9                  	;0
9   15   JMPZ/43                   ?0        16?0                 ?11                 	;0	>>11
10  16   GOTO/253                  ?0        ?13                  ?10                 	;0
11  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'E72f42A93714Ba87'	;0	<<9
12  18   DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
13  21   GOTO/253                  ?0        ?150                 ?13                 	;0
14  24   ECHO/40                   ?0        14:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
15  25   INCLUDE_OR_EVAL/73        ?3        15:'topbar.php'      ?0                  	;2
16  26   ECHO/40                   ?0        16:'					</div>
                    ' ?0                  	;0
17  27   IS_EQUAL/17               #14=      16?1                 17:1                	;0
18  27   JMPZ/43                   ?0        #14                  ?20                 	;0	>>20
19  28   GOTO/253                  ?0        ?68                  ?18                 	;0
20  30   GOTO/253                  ?0        ?228                 ?19                 	;0	<<18
21  32   INCLUDE_OR_EVAL/73        ?5        20:'session.php'     ?0                  	;2	<<0
22  33   INCLUDE_OR_EVAL/73        ?6        21:'functions.php'   ?0                  	;2
23  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'E6d500e19634D513'	;0
24  34   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
25  34   JMPZ/43                   ?0        $17                  ?27                 	;0	>>27
26  35   GOTO/253                  ?0        ?29                  ?24                 	;0
27  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'e72f42a93714Ba87'	;0	<<25
28  37   DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
29  39   GOTO/253                  ?0        ?130                 ?27                 	;0
30  42   ECHO/40                   ?0        28:'value="'         ?0                  	;0
31  43   ISSET_ISEMPTY_CV/197      #19=      16?0                 ?0                  	;33554432
32  43   BOOL_NOT/13               #20=      #19                  ?0                  	;0
33  43   JMPZ/43                   ?0        #20                  ?35                 	;0	>>35
34  44   GOTO/253                  ?0        ?40                  ?29                 	;0
35  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'htmlspecialchars'	;1	<<33
36  46   FETCH_DIM_FUNC_ARG/93     $21=      16?0                 32:'server_name'    	;1
37  46   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
38  46   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
39  46   ECHO/40                   ?0        $22                  ?0                  	;0
40  48   GOTO/253                  ?0        ?220                 ?33                 	;0
41  50   GOTO/253                  ?0        ?43                  ?34                 	;0
42  52   ASSIGN/38                 ?13       16?1                 35:1                	;0
43  54   FETCH_STATIC_PROP_IS/176  $24=      36:'rRequest'        37:'XUI'            	;0
44  54   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  39:'id'             	;33554432
45  54   BOOL_NOT/13               #26=      #25                  ?0                  	;0
46  54   JMPZ/43                   ?0        #26                  ?48                 	;0	>>48
47  55   GOTO/253                  ?0        ?13                  ?40                 	;0
48  57   GOTO/253                  ?0        ?183                 ?41                 	;0	<<46
49  60   ISSET_ISEMPTY_CV/197      #27=      16?0                 ?0                  	;33554432
50  60   JMPZ_EX/46                #27=      #27                  ?54                 	;0	>>54
51  60   FETCH_STATIC_PROP_IS/176  $28=      42:'rRequest'        43:'XUI'            	;0
52  60   ISSET_ISEMPTY_DIM_OBJ/115 #29=      $28                  45:'update'         	;33554432
53  60   BOOL/52                   #27=      #29                  ?0                  	;0
54  60   JMPZ/43                   ?0        #27                  ?56                 	;0	>>56	<<50
55  61   GOTO/253                  ?0        ?71                  ?46                 	;0
56  63   ECHO/40                   ?0        47:'                                                <div class="alert alert-warning mb-4" role="alert">
                                                    ' ?0                  	;0	<<54
57  64   IS_EQUAL/17               #30=      16?1                 48:1                	;0
58  64   JMPZ/43                   ?0        #30                  ?60                 	;0	>>60
59  65   GOTO/253                  ?0        ?311                 ?49                 	;0
60  67   ECHO/40                   ?0        50:'                                                    Installation will begin immediately, you will be alerted of progress on the Server View page. After installation is complete you can amend the ports and other server settings.
                                                    ' ?0                  	;0	<<58
61  68   GOTO/253                  ?0        ?310                 ?51                 	;0
62  70   ECHO/40                   ?0        52:'" />
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
63  72   ECHO/40                   ?0        53:'								</div> 
							</div> 
						</form>
                        ' ?0                  	;0
64  73   GOTO/253                  ?0        ?107                 ?54                 	;0
65  75   GOTO/253                  ?0        ?106                 ?55                 	;0
66  79   ECHO/40                   ?0        56:'</h4>
                    ' ?0                  	;0
67  80   GOTO/253                  ?0        ?104                 ?57                 	;0
68  82   GOTO/253                  ?0        ?75                  ?58                 	;0
69  84   ECHO/40                   ?0        59:'                                                </div>
                                                ' ?0                  	;0
70  85   GOTO/253                  ?0        ?148                 ?60                 	;0
71  87   ECHO/40                   ?0        61:'                                                <div class="alert alert-info" role="alert">
                                                    In order to update your XUI core from v' ?0                  	;0
72  88   FETCH_DIM_R/81            $31=      16?0                 62:'xui_version'    	;0
73  88   ECHO/40                   ?0        $31                  ?0                  	;0
74  89   GOTO/253                  ?0        ?142                 ?63                 	;0
75  91   ECHO/40                   ?0        64:'					<h4 class="page-title">' ?0                  	;0
76  92   ISSET_ISEMPTY_CV/197      #32=      16?0                 ?0                  	;33554432
77  92   JMPZ/43                   ?0        #32                  ?79                 	;0	>>79
78  93   GOTO/253                  ?0        ?81                  ?65                 	;0
79  95   ECHO/40                   ?0        66:'Proxy Installation' ?0                  	;0	<<77
80  96   GOTO/253                  ?0        ?103                 ?67                 	;0
81  98   GOTO/253                  ?0        ?1                   ?68                 	;0
82  100  ISSET_ISEMPTY_CV/197      #33=      16?0                 ?0                  	;33554432
83  100  BOOL_NOT/13               #34=      #33                  ?0                  	;0
84  100  JMPZ/43                   ?0        #34                  ?86                 	;0	>>86
85  101  GOTO/253                  ?0        ?91                  ?69                 	;0
86  103  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'htmlspecialchars'	;1	<<84
87  103  FETCH_DIM_FUNC_ARG/93     $35=      16?0                 72:'server_ip'      	;1
88  103  SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
89  103  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
90  103  ECHO/40                   ?0        $36                  ?0                  	;0
91  105  ECHO/40                   ?0        73:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-3 col-form-label" for="server_ip">SSH Port</label>
                                                    <div class="col-md-3">
														<input type="text" class="form-control text-center" id="ssh_port" name="ssh_port" value="22" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="root_username">SSH Username <i title="This needs to be either the root user, or sudoer. Root is recommended." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input type="text" class="form-control" id="root_username" name="root_username" value="root" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-3 col-form-label" for="root_username">SSH Password</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="root_password" name="root_password" value="" required data-parsley-trigger="change">
													</div>
												</div>
                                                ' ?0                  	;0
92  106  IS_EQUAL/17               #37=      16?1                 74:1                	;0
93  106  JMPZ/43                   ?0        #37                  ?95                 	;0	>>95
94  107  GOTO/253                  ?0        ?102                 ?75                 	;0
95  109  GOTO/253                  ?0        ?96                  ?76                 	;0	<<93
96  111  ISSET_ISEMPTY_CV/197      #38=      16?0                 ?0                  	;33554432
97  111  BOOL_NOT/13               #39=      #38                  ?0                  	;0
98  111  JMPZ/43                   ?0        #39                  ?100                	;0	>>100
99  112  GOTO/253                  ?0        ?101                 ?77                 	;0
100 114  ECHO/40                   ?0        78:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="update_only">Update Server <i title="Select this option to update the server files to the latest instead of reinstalling it and resetting the PHP-FPM and NGINX settings." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="update_only" id="update_only" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                ' ?0                  	;0	<<98
101 116  GOTO/253                  ?0        ?158                 ?79                 	;0
102 118  GOTO/253                  ?0        ?157                 ?80                 	;0
103 122  ECHO/40                   ?0        81:'</h4>
                    ' ?0                  	;0
104 124  ECHO/40                   ?0        82:'				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
                        ' ?0                  	;0
105 125  GOTO/253                  ?0        ?109                 ?83                 	;0
106 127  ECHO/40                   ?0        84:'                        <div class="alert alert-danger" role="alert">
                            This is your main server, you cannot reinstall it from the XUI panel. To reinstall this server, please use the installation instructions on the billing panel.
                        </div>
                        ' ?0                  	;0
107 129  ECHO/40                   ?0        85:'					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
108 130  GOTO/253                  ?0        ?325                 ?86                 	;0
109 132  ISSET_ISEMPTY_CV/197      #40=      16?0                 ?0                  	;33554432
110 132  JMPZ_EX/46                #40=      #40                  ?114                	;0	>>114
111 132  FETCH_DIM_R/81            $41=      16?0                 87:'is_main'        	;0
112 132  IS_EQUAL/17               #42=      $41                  88:1                	;0
113 132  BOOL/52                   #40=      #42                  ?0                  	;0
114 132  JMPZ/43                   ?0        #40                  ?116                	;0	>>116	<<110
115 133  GOTO/253                  ?0        ?65                  ?89                 	;0
116 135  ECHO/40                   ?0        90:'						<form action="#" method="POST" data-parsley-validate="">
                            ' ?0                  	;0	<<114
117 136  ISSET_ISEMPTY_CV/197      #43=      16?0                 ?0                  	;33554432
118 136  BOOL_NOT/13               #44=      #43                  ?0                  	;0
119 136  JMPZ/43                   ?0        #44                  ?121                	;0	>>121
120 137  GOTO/253                  ?0        ?126                 ?91                 	;0
121 139  ECHO/40                   ?0        92:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<119
122 140  FETCH_DIM_R/81            $45=      16?0                 93:'id'             	;0
123 140  ECHO/40                   ?0        $45                  ?0                  	;0
124 141  GOTO/253                  ?0        ?125                 ?94                 	;0
125 143  ECHO/40                   ?0        95:'" />
                            ' ?0                  	;0
126 145  ECHO/40                   ?0        96:'                            <input type="hidden" id="parent_id" name="parent_id" value="" />
                            <input type="hidden" name="type" value="' ?0                  	;0
127 146  ECHO/40                   ?0        16?1                 ?0                  	;0
128 147  ECHO/40                   ?0        97:'" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#server-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-creation mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
129 148  GOTO/253                  ?0        ?239                 ?98                 	;0
130 150  FETCH_STATIC_PROP_IS/176  $46=      99:'rRequest'        100:'XUI'           	;0
131 150  ISSET_ISEMPTY_DIM_OBJ/115 #47=      $46                  102:'proxy'         	;33554432
132 150  JMPZ/43                   ?0        #47                  ?134                	;0	>>134
133 151  GOTO/253                  ?0        ?42                  ?103                	;0
134 153  JMPNZ_EX/47               #48=      16?2                 ?136                	;0	>>136	<<132
135 153  BOOL/52                   #48=      16?3                 ?0                  	;0
136 153  BOOL_NOT/13               #49=      #48                  ?0                  	;0	<<134
137 153  JMPZ/43                   ?0        #49                  ?139                	;0	>>139
138 154  GOTO/253                  ?0        ?140                 ?104                	;0
139 156  EXIT/79                   ?0        ?0                   ?0                  	;0	<<137
140 158  ASSIGN/38                 ?40       16?1                 105:2               	;0
141 159  GOTO/253                  ?0        ?41                  ?106                	;0
142 161  ECHO/40                   ?0        107:' to v'          ?0                  	;0
143 162  FETCH_CONSTANT/99         #51=      ?0                   108:'SERVER_ID'     	;16
144 162  FETCH_DIM_R/81            $52=      16?4                 #51                 	;0
145 162  FETCH_DIM_R/81            $53=      $52                  111:'xui_version'   	;0
146 162  ECHO/40                   ?0        $53                  ?0                  	;0
147 163  ECHO/40                   ?0        112:', you will need to enter root SSH details.<br/>This will reinstall your server with the most up to date software, it shouldn\'t take too long, however your server will be offline to customers during the update process.
                                                </div>
                                                ' ?0                  	;0
148 165  ECHO/40                   ?0        113:'                                            </div>
										</div>
										<ul class="list-inline wizard mb-0">
                                            ' ?0                  	;0
149 166  GOTO/253                  ?0        ?316                 ?114                	;0
150 168  IS_EQUAL/17               #54=      16?1                 115:1               	;0
151 168  JMPZ/43                   ?0        #54                  ?153                	;0	>>153
152 169  GOTO/253                  ?0        ?155                 ?116                	;0
153 171  ASSIGN/38                 ?45       16?5                 117:'Install Server'	;0	<<151
154 172  GOTO/253                  ?0        ?165                 ?118                	;0
155 174  ASSIGN/38                 ?46       16?5                 119:'Install Proxy' 	;0
156 175  GOTO/253                  ?0        ?165                 ?120                	;0
157 177  ECHO/40                   ?0        121:'                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="http_broadcast_port">HTTP Port <i title="Enter a port number between 1024 and 65535. As XUI doesn\'t run as root, it cannot run on a port lower than 1024. This cannot be changed later." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="http_broadcast_port" name="http_broadcast_port" value="80" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-3 col-form-label" for="https_broadcast_port">HTTPS Port <i title="Enter a port number between 1024 and 65535. As XUI doesn\'t run as root, it cannot run on a port lower than 1024. This cannot be changed later." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input type="text" class="form-control text-center" id="https_broadcast_port" name="https_broadcast_port" value="443" required data-parsley-trigger="change">
													</div>
												</div>
                                                ' ?0                  	;0
158 179  ECHO/40                   ?0        122:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="update_sysctl">Update sysctl.conf <i title="Use the XUI sysctl.conf file. If you have your own custom sysctl.conf, then disable this or it will be overwritten. If you don\'t know what a sysctl configuration is, use this as it will correctly set your TCP settings and open file limits." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="update_sysctl" id="update_sysctl" type="checkbox" data-plugin="switchery" class="js-switch" checked data-color="#039cfd"/>
													</div>
                                                </div>
                                                ' ?0                  	;0
159 180  IS_EQUAL/17               #57=      16?1                 123:1               	;0
160 180  BOOL_NOT/13               #58=      #57                  ?0                  	;0
161 180  JMPZ/43                   ?0        #58                  ?163                	;0	>>163
162 181  GOTO/253                  ?0        ?49                  ?124                	;0
163 183  ECHO/40                   ?0        125:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="use_private_ip">Use Private IP <i title="Use the private IP of the load balancer you\'ve selected to route traffic internally." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="use_private_ip" id="use_private_ip" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                ' ?0                  	;0	<<161
164 184  GOTO/253                  ?0        ?49                  ?126                	;0
165 187  INCLUDE_OR_EVAL/73        ?49       127:'header.php'     ?0                  	;2
166 188  ECHO/40                   ?0        128:'<div class="wrapper boxed-layout"' ?0                  	;0
167 189  FETCH_IS/89               $60=      129:'_SERVER'        ?0                  	;0
168 189  ISSET_ISEMPTY_DIM_OBJ/115 #61=      $60                  130:'HTTP_X_REQUESTED_WITH'	;16777216
169 189  BOOL_NOT/13               #62=      #61                  ?0                  	;0
170 189  JMPZ_EX/46                #62=      #62                  ?178                	;0	>>178
171 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'strtolower'    	;1
172 189  FETCH_FUNC_ARG/92         $63=      133:'_SERVER'        ?0                  	;1
173 189  FETCH_DIM_FUNC_ARG/93     $64=      $63                  134:'HTTP_X_REQUESTED_WITH'	;1
174 189  SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
175 189  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
176 189  IS_EQUAL/17               #66=      $65                  135:'xmlhttprequest'	;0
177 189  BOOL/52                   #62=      #66                  ?0                  	;0
178 189  BOOL_NOT/13               #67=      #62                  ?0                  	;0	<<170
179 189  JMPZ/43                   ?0        #67                  ?181                	;0	>>181
180 190  GOTO/253                  ?0        ?14                  ?136                	;0
181 192  ECHO/40                   ?0        137:' style="display: none;"' ?0                  	;0	<<179
182 193  GOTO/253                  ?0        ?14                  ?138                	;0
183 195  IS_EQUAL/17               #68=      16?1                 139:1               	;0
184 195  JMPZ/43                   ?0        #68                  ?186                	;0	>>186
185 196  GOTO/253                  ?0        ?194                 ?140                	;0
186 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'intval'        	;1	<<184
187 198  FETCH_STATIC_PROP_FUNC_ARG/177 $69=      143:'rRequest'       144:'XUI'           	;1
188 198  FETCH_DIM_FUNC_ARG/93     $70=      $69                  146:'id'            	;1
189 198  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
190 198  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
191 198  FETCH_DIM_R/81            $72=      16?4                 $71                 	;0
192 198  ASSIGN/38                 ?63       16?0                 $72                 	;0
193 199  GOTO/253                  ?0        ?9                   ?147                	;0
194 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'intval'        	;1
195 201  FETCH_STATIC_PROP_FUNC_ARG/177 $74=      150:'rRequest'       151:'XUI'           	;1
196 201  FETCH_DIM_FUNC_ARG/93     $75=      $74                  153:'id'            	;1
197 201  SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
198 201  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
199 201  FETCH_DIM_R/81            $77=      16?6                 $76                 	;0
200 201  ASSIGN/38                 ?68       16?0                 $77                 	;0
201 202  GOTO/253                  ?0        ?9                   ?154                	;0
202 204  ECHO/40                   ?0        155:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="server-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="server_name">' ?0                  	;0
203 205  FETCH_DIM_R/81            $79=      16?7                 156:'server_name'   	;0
204 205  ECHO/40                   ?0        $79                  ?0                  	;0
205 206  ECHO/40                   ?0        157:'</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="server_name" name="server_name" ' ?0                  	;0
206 207  ISSET_ISEMPTY_CV/197      #80=      16?0                 ?0                  	;33554432
207 207  BOOL_NOT/13               #81=      #80                  ?0                  	;0
208 207  JMPZ/43                   ?0        #81                  ?210                	;0	>>210
209 208  GOTO/253                  ?0        ?30                  ?158                	;0
210 210  ECHO/40                   ?0        159:'readonly '      ?0                  	;0	<<208
211 211  GOTO/253                  ?0        ?30                  ?160                	;0
212 213  FETCH_STATIC_PROP_IS/176  $82=      161:'rRequest'       162:'XUI'           	;0
213 213  ISSET_ISEMPTY_DIM_OBJ/115 #83=      $82                  164:'update'        	;33554432
214 213  JMPZ/43                   ?0        #83                  ?216                	;0	>>216
215 214  GOTO/253                  ?0        ?218                 ?165                	;0
216 216  ECHO/40                   ?0        166:'Reinstall Server' ?0                  	;0	<<214
217 217  GOTO/253                  ?0        ?66                  ?167                	;0
218 219  ECHO/40                   ?0        168:'Update Server'  ?0                  	;0
219 220  GOTO/253                  ?0        ?66                  ?169                	;0
220 222  ECHO/40                   ?0        170:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="server_ip">Server IP</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="server_ip" name="server_ip" ' ?0                  	;0
221 223  ISSET_ISEMPTY_CV/197      #84=      16?0                 ?0                  	;33554432
222 223  BOOL_NOT/13               #85=      #84                  ?0                  	;0
223 223  JMPZ/43                   ?0        #85                  ?225                	;0	>>225
224 224  GOTO/253                  ?0        ?226                 ?171                	;0
225 226  ECHO/40                   ?0        172:'readonly '      ?0                  	;0	<<223
226 228  ECHO/40                   ?0        173:'value="'        ?0                  	;0
227 229  GOTO/253                  ?0        ?82                  ?174                	;0
228 231  ECHO/40                   ?0        175:'                    <h4 class="page-title">' ?0                  	;0
229 232  ISSET_ISEMPTY_CV/197      #86=      16?0                 ?0                  	;33554432
230 232  JMPZ/43                   ?0        #86                  ?232                	;0	>>232
231 233  GOTO/253                  ?0        ?234                 ?176                	;0
232 235  ECHO/40                   ?0        177:'Server Installation' ?0                  	;0	<<230
233 236  GOTO/253                  ?0        ?66                  ?178                	;0
234 238  GOTO/253                  ?0        ?212                 ?179                	;0
235 240  ECHO/40                   ?0        180:'                                                    <br/><br/>With new installations, the file limit is set in the system. A reboot is required for this, but you can do it at your own pace.
                                                    ' ?0                  	;0
236 241  GOTO/253                  ?0        ?238                 ?181                	;0
237 243  ECHO/40                   ?0        182:'                                                    <br/><br/>As you are reinstalling the server, it will go offline until the installation is complete.
                                                    ' ?0                  	;0
238 245  GOTO/253                  ?0        ?69                  ?183                	;0
239 247  FETCH_DIM_R/81            $87=      16?7                 184:'details'       	;0
240 247  ECHO/40                   ?0        $87                  ?0                  	;0
241 248  ECHO/40                   ?0        185:'</span>
										</a>
									</li>
                                    ' ?0                  	;0
242 249  IS_EQUAL/17               #88=      16?1                 186:1               	;0
243 249  BOOL_NOT/13               #89=      #88                  ?0                  	;0
244 249  JMPZ/43                   ?0        #89                  ?246                	;0	>>246
245 250  GOTO/253                  ?0        ?247                 ?187                	;0
246 252  ECHO/40                   ?0        188:'                                    <li class="nav-item">
										<a href="#server-coverage" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-server mr-1"></i>
											<span class="d-none d-sm-inline">Server Coverage</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<244
247 254  GOTO/253                  ?0        ?202                 ?189                	;0
248 256  ECHO/40                   ?0        190:'                                    <div class="tab-pane" id="server-coverage">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<table id="datatable" class="table table-borderless mb-0">
														<thead class="bg-light">
															<tr>
																<th class="text-center">ID</th>
																<th>Server Name</th>
																<th class="text-center">Server IP</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
249 257  FETCH_STATIC_PROP_R/173   $90=      191:'rServers'       192:'XUI'           	;0
250 257  FE_RESET_R/77             $91=      $90                  ?298                	;0
251 257  FE_FETCH_R/78             #92=      $91                  16?8                	;298	>>298	<<297
252 257  ASSIGN/38                 ?83       16?9                 #92                 	;0
253 258  NOP/0                     ?0        ?0                   ?0                  	;1
254 258  GOTO/253                  ?0        ?255                 ?194                	;0
255 260  FETCH_DIM_R/81            $94=      16?8                 195:'server_type'   	;0
256 260  IS_NOT_EQUAL/18           #95=      $94                  196:0               	;0
257 260  BOOL_NOT/13               #96=      #95                  ?0                  	;0
258 260  JMPZ/43                   ?0        #96                  ?261                	;0	>>261
259 261  NOP/0                     ?0        ?0                   ?0                  	;1
260 261  GOTO/253                  ?0        ?263                 ?197                	;0
261 263  NOP/0                     ?0        ?0                   ?0                  	;1	<<258
262 263  GOTO/253                  ?0        ?295                 ?198                	;0
263 265  ECHO/40                   ?0        199:'															<tr' ?0                  	;0
264 266  ISSET_ISEMPTY_CV/197      #97=      16?0                 ?0                  	;33554432
265 266  JMPZ_EX/46                #97=      #97                  ?276                	;0	>>276
266 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'in_array'      	;2
267 266  FETCH_DIM_FUNC_ARG/93     $98=      16?8                 202:'id'            	;1
268 266  SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
269 266  FETCH_DIM_R/81            $100=     16?0                 206:'id'            	;0
270 266  FETCH_STATIC_PROP_FUNC_ARG/177 $99=      203:'rServers'       204:'XUI'           	;2
271 266  FETCH_DIM_FUNC_ARG/93     $101=     $99                  $100                	;2
272 266  FETCH_DIM_FUNC_ARG/93     $102=     $101                 207:'parent_id'     	;2
273 266  SEND_VAR_EX/66            ?96       $102                 ?2                  	;0
274 266  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
275 266  BOOL/52                   #97=      $103                 ?0                  	;0
276 266  BOOL_NOT/13               #104=     #97                  ?0                  	;0	<<265
277 266  JMPZ/43                   ?0        #104                 ?280                	;0	>>280
278 267  NOP/0                     ?0        ?0                   ?0                  	;1
279 267  GOTO/253                  ?0        ?283                 ?208                	;0
280 269  NOP/0                     ?0        ?0                   ?0                  	;1	<<277
281 269  GOTO/253                  ?0        ?282                 ?209                	;0
282 271  ECHO/40                   ?0        210:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0
283 273  ECHO/40                   ?0        211:'>
																<td class="text-center">' ?0                  	;0
284 274  FETCH_DIM_R/81            $105=     16?8                 212:'id'            	;0
285 274  ECHO/40                   ?0        $105                 ?0                  	;0
286 275  ECHO/40                   ?0        213:'</td>
																<td>' ?0                  	;0
287 276  NOP/0                     ?0        ?0                   ?0                  	;1
288 276  GOTO/253                  ?0        ?289                 ?214                	;0
289 278  FETCH_DIM_R/81            $106=     16?8                 215:'server_name'   	;0
290 278  ECHO/40                   ?0        $106                 ?0                  	;0
291 279  ECHO/40                   ?0        216:'</td>
																<td class="text-center">' ?0                  	;0
292 280  FETCH_DIM_R/81            $107=     16?8                 217:'server_ip'     	;0
293 280  ECHO/40                   ?0        $107                 ?0                  	;0
294 281  ECHO/40                   ?0        218:'</td>
															</tr>
															' ?0                  	;0
295 283  NOP/0                     ?0        ?0                   ?0                  	;1
296 283  GOTO/253                  ?0        ?297                 ?219                	;0
297 284  JMP/42                    ?0        ?251                 ?0                  	;0	>>251
298 284  FE_FREE/127               ?0        $91                  ?0                  	;0	<<250
299 287  ECHO/40                   ?0        220:'														</tbody>
													</table>
												</div>
											</div> 
										</div>
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_server" type="submit" class="btn btn-primary" value="' ?0                  	;0
300 288  FETCH_DIM_R/81            $108=     16?7                 221:'install_server'	;0
301 288  ECHO/40                   ?0        $108                 ?0                  	;0
302 289  GOTO/253                  ?0        ?62                  ?222                	;0
303 292  ECHO/40                   ?0        223:'											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
                                            ' ?0                  	;0
304 294  ECHO/40                   ?0        224:'										</ul>
									</div>
                                    ' ?0                  	;0
305 295  IS_EQUAL/17               #109=     16?1                 225:1               	;0
306 295  BOOL_NOT/13               #110=     #109                 ?0                  	;0
307 295  JMPZ/43                   ?0        #110                 ?309                	;0	>>309
308 296  GOTO/253                  ?0        ?63                  ?226                	;0
309 298  GOTO/253                  ?0        ?248                 ?227                	;0	<<307
310 300  GOTO/253                  ?0        ?312                 ?228                	;0
311 302  ECHO/40                   ?0        229:'                                                    You will not be able to change the port or any other settings through the XUI Admin Panel after installation, you will be required to reinstall the proxy server entirely.<br/><br/>Installation will begin immediately, you will be alerted of progress on the Server View page.
                                                    ' ?0                  	;0
312 304  ISSET_ISEMPTY_CV/197      #111=     16?0                 ?0                  	;33554432
313 304  JMPZ/43                   ?0        #111                 ?315                	;0	>>315
314 305  GOTO/253                  ?0        ?237                 ?230                	;0
315 307  GOTO/253                  ?0        ?235                 ?231                	;0	<<313
316 309  IS_EQUAL/17               #112=     16?1                 232:1               	;0
317 309  JMPZ/43                   ?0        #112                 ?319                	;0	>>319
318 310  GOTO/253                  ?0        ?303                 ?233                	;0
319 312  ECHO/40                   ?0        234:'                                            <li class="list-inline-item float-right">
												<input name="submit_server" type="submit" class="btn btn-primary" value="' ?0                  	;0	<<317
320 313  FETCH_DIM_R/81            $113=     16?7                 235:'install_server'	;0
321 313  ECHO/40                   ?0        $113                 ?0                  	;0
322 314  ECHO/40                   ?0        236:'" />
											</li>
                                            ' ?0                  	;0
323 315  GOTO/253                  ?0        ?304                 ?237                	;0
324 316  GOTO/253                  ?0        ?303                 ?238                	;0
325 318  INCLUDE_OR_EVAL/73        ?104      239:'footer.php'     ?0                  	;2
326 319  NOP/0                     ?0        240:1                ?0                  	;4294967295
*/

?>