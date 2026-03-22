<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?99                  ?0                  	;0	>>99
1   5    ECHO/40                   ?0        1:'                                    <optgroup label="Direct Reports">
                                        ' ?0                  	;0
2   6    FETCH_DIM_R/81            $11=      16?0                 2:'direct_reports'  	;0
3   6    FE_RESET_R/77             $12=      $11                  ?36                 	;0
4   6    FE_FETCH_R/78             ?0        $12                  16?1                	;36	>>36	<<35
5   7    NOP/0                     ?0        ?0                   ?0                  	;1
6   7    GOTO/253                  ?0        ?7                   ?3                  	;0
7   9    FETCH_DIM_R/81            $13=      16?0                 4:'users'           	;0
8   9    FETCH_DIM_R/81            $14=      $13                  16?1                	;0
9   9    ASSIGN/38                 ?4        16?2                 $14                 	;0
10  10   ECHO/40                   ?0        5:'                                        <option value="' ?0                  	;0
11  11   ECHO/40                   ?0        16?1                 ?0                  	;0
12  12   ECHO/40                   ?0        6:'"'                ?0                  	;0
13  13   FETCH_STATIC_PROP_IS/176  $16=      7:'rRequest'         8:'XUI'             	;0
14  13   ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  10:'user'           	;33554432
15  13   JMPZ_EX/46                #17=      #17                  ?20                 	;0	>>20
16  13   FETCH_STATIC_PROP_R/173   $18=      11:'rRequest'        12:'XUI'            	;0
17  13   FETCH_DIM_R/81            $19=      $18                  14:'user'           	;0
18  13   IS_EQUAL/17               #20=      $19                  16?1                	;0
19  13   BOOL/52                   #17=      #20                  ?0                  	;0
20  13   BOOL_NOT/13               #21=      #17                  ?0                  	;0	<<15
21  13   JMPZ/43                   ?0        #21                  ?24                 	;0	>>24
22  14   NOP/0                     ?0        ?0                   ?0                  	;1
23  14   GOTO/253                  ?0        ?29                  ?15                 	;0
24  16   NOP/0                     ?0        ?0                   ?0                  	;1	<<21
25  16   GOTO/253                  ?0        ?28                  ?16                 	;0
26  19   NOP/0                     ?0        ?0                   ?0                  	;1
27  19   GOTO/253                  ?0        ?35                  ?17                 	;0
28  21   ECHO/40                   ?0        18:' selected'       ?0                  	;0
29  23   ECHO/40                   ?0        19:'>'               ?0                  	;0
30  24   FETCH_DIM_R/81            $22=      16?2                 20:'username'       	;0
31  24   ECHO/40                   ?0        $22                  ?0                  	;0
32  25   ECHO/40                   ?0        21:'</option>
                                        ' ?0                  	;0
33  26   NOP/0                     ?0        ?0                   ?0                  	;1
34  26   GOTO/253                  ?0        ?26                  ?22                 	;0
35  27   JMP/42                    ?0        ?4                   ?0                  	;0	>>4
36  27   FE_FREE/127               ?0        $12                  ?0                  	;0	<<3
37  30   ECHO/40                   ?0        23:'                                    </optgroup>
                                    ' ?0                  	;0
38  32   GOTO/253                  ?0        ?345                 ?24                 	;0
39  34   FETCH_DIM_R/81            $23=      16?3                 25:'username'       	;0
40  34   ECHO/40                   ?0        $23                  ?0                  	;0
41  35   ECHO/40                   ?0        26:'</option>
                                    ' ?0                  	;0
42  37   ECHO/40                   ?0        27:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="live_user" class="form-control" data-toggle="select2">
                                    <optgroup label="Global">
                                        <option value=""' ?0                  	;0
