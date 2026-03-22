<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?157                 ?0                  	;0	>>157
1   6    ECHO/40                   ?0        1:'" placeholder="'  ?0                  	;0
2   7    FETCH_DIM_R/81            $11=      16?0                 2:'search_logs'     	;0
3   7    ECHO/40                   ?0        $11                  ?0                  	;0
4   8    ECHO/40                   ?0        3:'...">
                            </div>
                            <div class="col-md-2">
                                <select id="act_stream" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
5   9    ISSET_ISEMPTY_CV/197      #12=      16?1                 ?0                  	;33554432
6   9    BOOL_NOT/13               #13=      #12                  ?0                  	;0
7   9    JMPZ/43                   ?0        #13                  ?9                  	;0	>>9
8   10   GOTO/253                  ?0        ?101                 ?4                  	;0
9   12   GOTO/253                  ?0        ?140                 ?5                  	;0	<<7
10  14   ECHO/40                   ?0        6:'                                    </optgroup>
                                    ' ?0                  	;0
11  16   ECHO/40                   ?0        7:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control text-center date" id="act_range" name="range" value="' ?0                  	;0
12  17   FETCH_STATIC_PROP_IS/176  $14=      8:'rRequest'         9:'XUI'             	;0
13  17   ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  11:'range'          	;33554432
14  17   BOOL_NOT/13               #16=      #15                  ?0                  	;0
15  17   JMPZ/43                   ?0        #16                  ?17                 	;0	>>17
16  18   GOTO/253                  ?0        ?166                 ?12                 	;0
17  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'htmlspecialchars'	;1	<<15
18  20   FETCH_STATIC_PROP_FUNC_ARG/177 $17=      15:'rRequest'        16:'XUI'            	;1
19  20   FETCH_DIM_FUNC_ARG/93     $18=      $17                  18:'range'          	;1
20  20   SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
21  20   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
22  20   ECHO/40                   ?0        $19                  ?0                  	;0
23  21   GOTO/253                  ?0        ?166                 ?19                 	;0
24  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'count'          	;1
25  23   FETCH_DIM_FUNC_ARG/93     $20=      16?2                 22:'direct_reports' 	;1
26  23   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
27  23   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
28  23   IS_SMALLER/19             #22=      23:0                 $21                 	;0
29  23   BOOL_NOT/13               #23=      #22                  ?0                  	;0
30  23   JMPZ/43                   ?0        #23                  ?32                 	;0	>>32
31  24   GOTO/253                  ?0        ?197                 ?24                 	;0
32  26   ECHO/40                   ?0        25:'                                    <optgroup label="Direct Reports">
                                        ' ?0                  	;0	<<30
33  27   FETCH_DIM_R/81            $24=      16?2                 26:'direct_reports' 	;0
34  27   FE_RESET_R/77             $25=      $24                  ?67                 	;0
35  27   FE_FETCH_R/78             ?0        $25                  16?3                	;67	>>67	<<66
36  28   NOP/0                     ?0        ?0                   ?0                  	;1
37  28   GOTO/253                  ?0        ?45                  ?27                 	;0
38  30   ECHO/40                   ?0        28:' selected'       ?0                  	;0
39  32   ECHO/40                   ?0        29:'>'               ?0                  	;0
40  33   FETCH_DIM_R/81            $26=      16?4                 30:'username'       	;0
41  33   ECHO/40                   ?0        $26                  ?0                  	;0
42  34   ECHO/40                   ?0        31:'</option>
                                        ' ?0                  	;0