43  38   FETCH_STATIC_PROP_IS/176  $24=      28:'rRequest'        29:'XUI'            	;0
44  38   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  31:'user'           	;33554432
45  38   JMPZ/43                   ?0        #25                  ?47                 	;0	>>47
46  39   GOTO/253                  ?0        ?65                  ?32                 	;0
47  41   GOTO/253                  ?0        ?64                  ?33                 	;0	<<45
48  43   FETCH_DIM_R/81            $26=      16?4                 34:'id'             	;0
49  43   ECHO/40                   ?0        $26                  ?0                  	;0
50  44   ECHO/40                   ?0        35:'"'               ?0                  	;0
51  45   FETCH_STATIC_PROP_IS/176  $27=      36:'rRequest'        37:'XUI'            	;0
52  45   ISSET_ISEMPTY_DIM_OBJ/115 #28=      $27                  39:'user'           	;33554432
53  45   JMPZ_EX/46                #28=      #28                  ?59                 	;0	>>59
54  45   FETCH_STATIC_PROP_R/173   $29=      40:'rRequest'        41:'XUI'            	;0
55  45   FETCH_DIM_R/81            $30=      $29                  43:'user'           	;0
56  45   FETCH_DIM_R/81            $31=      16?4                 44:'id'             	;0
57  45   IS_EQUAL/17               #32=      $30                  $31                 	;0
58  45   BOOL/52                   #28=      #32                  ?0                  	;0
59  45   BOOL_NOT/13               #33=      #28                  ?0                  	;0	<<53
60  45   JMPZ/43                   ?0        #33                  ?62                 	;0	>>62
61  46   GOTO/253                  ?0        ?63                  ?45                 	;0
62  48   ECHO/40                   ?0        46:' selected'       ?0                  	;0	<<60
63  50   GOTO/253                  ?0        ?156                 ?47                 	;0
64  52   ECHO/40                   ?0        48:' selected'       ?0                  	;0
65  54   ECHO/40                   ?0        49:'>All Users</option>
                                        <option value="' ?0                  	;0
66  55   FETCH_DIM_R/81            $34=      16?4                 50:'id'             	;0
67  55   ECHO/40                   ?0        $34                  ?0                  	;0
68  56   ECHO/40                   ?0        51:'"'               ?0                  	;0
69  57   GOTO/253                  ?0        ?292                 ?52                 	;0
70  59   FETCH_STATIC_PROP_IS/176  $35=      53:'rRequest'        54:'XUI'            	;0
71  59   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  56:'line'           	;33554432
72  59   BOOL_NOT/13               #37=      #36                  ?0                  	;0
73  59   JMPZ/43                   ?0        #37                  ?75                 	;0	>>75
74  60   GOTO/253                  ?0        ?143                 ?57                 	;0
75  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'E589a4BF54A2DAd1'	;2	<<73
76  62   SEND_VAL_EX/116           ?80       60:'line'            ?1                  	;0
77  62   FETCH_STATIC_PROP_FUNC_ARG/177 $38=      61:'rRequest'        62:'XUI'            	;2
78  62   FETCH_DIM_FUNC_ARG/93     $39=      $38                  64:'line'           	;2
79  62   SEND_VAR_EX/66            ?96       $39                  ?2                  	;0
80  62   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
81  62   JMPZ/43                   ?0        $40                  ?83                 	;0	>>83
82  63   GOTO/253                  ?0        ?84                  ?65                 	;0
83  65   EXIT/79                   ?0        ?0                   ?0                  	;0	<<81
84  67   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'B5aD1D95a92Ce732'	;1
85  67   FETCH_STATIC_PROP_FUNC_ARG/177 $41=      68:'rRequest'        69:'XUI'            	;1
86  67   FETCH_DIM_FUNC_ARG/93     $42=      $41                  71:'line'           	;1
87  67   SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
88  67   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
89  67   ASSIGN/38                 ?33       16?3                 $43                 	;0
90  68   GOTO/253                  ?0        ?143                 ?72                 	;0
91  70   ECHO/40                   ?0        73:'</option>
                                    ' ?0                  	;0
92  72   ECHO/40                   ?0        74:'                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="live_line" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
93  73   ISSET_ISEMPTY_CV/197      #45=      16?3                 ?0                  	;33554432
94  73   BOOL_NOT/13               #46=      #45                  ?0                  	;0
95  73   JMPZ/43                   ?0        #46                  ?97                 	;0	>>97
96  74   GOTO/253                  ?0        ?228                 ?75                 	;0
97  76   ECHO/40                   ?0        76:'                                    <option value="' ?0                  	;0	<<95
98  77   GOTO/253                  ?0        ?219                 ?77                 	;0
99  79   INCLUDE_OR_EVAL/73        ?36       78:'session.php'     ?0                  	;2	<<0
100 80   INCLUDE_OR_EVAL/73        ?37       79:'functions.php'   ?0                  	;2
101 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'bAf6E9eF7775b5A9'	;0
102 81   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
103 81   JMPZ/43                   ?0        $49                  ?105                	;0	>>105
104 82   GOTO/253                  ?0        ?107                 ?82                 	;0
105 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'E72f42A93714Ba87'	;0	<<103
106 84   DO_FCALL_BY_NAME/131      ?39       ?0                   ?0                  	;0
107 86   GOTO/253                  ?0        ?70                  ?85                 	;0
108 88   ECHO/40                   ?0        86:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="live_line" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
109 89   ISSET_ISEMPTY_CV/197      #51=      16?3                 ?0                  	;33554432
110 89   BOOL_NOT/13               #52=      #51                  ?0                  	;0
111 89   JMPZ/43                   ?0        #52                  ?113                	;0	>>113
112 90   GOTO/253                  ?0        ?42                  ?87                 	;0
113 92   ECHO/40                   ?0        88:'                                    <option value="' ?0                  	;0	<<111
114 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'intval'         	;1
115 93   FETCH_DIM_FUNC_ARG/93     $53=      16?3                 91:'id'             	;1
116 93   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
117 93   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
118 93   ECHO/40                   ?0        $54                  ?0                  	;0
119 94   ECHO/40                   ?0        92:'" selected="selected">' ?0                  	;0
120 95   GOTO/253                  ?0        ?39                  ?93                 	;0
121 97   ECHO/40                   ?0        94:'                            <label class="col-md-1 col-form-label text-center" for="live_show_entries">' ?0                  	;0
122 98   FETCH_DIM_R/81            $55=      16?5                 95:'show'           	;0
123 98   ECHO/40                   ?0        $55                  ?0                  	;0
124 99   ECHO/40                   ?0        96:'</label>
                            <div class="col-md-1">
                                <select id="live_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
125 100  FE_RESET_R/77             $56=      97:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?141                	;0
126 100  FE_FETCH_R/78             ?0        $56                  16?6                	;141	>>141	<<140
127 101  ECHO/40                   ?0        98:'                                    <option' ?0                  	;0
128 102  FETCH_DIM_R/81            $57=      16?7                 99:'default_entries'	;0
129 102  IS_EQUAL/17               #58=      $57                  16?6                	;0
130 102  BOOL_NOT/13               #59=      #58                  ?0                  	;0
131 102  JMPZ/43                   ?0        #59                  ?134                	;0	>>134
132 103  NOP/0                     ?0        ?0                   ?0                  	;1
133 103  GOTO/253                  ?0        ?135                 ?100                	;0
134 105  ECHO/40                   ?0        101:' selected'      ?0                  	;0	<<131
135 107  ECHO/40                   ?0        102:' value="'       ?0                  	;0
136 108  ECHO/40                   ?0        16?6                 ?0                  	;0
137 109  ECHO/40                   ?0        103:'">'             ?0                  	;0
138 110  ECHO/40                   ?0        16?6                 ?0                  	;0
139 111  ECHO/40                   ?0        104:'</option>
                                    ' ?0                  	;0
140 112  JMP/42                    ?0        ?126                 ?0                  	;0	>>126
141 112  FE_FREE/127               ?0        $56                  ?0                  	;0	<<125
142 115  GOTO/253                  ?0        ?229                 ?105                	;0
143 118  FETCH_STATIC_PROP_IS/176  $60=      106:'rRequest'       107:'XUI'           	;0
144 118  ISSET_ISEMPTY_DIM_OBJ/115 #61=      $60                  109:'stream'        	;33554432
145 118  BOOL_NOT/13               #62=      #61                  ?0                  	;0
146 118  JMPZ/43                   ?0        #62                  ?148                	;0	>>148
147 119  GOTO/253                  ?0        ?154                 ?110                	;0
148 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'f260b7A31f021e39'	;1	<<146
149 121  FETCH_STATIC_PROP_FUNC_ARG/177 $63=      113:'rRequest'       114:'XUI'           	;1
150 121  FETCH_DIM_FUNC_ARG/93     $64=      $63                  116:'stream'        	;1
151 121  SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
152 121  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
153 121  ASSIGN/38                 ?55       16?8                 $65                 	;0
154 123  ASSIGN/38                 ?56       16?9                 117:'Live Connections'	;0
155 124  GOTO/253                  ?0        ?212                 ?118                	;0
156 126  ECHO/40                   ?0        119:'>My Lines</option>
                                    </optgroup>
                                    ' ?0                  	;0