43  35   NOP/0                     ?0        ?0                   ?0                  	;1
44  35   GOTO/253                  ?0        ?64                  ?32                 	;0
45  37   FETCH_DIM_R/81            $27=      16?2                 33:'users'          	;0
46  37   FETCH_DIM_R/81            $28=      $27                  16?3                	;0
47  37   ASSIGN/38                 ?18       16?4                 $28                 	;0
48  38   ECHO/40                   ?0        34:'                                        <option value="' ?0                  	;0
49  39   ECHO/40                   ?0        16?3                 ?0                  	;0
50  40   ECHO/40                   ?0        35:'"'               ?0                  	;0
51  41   FETCH_STATIC_PROP_IS/176  $30=      36:'rRequest'        37:'XUI'            	;0
52  41   ISSET_ISEMPTY_DIM_OBJ/115 #31=      $30                  39:'user'           	;33554432
53  41   JMPZ_EX/46                #31=      #31                  ?58                 	;0	>>58
54  41   FETCH_STATIC_PROP_R/173   $32=      40:'rRequest'        41:'XUI'            	;0
55  41   FETCH_DIM_R/81            $33=      $32                  43:'user'           	;0
56  41   IS_EQUAL/17               #34=      $33                  16?3                	;0
57  41   BOOL/52                   #31=      #34                  ?0                  	;0
58  41   BOOL_NOT/13               #35=      #31                  ?0                  	;0	<<53
59  41   JMPZ/43                   ?0        #35                  ?62                 	;0	>>62
60  42   NOP/0                     ?0        ?0                   ?0                  	;1
61  42   GOTO/253                  ?0        ?39                  ?44                 	;0
62  44   NOP/0                     ?0        ?0                   ?0                  	;1	<<59
63  44   GOTO/253                  ?0        ?38                  ?45                 	;0
64  47   NOP/0                     ?0        ?0                   ?0                  	;1
65  47   GOTO/253                  ?0        ?66                  ?46                 	;0
66  48   JMP/42                    ?0        ?35                  ?0                  	;0	>>35
67  48   FE_FREE/127               ?0        $25                  ?0                  	;0	<<34
68  51   ECHO/40                   ?0        47:'                                    </optgroup>
                                    ' ?0                  	;0
69  52   GOTO/253                  ?0        ?197                 ?48                 	;0
70  54   INCLUDE_OR_EVAL/73        ?25       49:'header.php'      ?0                  	;2
71  55   ECHO/40                   ?0        50:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
72  56   INCLUDE_OR_EVAL/73        ?26       51:'topbar.php'      ?0                  	;2
73  57   ECHO/40                   ?0        52:'					</div>
					<h4 class="page-title">Activity Logs</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
74  58   BOOL_NOT/13               #38=      16?5                 ?0                  	;0
75  58   JMPZ/43                   ?0        #38                  ?77                 	;0	>>77
76  59   GOTO/253                  ?0        ?114                 ?53                 	;0
77  61   GOTO/253                  ?0        ?113                 ?54                 	;0	<<75
78  63   FETCH_STATIC_PROP_IS/176  $39=      55:'rRequest'        56:'XUI'            	;0
79  63   ISSET_ISEMPTY_DIM_OBJ/115 #40=      $39                  58:'line'           	;33554432
80  63   BOOL_NOT/13               #41=      #40                  ?0                  	;0
81  63   JMPZ/43                   ?0        #41                  ?83                 	;0	>>83
82  64   GOTO/253                  ?0        ?127                 ?59                 	;0
83  66   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'E589a4bf54A2dAd1'	;2	<<81
84  66   SEND_VAL_EX/116           ?80       62:'line'            ?1                  	;0
85  66   FETCH_STATIC_PROP_FUNC_ARG/177 $42=      63:'rRequest'        64:'XUI'            	;2
86  66   FETCH_DIM_FUNC_ARG/93     $43=      $42                  66:'line'           	;2
87  66   SEND_VAR_EX/66            ?96       $43                  ?2                  	;0
88  66   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
89  66   JMPZ/43                   ?0        $44                  ?91                 	;0	>>91
90  67   GOTO/253                  ?0        ?92                  ?67                 	;0
91  69   EXIT/79                   ?0        ?0                   ?0                  	;0	<<89
92  71   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'B5aD1d95A92CE732'	;1
93  71   FETCH_STATIC_PROP_FUNC_ARG/177 $45=      70:'rRequest'        71:'XUI'            	;1
94  71   FETCH_DIM_FUNC_ARG/93     $46=      $45                  73:'line'           	;1
95  71   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
96  71   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
97  71   ASSIGN/38                 ?37       16?6                 $47                 	;0
98  72   GOTO/253                  ?0        ?127                 ?74                 	;0
99  75   ECHO/40                   ?0        75:'                                </select>
                            </div>
                        </div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th>Line</th>
									<th>Stream</th>
                                    <th>Player</th>
									<th>ISP</th>
                                    <th class="text-center">IP</th>
									<th class="text-center">Start</th>
									<th class="text-center">Stop</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Output</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>

					</div> 
				</div> 
			</div>
		</div>
		
	</div>