157 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'count'         	;1
158 127  FETCH_DIM_FUNC_ARG/93     $68=      16?0                 122:'direct_reports'	;1
159 127  SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
160 127  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
161 127  IS_SMALLER/19             #70=      123:0                $69                 	;0
162 127  BOOL_NOT/13               #71=      #70                  ?0                  	;0
163 127  JMPZ/43                   ?0        #71                  ?165                	;0	>>165
164 128  GOTO/253                  ?0        ?235                 ?124                	;0
165 130  ECHO/40                   ?0        125:'                                    <optgroup label="Direct Reports">
                                        ' ?0                  	;0	<<163
166 131  FETCH_DIM_R/81            $72=      16?0                 126:'direct_reports'	;0
167 131  FE_RESET_R/77             $73=      $72                  ?200                	;0
168 131  FE_FETCH_R/78             ?0        $73                  16?1                	;200	>>200	<<199
169 132  NOP/0                     ?0        ?0                   ?0                  	;1
170 132  GOTO/253                  ?0        ?171                 ?127                	;0
171 134  FETCH_DIM_R/81            $74=      16?0                 128:'users'         	;0
172 134  FETCH_DIM_R/81            $75=      $74                  16?1                	;0
173 134  ASSIGN/38                 ?65       16?2                 $75                 	;0
174 135  ECHO/40                   ?0        129:'                                        <option value="' ?0                  	;0
175 136  ECHO/40                   ?0        16?1                 ?0                  	;0
176 137  ECHO/40                   ?0        130:'"'              ?0                  	;0
177 138  FETCH_STATIC_PROP_IS/176  $77=      131:'rRequest'       132:'XUI'           	;0
178 138  ISSET_ISEMPTY_DIM_OBJ/115 #78=      $77                  134:'user'          	;33554432
179 138  JMPZ_EX/46                #78=      #78                  ?184                	;0	>>184
180 138  FETCH_STATIC_PROP_R/173   $79=      135:'rRequest'       136:'XUI'           	;0
181 138  FETCH_DIM_R/81            $80=      $79                  138:'user'          	;0
182 138  IS_EQUAL/17               #81=      $80                  16?1                	;0
183 138  BOOL/52                   #78=      #81                  ?0                  	;0
184 138  BOOL_NOT/13               #82=      #78                  ?0                  	;0	<<179
185 138  JMPZ/43                   ?0        #82                  ?188                	;0	>>188
186 139  NOP/0                     ?0        ?0                   ?0                  	;1
187 139  GOTO/253                  ?0        ?191                 ?139                	;0
188 141  NOP/0                     ?0        ?0                   ?0                  	;1	<<185
189 141  GOTO/253                  ?0        ?190                 ?140                	;0
190 143  ECHO/40                   ?0        141:' selected'      ?0                  	;0
191 145  ECHO/40                   ?0        142:'>'              ?0                  	;0
192 146  FETCH_DIM_R/81            $83=      16?2                 143:'username'      	;0
193 146  ECHO/40                   ?0        $83                  ?0                  	;0
194 147  ECHO/40                   ?0        144:'</option>
                                        ' ?0                  	;0
195 148  NOP/0                     ?0        ?0                   ?0                  	;1
196 148  GOTO/253                  ?0        ?197                 ?145                	;0
197 151  NOP/0                     ?0        ?0                   ?0                  	;1
198 151  GOTO/253                  ?0        ?199                 ?146                	;0
199 152  JMP/42                    ?0        ?168                 ?0                  	;0	>>168
200 152  FE_FREE/127               ?0        $73                  ?0                  	;0	<<167
201 155  GOTO/253                  ?0        ?234                 ?147                	;0
202 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'intval'        	;1
203 157  FETCH_DIM_FUNC_ARG/93     $84=      16?8                 150:'id'            	;1
204 157  SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
205 157  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
206 157  ECHO/40                   ?0        $85                  ?0                  	;0
207 158  ECHO/40                   ?0        151:'" selected="selected">' ?0                  	;0
208 159  FETCH_DIM_R/81            $86=      16?8                 152:'stream_display_name'	;0
209 159  ECHO/40                   ?0        $86                  ?0                  	;0
210 160  ECHO/40                   ?0        153:'</option>
                                    ' ?0                  	;0
211 162  GOTO/253                  ?0        ?108                 ?154                	;0
212 164  INCLUDE_OR_EVAL/73        ?76       155:'header.php'     ?0                  	;2
213 165  ECHO/40                   ?0        156:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
214 166  INCLUDE_OR_EVAL/73        ?77       157:'topbar.php'     ?0                  	;2
215 167  ECHO/40                   ?0        158:'					</div>
					<h4 class="page-title">' ?0                  	;0
216 168  FETCH_DIM_R/81            $89=      16?5                 159:'live_connections'	;0
217 168  ECHO/40                   ?0        $89                  ?0                  	;0
218 169  GOTO/253                  ?0        ?428                 ?160                	;0
219 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'intval'        	;1
220 171  FETCH_DIM_FUNC_ARG/93     $90=      16?3                 163:'id'            	;1
221 171  SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
222 171  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
223 171  ECHO/40                   ?0        $91                  ?0                  	;0
224 172  ECHO/40                   ?0        164:'" selected="selected">' ?0                  	;0
225 173  FETCH_DIM_R/81            $92=      16?3                 165:'username'      	;0
226 173  ECHO/40                   ?0        $92                  ?0                  	;0
227 174  ECHO/40                   ?0        166:'</option>
                                    ' ?0                  	;0
228 176  GOTO/253                  ?0        ?403                 ?167                	;0
229 178  ECHO/40                   ?0        168:'                                </select>
                            </div>
                        </div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Quality</th>
                                    <th>Line</th>
									<th>Stream</th>
                                    <th>Player</th>
									<th>ISP</th>
                                    <th class="text-center">IP</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Output</th>
                                    <th class="text-center">' ?0                  	;0
230 179  FETCH_DIM_R/81            $93=      16?5                 169:'actions'       	;0
231 179  ECHO/40                   ?0        $93                  ?0                  	;0
232 180  ECHO/40                   ?0        170:'</th>
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
233 181  GOTO/253                  ?0        ?435                 ?171                	;0
234 183  ECHO/40                   ?0        172:'                                    </optgroup>
                                    ' ?0                  	;0
235 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'count'         	;1
236 185  FETCH_DIM_FUNC_ARG/93     $94=      16?0                 175:'all_reports'   	;1
237 185  SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
238 185  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
239 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'count'         	;1
240 185  FETCH_DIM_FUNC_ARG/93     $96=      16?0                 178:'direct_reports'	;1
241 185  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
242 185  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
243 185  IS_SMALLER/19             #98=      $97                  $95                 	;0
244 185  BOOL_NOT/13               #99=      #98                  ?0                  	;0
245 185  JMPZ/43                   ?0        #99                  ?247                	;0	>>247
246 186  GOTO/253                  ?0        ?343                 ?179                	;0
247 188  ECHO/40                   ?0        180:'                                    <optgroup label="Indirect Reports">
                                        ' ?0                  	;0	<<245
248 189  FETCH_DIM_R/81            $100=     16?0                 181:'all_reports'   	;0
249 189  FE_RESET_R/77             $101=     $100                 ?290                	;0
250 189  FE_FETCH_R/78             ?0        $101                 16?1                	;290	>>290	<<289
251 190  NOP/0                     ?0        ?0                   ?0                  	;1
252 190  GOTO/253                  ?0        ?256                 ?182                	;0
253 192  ECHO/40                   ?0        183:'</option>
                                            ' ?0                  	;0