</div>
' ?0                  	;0
100 76   GOTO/253                  ?0        ?269                 ?76                 	;0
101 79   ECHO/40                   ?0        77:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="act_line" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
102 80   ISSET_ISEMPTY_CV/197      #49=      16?6                 ?0                  	;33554432
103 80   BOOL_NOT/13               #50=      #49                  ?0                  	;0
104 80   JMPZ/43                   ?0        #50                  ?106                	;0	>>106
105 81   GOTO/253                  ?0        ?155                 ?78                 	;0
106 83   ECHO/40                   ?0        79:'                                    <option value="' ?0                  	;0	<<104
107 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'intval'         	;1
108 84   FETCH_DIM_FUNC_ARG/93     $51=      16?6                 82:'id'             	;1
109 84   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
110 84   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
111 84   ECHO/40                   ?0        $52                  ?0                  	;0
112 85   GOTO/253                  ?0        ?151                 ?83                 	;0
113 87   ECHO/40                   ?0        84:'collapse'        ?0                  	;0
114 89   ECHO/40                   ?0        85:' form-group row mb-4">
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="act_search" value="' ?0                  	;0
115 90   FETCH_STATIC_PROP_IS/176  $53=      86:'rRequest'        87:'XUI'            	;0
116 90   ISSET_ISEMPTY_DIM_OBJ/115 #54=      $53                  89:'search'         	;33554432
117 90   BOOL_NOT/13               #55=      #54                  ?0                  	;0
118 90   JMPZ/43                   ?0        #55                  ?120                	;0	>>120
119 91   GOTO/253                  ?0        ?1                   ?90                 	;0
120 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'htmlspecialchars'	;1	<<118
121 93   FETCH_STATIC_PROP_FUNC_ARG/177 $56=      93:'rRequest'        94:'XUI'            	;1
122 93   FETCH_DIM_FUNC_ARG/93     $57=      $56                  96:'search'         	;1
123 93   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
124 93   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
125 93   ECHO/40                   ?0        $58                  ?0                  	;0
126 94   GOTO/253                  ?0        ?1                   ?97                 	;0
127 97   FETCH_STATIC_PROP_IS/176  $59=      98:'rRequest'        99:'XUI'            	;0
128 97   ISSET_ISEMPTY_DIM_OBJ/115 #60=      $59                  101:'stream'        	;33554432
129 97   BOOL_NOT/13               #61=      #60                  ?0                  	;0
130 97   JMPZ/43                   ?0        #61                  ?132                	;0	>>132
131 98   GOTO/253                  ?0        ?138                 ?102                	;0
132 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'F260B7A31f021e39'	;1	<<130
133 100  FETCH_STATIC_PROP_FUNC_ARG/177 $62=      105:'rRequest'       106:'XUI'           	;1
134 100  FETCH_DIM_FUNC_ARG/93     $63=      $62                  108:'stream'        	;1
135 100  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
136 100  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
137 100  ASSIGN/38                 ?54       16?1                 $64                 	;0
138 102  ASSIGN/38                 ?55       16?7                 109:'Activity Logs' 	;0
139 103  GOTO/253                  ?0        ?70                  ?110                	;0
140 105  ECHO/40                   ?0        111:'                                    <option value="' ?0                  	;0
141 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'intval'        	;1
142 106  FETCH_DIM_FUNC_ARG/93     $67=      16?1                 114:'id'            	;1
143 106  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
144 106  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
145 106  ECHO/40                   ?0        $68                  ?0                  	;0
146 107  ECHO/40                   ?0        115:'" selected="selected">' ?0                  	;0
147 108  FETCH_DIM_R/81            $69=      16?1                 116:'stream_display_name'	;0
148 108  ECHO/40                   ?0        $69                  ?0                  	;0
149 109  ECHO/40                   ?0        117:'</option>
                                    ' ?0                  	;0
150 110  GOTO/253                  ?0        ?101                 ?118                	;0
151 112  ECHO/40                   ?0        119:'" selected="selected">' ?0                  	;0
152 113  FETCH_DIM_R/81            $70=      16?6                 120:'username'      	;0
153 113  ECHO/40                   ?0        $70                  ?0                  	;0
154 114  ECHO/40                   ?0        121:'</option>
                                    ' ?0                  	;0
155 116  ECHO/40                   ?0        122:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="act_user" class="form-control" data-toggle="select2">
                                    <optgroup label="Global">
                                        <option value=""' ?0                  	;0
156 117  GOTO/253                  ?0        ?188                 ?123                	;0
157 119  INCLUDE_OR_EVAL/73        ?60       124:'session.php'    ?0                  	;2	<<0
158 120  INCLUDE_OR_EVAL/73        ?61       125:'functions.php'  ?0                  	;2
159 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'BaF6E9ef7775b5a9'	;0
160 121  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
161 121  JMPZ/43                   ?0        $73                  ?163                	;0	>>163
162 122  GOTO/253                  ?0        ?165                 ?128                	;0
163 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'e72F42a93714bA87'	;0	<<161
164 124  DO_FCALL_BY_NAME/131      ?63       ?0                   ?0                  	;0
165 126  GOTO/253                  ?0        ?78                  ?131                	;0
166 129  ECHO/40                   ?0        132:'" data-toggle="date-picker" data-single-date-picker="true" placeholder="All Dates">
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="act_show_entries">' ?0                  	;0
167 130  FETCH_DIM_R/81            $75=      16?0                 133:'show'          	;0
168 130  ECHO/40                   ?0        $75                  ?0                  	;0
169 131  ECHO/40                   ?0        134:'</label>
                            <div class="col-md-1">
                                <select id="act_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
170 132  FE_RESET_R/77             $76=      135:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?186                	;0
171 132  FE_FETCH_R/78             ?0        $76                  16?8                	;186	>>186	<<185
172 133  ECHO/40                   ?0        136:'                                    <option' ?0                  	;0
173 134  FETCH_DIM_R/81            $77=      16?9                 137:'default_entries'	;0
174 134  IS_EQUAL/17               #78=      $77                  16?8                	;0
175 134  BOOL_NOT/13               #79=      #78                  ?0                  	;0
176 134  JMPZ/43                   ?0        #79                  ?179                	;0	>>179
177 135  NOP/0                     ?0        ?0                   ?0                  	;1
178 135  GOTO/253                  ?0        ?180                 ?138                	;0
179 137  ECHO/40                   ?0        139:' selected'      ?0                  	;0	<<176
180 139  ECHO/40                   ?0        140:' value="'       ?0                  	;0
181 140  ECHO/40                   ?0        16?8                 ?0                  	;0
182 141  ECHO/40                   ?0        141:'">'             ?0                  	;0
183 142  ECHO/40                   ?0        16?8                 ?0                  	;0
184 143  ECHO/40                   ?0        142:'</option>
                                    ' ?0                  	;0
185 144  JMP/42                    ?0        ?171                 ?0                  	;0	>>171
186 144  FE_FREE/127               ?0        $76                  ?0                  	;0	<<170
187 146  GOTO/253                  ?0        ?99                  ?143                	;0
188 148  FETCH_STATIC_PROP_IS/176  $80=      144:'rRequest'       145:'XUI'           	;0
189 148  ISSET_ISEMPTY_DIM_OBJ/115 #81=      $80                  147:'user'          	;33554432
190 148  JMPZ/43                   ?0        #81                  ?192                	;0	>>192
191 149  GOTO/253                  ?0        ?193                 ?148                	;0
192 151  ECHO/40                   ?0        149:' selected'      ?0                  	;0	<<190
193 153  ECHO/40                   ?0        150:'>All Users</option>
                                        <option value="' ?0                  	;0
194 154  FETCH_DIM_R/81            $82=      16?10                151:'id'            	;0
195 154  ECHO/40                   ?0        $82                  ?0                  	;0
196 155  GOTO/253                  ?0        ?254                 ?152                	;0
197 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'count'         	;1
198 158  FETCH_DIM_FUNC_ARG/93     $83=      16?2                 155:'all_reports'   	;1
199 158  SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
200 158  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
201 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'count'         	;1
202 158  FETCH_DIM_FUNC_ARG/93     $85=      16?2                 158:'direct_reports'	;1
203 158  SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
204 158  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
205 158  IS_SMALLER/19             #87=      $86                  $84                 	;0
206 158  BOOL_NOT/13               #88=      #87                  ?0                  	;0
207 158  JMPZ/43                   ?0        #88                  ?209                	;0	>>209
208 159  GOTO/253                  ?0        ?11                  ?159                	;0
209 161  ECHO/40                   ?0        160:'                                    <optgroup label="Indirect Reports">
                                        ' ?0                  	;0	<<207