254 195  NOP/0                     ?0        ?0                   ?0                  	;1
255 195  GOTO/253                  ?0        ?289                 ?184                	;0
256 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'in_array'      	;2
257 197  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
258 197  FETCH_DIM_FUNC_ARG/93     $102=     16?0                 187:'direct_reports'	;2
259 197  SEND_VAR_EX/66            ?96       $102                 ?2                  	;0
260 197  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
261 197  JMPZ/43                   ?0        $103                 ?264                	;0	>>264
262 198  NOP/0                     ?0        ?0                   ?0                  	;1
263 198  GOTO/253                  ?0        ?254                 ?188                	;0
264 200  FETCH_DIM_R/81            $104=     16?0                 189:'users'         	;0	<<261
265 200  FETCH_DIM_R/81            $105=     $104                 16?1                	;0
266 200  ASSIGN/38                 ?95       16?2                 $105                	;0
267 201  ECHO/40                   ?0        190:'                                            <option value="' ?0                  	;0
268 202  ECHO/40                   ?0        16?1                 ?0                  	;0
269 203  ECHO/40                   ?0        191:'"'              ?0                  	;0
270 204  NOP/0                     ?0        ?0                   ?0                  	;1
271 204  GOTO/253                  ?0        ?272                 ?192                	;0
272 206  FETCH_STATIC_PROP_IS/176  $107=     193:'rRequest'       194:'XUI'           	;0
273 206  ISSET_ISEMPTY_DIM_OBJ/115 #108=     $107                 196:'user'          	;33554432
274 206  JMPZ_EX/46                #108=     #108                 ?279                	;0	>>279
275 206  FETCH_STATIC_PROP_R/173   $109=     197:'rRequest'       198:'XUI'           	;0
276 206  FETCH_DIM_R/81            $110=     $109                 200:'user'          	;0
277 206  IS_EQUAL/17               #111=     $110                 16?1                	;0
278 206  BOOL/52                   #108=     #111                 ?0                  	;0
279 206  BOOL_NOT/13               #112=     #108                 ?0                  	;0	<<274
280 206  JMPZ/43                   ?0        #112                 ?283                	;0	>>283
281 207  NOP/0                     ?0        ?0                   ?0                  	;1
282 207  GOTO/253                  ?0        ?284                 ?201                	;0
283 209  ECHO/40                   ?0        202:' selected'      ?0                  	;0	<<280
284 211  ECHO/40                   ?0        203:'>'              ?0                  	;0
285 212  FETCH_DIM_R/81            $113=     16?2                 204:'username'      	;0
286 212  ECHO/40                   ?0        $113                 ?0                  	;0
287 213  NOP/0                     ?0        ?0                   ?0                  	;1
288 213  GOTO/253                  ?0        ?253                 ?205                	;0
289 214  JMP/42                    ?0        ?250                 ?0                  	;0	>>250
290 214  FE_FREE/127               ?0        $101                 ?0                  	;0	<<249
291 216  GOTO/253                  ?0        ?342                 ?206                	;0
292 218  FETCH_STATIC_PROP_IS/176  $114=     207:'rRequest'       208:'XUI'           	;0
293 218  ISSET_ISEMPTY_DIM_OBJ/115 #115=     $114                 210:'user'          	;33554432
294 218  JMPZ_EX/46                #115=     #115                 ?300                	;0	>>300
295 218  FETCH_STATIC_PROP_R/173   $116=     211:'rRequest'       212:'XUI'           	;0
296 218  FETCH_DIM_R/81            $117=     $116                 214:'user'          	;0
297 218  FETCH_DIM_R/81            $118=     16?4                 215:'id'            	;0
298 218  IS_EQUAL/17               #119=     $117                 $118                	;0
299 218  BOOL/52                   #115=     #119                 ?0                  	;0
300 218  BOOL_NOT/13               #120=     #115                 ?0                  	;0	<<294
301 218  JMPZ/43                   ?0        #120                 ?303                	;0	>>303
302 219  GOTO/253                  ?0        ?304                 ?216                	;0
303 221  ECHO/40                   ?0        217:' selected'      ?0                  	;0	<<301
304 223  ECHO/40                   ?0        218:'>My Lines</option>
                                    </optgroup>
                                    ' ?0                  	;0
305 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'count'         	;1
306 224  FETCH_DIM_FUNC_ARG/93     $121=     16?0                 221:'direct_reports'	;1
307 224  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
308 224  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
309 224  IS_SMALLER/19             #123=     222:0                $122                	;0
310 224  BOOL_NOT/13               #124=     #123                 ?0                  	;0
311 224  JMPZ/43                   ?0        #124                 ?313                	;0	>>313
312 225  GOTO/253                  ?0        ?38                  ?223                	;0
313 227  GOTO/253                  ?0        ?1                   ?224                	;0	<<311
314 230  ECHO/40                   ?0        225:'                                </select>
                            </div>
							' ?0                  	;0
315 231  GOTO/253                  ?0        ?344                 ?226                	;0
316 233  ECHO/40                   ?0        227:'                            <div class="col-md-4">
                                <select id="live_stream" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
317 234  GOTO/253                  ?0        ?318                 ?228                	;0
318 236  ISSET_ISEMPTY_CV/197      #125=     16?8                 ?0                  	;33554432
319 236  BOOL_NOT/13               #126=     #125                 ?0                  	;0
320 236  JMPZ/43                   ?0        #126                 ?322                	;0	>>322
321 237  GOTO/253                  ?0        ?92                  ?229                	;0
322 239  ECHO/40                   ?0        230:'                                    <option value="' ?0                  	;0	<<320
323 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'intval'        	;1
324 240  FETCH_DIM_FUNC_ARG/93     $127=     16?8                 233:'id'            	;1
325 240  SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
326 240  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
327 240  ECHO/40                   ?0        $128                 ?0                  	;0
328 241  ECHO/40                   ?0        234:'" selected="selected">' ?0                  	;0
329 242  FETCH_DIM_R/81            $129=     16?8                 235:'stream_display_name'	;0
330 242  ECHO/40                   ?0        $129                 ?0                  	;0
331 243  GOTO/253                  ?0        ?91                  ?236                	;0
332 245  ECHO/40                   ?0        237:'" placeholder="' ?0                  	;0
333 246  FETCH_DIM_R/81            $130=     16?5                 238:'search_logs'   	;0
334 246  ECHO/40                   ?0        $130                 ?0                  	;0
335 247  ECHO/40                   ?0        239:'...">
                            </div>
                            <div class="col-md-3">
                                <select id="live_stream" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
336 248  ISSET_ISEMPTY_CV/197      #131=     16?8                 ?0                  	;33554432
337 248  BOOL_NOT/13               #132=     #131                 ?0                  	;0
338 248  JMPZ/43                   ?0        #132                 ?340                	;0	>>340
339 249  GOTO/253                  ?0        ?211                 ?240                	;0
340 251  ECHO/40                   ?0        241:'                                    <option value="' ?0                  	;0	<<338
341 252  GOTO/253                  ?0        ?202                 ?242                	;0
342 255  ECHO/40                   ?0        243:'                                    </optgroup>
                                    ' ?0                  	;0
343 257  ECHO/40                   ?0        244:'                                </select>
                            </div>
							' ?0                  	;0
344 259  GOTO/253                  ?0        ?121                 ?245                	;0
345 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'count'         	;1
346 261  FETCH_DIM_FUNC_ARG/93     $133=     16?0                 248:'all_reports'   	;1
347 261  SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
348 261  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
349 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'count'         	;1
350 261  FETCH_DIM_FUNC_ARG/93     $135=     16?0                 251:'direct_reports'	;1
351 261  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
352 261  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
353 261  IS_SMALLER/19             #137=     $136                 $134                	;0
354 261  BOOL_NOT/13               #138=     #137                 ?0                  	;0
355 261  JMPZ/43                   ?0        #138                 ?357                	;0	>>357
356 262  GOTO/253                  ?0        ?314                 ?252                	;0
357 264  ECHO/40                   ?0        253:'                                    <optgroup label="Indirect Reports">
                                        ' ?0                  	;0	<<355
358 265  FETCH_DIM_R/81            $139=     16?0                 254:'all_reports'   	;0
359 265  FE_RESET_R/77             $140=     $139                 ?400                	;0
360 265  FE_FETCH_R/78             ?0        $140                 16?1                	;400	>>400	<<399
361 266  NOP/0                     ?0        ?0                   ?0                  	;1
362 266  GOTO/253                  ?0        ?366                 ?255                	;0
363 268  ECHO/40                   ?0        256:'</option>
                                            ' ?0                  	;0
364 271  NOP/0                     ?0        ?0                   ?0                  	;1
365 271  GOTO/253                  ?0        ?399                 ?257                	;0
366 273  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'in_array'      	;2
367 273  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
368 273  FETCH_DIM_FUNC_ARG/93     $141=     16?0                 260:'direct_reports'	;2
369 273  SEND_VAR_EX/66            ?96       $141                 ?2                  	;0
370 273  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
371 273  JMPZ/43                   ?0        $142                 ?374                	;0	>>374
372 274  NOP/0                     ?0        ?0                   ?0                  	;1
373 274  GOTO/253                  ?0        ?364                 ?261                	;0
374 276  FETCH_DIM_R/81            $143=     16?0                 262:'users'         	;0	<<371
375 276  FETCH_DIM_R/81            $144=     $143                 16?1                	;0
376 276  ASSIGN/38                 ?134      16?2                 $144                	;0
377 277  ECHO/40                   ?0        263:'                                            <option value="' ?0                  	;0
378 278  ECHO/40                   ?0        16?1                 ?0                  	;0
379 279  ECHO/40                   ?0        264:'"'              ?0                  	;0
380 280  NOP/0                     ?0        ?0                   ?0                  	;1
381 280  GOTO/253                  ?0        ?382                 ?265                	;0
382 282  FETCH_STATIC_PROP_IS/176  $146=     266:'rRequest'       267:'XUI'           	;0
383 282  ISSET_ISEMPTY_DIM_OBJ/115 #147=     $146                 269:'user'          	;33554432
384 282  JMPZ_EX/46                #147=     #147                 ?389                	;0	>>389
385 282  FETCH_STATIC_PROP_R/173   $148=     270:'rRequest'       271:'XUI'           	;0
386 282  FETCH_DIM_R/81            $149=     $148                 273:'user'          	;0
387 282  IS_EQUAL/17               #150=     $149                 16?1                	;0
388 282  BOOL/52                   #147=     #150                 ?0                  	;0
389 282  BOOL_NOT/13               #151=     #147                 ?0                  	;0	<<384
390 282  JMPZ/43                   ?0        #151                 ?393                	;0	>>393
391 283  NOP/0                     ?0        ?0                   ?0                  	;1
392 283  GOTO/253                  ?0        ?394                 ?274                	;0
393 285  ECHO/40                   ?0        275:' selected'      ?0                  	;0	<<390
394 287  ECHO/40                   ?0        276:'>'              ?0                  	;0
395 288  FETCH_DIM_R/81            $152=     16?2                 277:'username'      	;0
396 288  ECHO/40                   ?0        $152                 ?0                  	;0
397 289  NOP/0                     ?0        ?0                   ?0                  	;1
398 289  GOTO/253                  ?0        ?363                 ?278                	;0
399 290  JMP/42                    ?0        ?360                 ?0                  	;0	>>360
400 290  FE_FREE/127               ?0        $140                 ?0                  	;0	<<359
401 293  ECHO/40                   ?0        279:'                                    </optgroup>
                                    ' ?0                  	;0