210 162  FETCH_DIM_R/81            $89=      16?2                 161:'all_reports'   	;0
211 162  FE_RESET_R/77             $90=      $89                  ?252                	;0
212 162  FE_FETCH_R/78             ?0        $90                  16?3                	;252	>>252	<<251
213 163  NOP/0                     ?0        ?0                   ?0                  	;1
214 163  GOTO/253                  ?0        ?232                 ?162                	;0
215 165  FETCH_STATIC_PROP_IS/176  $91=      163:'rRequest'       164:'XUI'           	;0
216 165  ISSET_ISEMPTY_DIM_OBJ/115 #92=      $91                  166:'user'          	;33554432
217 165  JMPZ_EX/46                #92=      #92                  ?222                	;0	>>222
218 165  FETCH_STATIC_PROP_R/173   $93=      167:'rRequest'       168:'XUI'           	;0
219 165  FETCH_DIM_R/81            $94=      $93                  170:'user'          	;0
220 165  IS_EQUAL/17               #95=      $94                  16?3                	;0
221 165  BOOL/52                   #92=      #95                  ?0                  	;0
222 165  BOOL_NOT/13               #96=      #92                  ?0                  	;0	<<217
223 165  JMPZ/43                   ?0        #96                  ?226                	;0	>>226
224 166  NOP/0                     ?0        ?0                   ?0                  	;1
225 166  GOTO/253                  ?0        ?227                 ?171                	;0
226 168  ECHO/40                   ?0        172:' selected'      ?0                  	;0	<<223
227 170  ECHO/40                   ?0        173:'>'              ?0                  	;0
228 171  FETCH_DIM_R/81            $97=      16?4                 174:'username'      	;0
229 171  ECHO/40                   ?0        $97                  ?0                  	;0
230 172  NOP/0                     ?0        ?0                   ?0                  	;1
231 172  GOTO/253                  ?0        ?248                 ?175                	;0
232 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'in_array'      	;2
233 174  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
234 174  FETCH_DIM_FUNC_ARG/93     $98=      16?2                 178:'direct_reports'	;2
235 174  SEND_VAR_EX/66            ?96       $98                  ?2                  	;0
236 174  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
237 174  JMPZ/43                   ?0        $99                  ?240                	;0	>>240
238 175  NOP/0                     ?0        ?0                   ?0                  	;1
239 175  GOTO/253                  ?0        ?249                 ?179                	;0
240 177  FETCH_DIM_R/81            $100=     16?2                 180:'users'         	;0	<<237
241 177  FETCH_DIM_R/81            $101=     $100                 16?3                	;0
242 177  ASSIGN/38                 ?91       16?4                 $101                	;0
243 178  ECHO/40                   ?0        181:'                                            <option value="' ?0                  	;0
244 179  ECHO/40                   ?0        16?3                 ?0                  	;0
245 180  ECHO/40                   ?0        182:'"'              ?0                  	;0
246 181  NOP/0                     ?0        ?0                   ?0                  	;1
247 181  GOTO/253                  ?0        ?215                 ?183                	;0
248 183  ECHO/40                   ?0        184:'</option>
                                            ' ?0                  	;0
249 186  NOP/0                     ?0        ?0                   ?0                  	;1
250 186  GOTO/253                  ?0        ?251                 ?185                	;0
251 187  JMP/42                    ?0        ?212                 ?0                  	;0	>>212
252 187  FE_FREE/127               ?0        $90                  ?0                  	;0	<<211
253 190  GOTO/253                  ?0        ?10                  ?186                	;0
254 192  ECHO/40                   ?0        187:'"'              ?0                  	;0
255 193  FETCH_STATIC_PROP_IS/176  $103=     188:'rRequest'       189:'XUI'           	;0
256 193  ISSET_ISEMPTY_DIM_OBJ/115 #104=     $103                 191:'user'          	;33554432
257 193  JMPZ_EX/46                #104=     #104                 ?263                	;0	>>263
258 193  FETCH_STATIC_PROP_R/173   $105=     192:'rRequest'       193:'XUI'           	;0
259 193  FETCH_DIM_R/81            $106=     $105                 195:'user'          	;0
260 193  FETCH_DIM_R/81            $107=     16?10                196:'id'            	;0
261 193  IS_EQUAL/17               #108=     $106                 $107                	;0
262 193  BOOL/52                   #104=     #108                 ?0                  	;0
263 193  BOOL_NOT/13               #109=     #104                 ?0                  	;0	<<257
264 193  JMPZ/43                   ?0        #109                 ?266                	;0	>>266
265 194  GOTO/253                  ?0        ?267                 ?197                	;0
266 196  ECHO/40                   ?0        198:' selected'      ?0                  	;0	<<264
267 198  ECHO/40                   ?0        199:'>My Lines</option>
                                    </optgroup>
                                    ' ?0                  	;0
268 199  GOTO/253                  ?0        ?24                  ?200                	;0
269 201  INCLUDE_OR_EVAL/73        ?99       201:'footer.php'     ?0                  	;2
270 202  NOP/0                     ?0        202:1                ?0                  	;4294967295
*/

?>