402 294  GOTO/253                  ?0        ?314                 ?280                	;0
403 296  ECHO/40                   ?0        281:'                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="live_user" class="form-control" data-toggle="select2">
                                    <optgroup label="Global">
                                        <option value=""' ?0                  	;0
404 297  FETCH_STATIC_PROP_IS/176  $153=     282:'rRequest'       283:'XUI'           	;0
405 297  ISSET_ISEMPTY_DIM_OBJ/115 #154=     $153                 285:'user'          	;33554432
406 297  JMPZ/43                   ?0        #154                 ?408                	;0	>>408
407 298  GOTO/253                  ?0        ?409                 ?286                	;0
408 300  ECHO/40                   ?0        287:' selected'      ?0                  	;0	<<406
409 302  ECHO/40                   ?0        288:'>All Users</option>
                                        <option value="' ?0                  	;0
410 303  GOTO/253                  ?0        ?48                  ?289                	;0
411 305  FETCH_STATIC_PROP_R/173   $155=     290:'rSettings'      291:'XUI'           	;0
412 305  FETCH_DIM_R/81            $156=     $155                 293:'redis_handler' 	;0
413 305  JMPZ/43                   ?0        $156                 ?415                	;0	>>415
414 306  GOTO/253                  ?0        ?316                 ?294                	;0
415 308  ECHO/40                   ?0        295:'							<div class="col-md-3">
                                <input type="text" class="form-control" id="live_search" value="' ?0                  	;0	<<413
416 309  FETCH_STATIC_PROP_IS/176  $157=     296:'rRequest'       297:'XUI'           	;0
417 309  ISSET_ISEMPTY_DIM_OBJ/115 #158=     $157                 299:'search'        	;33554432
418 309  BOOL_NOT/13               #159=     #158                 ?0                  	;0
419 309  JMPZ/43                   ?0        #159                 ?421                	;0	>>421
420 310  GOTO/253                  ?0        ?427                 ?300                	;0
421 312  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'htmlspecialchars'	;1	<<419
422 312  FETCH_STATIC_PROP_FUNC_ARG/177 $160=     303:'rRequest'       304:'XUI'           	;1
423 312  FETCH_DIM_FUNC_ARG/93     $161=     $160                 306:'search'        	;1
424 312  SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
425 312  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
426 312  ECHO/40                   ?0        $162                 ?0                  	;0
427 314  GOTO/253                  ?0        ?332                 ?307                	;0
428 316  ECHO/40                   ?0        308:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
429 317  BOOL_NOT/13               #163=     16?10                ?0                  	;0
430 317  JMPZ/43                   ?0        #163                 ?432                	;0	>>432
431 318  GOTO/253                  ?0        ?433                 ?309                	;0
432 320  ECHO/40                   ?0        310:'collapse'       ?0                  	;0	<<430
433 322  ECHO/40                   ?0        311:' form-group row mb-4">
							' ?0                  	;0
434 323  GOTO/253                  ?0        ?411                 ?312                	;0
435 325  INCLUDE_OR_EVAL/73        ?153      313:'footer.php'     ?0                  	;2
436 326  NOP/0                     ?0        314:1                ?0                  	;4294967295
*/

?>