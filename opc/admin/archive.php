<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?49                  ?0                  	;0	>>49
1   6    ECHO/40                   ?0        1:'                                </tbody>
                            </table>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
2   7    GOTO/253                  ?0        ?366                 ?2                  	;0
3   9    ECHO/40                   ?0        3:' style="display: none;"' ?0                  	;0
4   11   ECHO/40                   ?0        4:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
5   12   INCLUDE_OR_EVAL/73        ?0        5:'topbar.php'       ?0                  	;2
6   13   ECHO/40                   ?0        6:'					</div>
                    ' ?0                  	;0
7   14   GOTO/253                  ?0        ?178                 ?7                  	;0
8   16   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'f260B7a31F021e39'	;1
9   16   FETCH_STATIC_PROP_FUNC_ARG/177 $9=       10:'rRequest'        11:'XUI'            	;1
10  16   FETCH_DIM_FUNC_ARG/93     $10=      $9                   13:'id'             	;1
11  16   SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
12  16   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
13  16   ASSIGN/38                 ?4        16?0                 $11                 	;0
14  17   BOOL_NOT/13               #13=      16?0                 ?0                  	;0
15  17   JMPNZ_EX/47               #13=      #13                  ?19                 	;0	>>19
16  17   FETCH_DIM_R/81            $14=      16?0                 14:'type'           	;0
17  17   IS_NOT_EQUAL/18           #15=      $14                  15:1                	;0
18  17   BOOL/52                   #13=      #15                  ?0                  	;0
19  17   JMPNZ_EX/47               #13=      #13                  ?23                 	;0	>>23	<<15
20  17   FETCH_DIM_R/81            $16=      16?0                 16:'tv_archive_duration'	;0
21  17   IS_EQUAL/17               #17=      $16                  17:0                	;0
22  17   BOOL/52                   #13=      #17                  ?0                  	;0
23  17   JMPNZ_EX/47               #13=      #13                  ?27                 	;0	>>27	<<19
24  17   FETCH_DIM_R/81            $18=      16?0                 18:'tv_archive_server_id'	;0
25  17   IS_EQUAL/17               #19=      $18                  19:0                	;0
26  17   BOOL/52                   #13=      #19                  ?0                  	;0
27  17   BOOL_NOT/13               #20=      #13                  ?0                  	;0	<<23
28  17   JMPZ/43                   ?0        #20                  ?30                 	;0	>>30
29  18   GOTO/253                  ?0        ?32                  ?20                 	;0
30  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'e72f42a93714BA87'	;0	<<28
31  20   DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
32  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'c2ae9fda76b23ED4'	;1
33  22   FETCH_DIM_FUNC_ARG/93     $22=      16?0                 25:'id'             	;1
34  22   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
35  22   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
36  22   ASSIGN/38                 ?16       16?1                 $23                 	;0
37  23   GOTO/253                  ?0        ?340                 ?26                 	;0
38  26   ECHO/40                   ?0        27:'					<h4 class="page-title">Recordings</h4>
                    ' ?0                  	;0
39  28   ECHO/40                   ?0        28:'				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
40  29   ISSET_ISEMPTY_CV/197      #25=      16?2                 ?0                  	;33554432
41  29   JMPZ_EX/46                #25=      #25                  ?45                 	;0	>>45
42  29   FETCH_CONSTANT/99         #26=      ?0                   29:'STATUS_SUCCESS' 	;16
43  29   IS_EQUAL/17               #27=      16?2                 #26                 	;0
44  29   BOOL/52                   #25=      #27                  ?0                  	;0
45  29   BOOL_NOT/13               #28=      #25                  ?0                  	;0	<<41
46  29   JMPZ/43                   ?0        #28                  ?48                 	;0	>>48
47  30   GOTO/253                  ?0        ?59                  ?32                 	;0
48  32   GOTO/253                  ?0        ?58                  ?33                 	;0	<<46
49  34   INCLUDE_OR_EVAL/73        ?21       34:'session.php'     ?0                  	;2	<<0
50  35   INCLUDE_OR_EVAL/73        ?22       35:'functions.php'   ?0                  	;2
51  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'e6d500E19634D513'	;0
52  36   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
53  36   JMPZ/43                   ?0        $31                  ?55                 	;0	>>55
54  37   GOTO/253                  ?0        ?57                  ?38                 	;0
55  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'e72f42a93714bA87'	;0	<<53
56  39   DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
57  41   GOTO/253                  ?0        ?330                 ?41                 	;0
58  43   ECHO/40                   ?0        42:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Recording has been scheduled.
				</div>
                ' ?0                  	;0
59  45   ECHO/40                   ?0        43:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="table">
                            <table id="datatable" class="table table-striped table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Duration</th>
                                        <th>Title</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Player</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ' ?0                  	;0
60  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'is_null'        	;1
61  46   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
62  46   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
63  46   BOOL_NOT/13               #34=      $33                  ?0                  	;0
64  46   JMPZ/43                   ?0        #34                  ?66                 	;0	>>66
65  47   GOTO/253                  ?0        ?191                 ?46                 	;0
66  49   FE_RESET_R/77             $35=      16?1                 ?176                	;0	<<64
67  49   FE_FETCH_R/78             ?0        $35                  16?4                	;176	>>176	<<175
68  50   NOP/0                     ?0        ?0                   ?0                  	;1
69  50   GOTO/253                  ?0        ?70                  ?47                 	;0
70  52   FETCH_DIM_R/81            $36=      16?4                 48:'end'            	;0
71  52   FETCH_DIM_R/81            $37=      16?4                 49:'start'          	;0
72  52   SUB/2                     #38=      $36                  $37                 	;0
73  52   ASSIGN/38                 ?31       16?5                 #38                 	;0
74  53   FETCH_STATIC_PROP_R/173   $41=      51:'rRequest'        52:'XUI'            	;0
75  53   FETCH_DIM_R/81            $42=      $41                  54:'id'             	;0
76  53   ASSIGN_DIM/147            ?32       16?4                 50:'stream_id'      	;0
77  53   OP_DATA/137               ?0        $42                  ?0                  	;0
78  54   ECHO/40                   ?0        55:'                                    <tr>
                                        <td>' ?0                  	;0
79  55   FETCH_DIM_R/81            $43=      16?4                 56:'id'             	;0
80  55   ECHO/40                   ?0        $43                  ?0                  	;0
81  56   ECHO/40                   ?0        57:'</td>
                                        <td class="text-center">' ?0                  	;0
82  57   NOP/0                     ?0        ?0                   ?0                  	;1
83  57   GOTO/253                  ?0        ?147                 ?58                 	;0
84  59   ECHO/40                   ?0        59:'                                            <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>IN PROGRESS</button>
                                            ' ?0                  	;0
85  61   ECHO/40                   ?0        60:'                                        </td>
                                        <td class="text-center"><button type="button" class="btn btn-info waves-effect waves-light btn-xs" onclick="player(' ?0                  	;0
86  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'intval'         	;1
87  62   FETCH_DIM_FUNC_ARG/93     $44=      16?0                 63:'id'             	;1
88  62   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
89  62   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
90  62   ECHO/40                   ?0        $45                  ?0                  	;0
91  63   ECHO/40                   ?0        64:', '              ?0                  	;0
92  64   NOP/0                     ?0        ?0                   ?0                  	;1
93  64   GOTO/253                  ?0        ?110                 ?65                 	;0
94  66   ECHO/40                   ?0        66:'                                        <td class="text-center"><button disabled type="button" class="btn btn-danger waves-effect waves-light btn-xs"><i class="mdi mdi-record"></i></button></td>
                                        ' ?0                  	;0
95  67   NOP/0                     ?0        ?0                   ?0                  	;1
96  67   GOTO/253                  ?0        ?130                 ?67                 	;0
97  69   ECHO/40                   ?0        68:'                                        <td class="text-center"><a href="record?archive=' ?0                  	;0
98  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'urlencode'      	;1
99  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'base64_encode'  	;1
100 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'json_encode'    	;1
101 70   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
102 70   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
103 70   SEND_VAR_NO_REF_EX/50     ?80       $46                  ?1                  	;0
104 70   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
105 70   SEND_VAR_NO_REF_EX/50     ?80       $47                  ?1                  	;0
106 70   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
107 70   ECHO/40                   ?0        $48                  ?0                  	;0
108 71   NOP/0                     ?0        ?0                   ?0                  	;1
109 71   GOTO/253                  ?0        ?129                 ?75                 	;0
110 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'intval'         	;1
111 73   FETCH_DIM_FUNC_ARG/93     $49=      16?4                 78:'start'          	;1
112 73   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
113 73   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
114 73   ECHO/40                   ?0        $50                  ?0                  	;0
115 74   ECHO/40                   ?0        79:', '              ?0                  	;0
116 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'intval'         	;1
117 75   DIV/4                     #51=      16?5                 82:60               	;0
118 75   SEND_VAL_EX/116           ?80       #51                  ?1                  	;0
119 75   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
120 75   ECHO/40                   ?0        $52                  ?0                  	;0
121 76   ECHO/40                   ?0        83:');"><i class="mdi mdi-play"></i></button></td>
                                        ' ?0                  	;0
122 77   FETCH_DIM_R/81            $53=      16?4                 84:'in_progress'    	;0
123 77   BOOL_NOT/13               #54=      $53                  ?0                  	;0
124 77   JMPZ/43                   ?0        #54                  ?127                	;0	>>127
125 78   NOP/0                     ?0        ?0                   ?0                  	;1
126 78   GOTO/253                  ?0        ?97                  ?85                 	;0
127 80   NOP/0                     ?0        ?0                   ?0                  	;1	<<124
128 80   GOTO/253                  ?0        ?94                  ?86                 	;0
129 82   ECHO/40                   ?0        87:'"><button type="button" class="btn btn-danger waves-effect waves-light btn-xs"><i class="mdi mdi-record"></i></button></a></td>
                                        ' ?0                  	;0
130 84   ECHO/40                   ?0        88:'                                    </tr>
                                    ' ?0                  	;0
131 86   NOP/0                     ?0        ?0                   ?0                  	;1
132 86   GOTO/253                  ?0        ?175                 ?89                 	;0
133 88   ECHO/40                   ?0        90:'</td>
                                        <td class="text-center">
                                            ' ?0                  	;0
134 89   FETCH_DIM_R/81            $55=      16?4                 91:'in_progress'    	;0
135 89   JMPZ/43                   ?0        $55                  ?138                	;0	>>138
136 90   NOP/0                     ?0        ?0                   ?0                  	;1
137 90   GOTO/253                  ?0        ?173                 ?92                 	;0
138 92   FETCH_DIM_R/81            $56=      16?4                 93:'complete'       	;0	<<135
139 92   JMPZ/43                   ?0        $56                  ?142                	;0	>>142
140 93   NOP/0                     ?0        ?0                   ?0                  	;1
141 93   GOTO/253                  ?0        ?170                 ?94                 	;0
142 95   ECHO/40                   ?0        95:'                                            <button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light\'>INCOMPLETE</button>
                                            ' ?0                  	;0	<<139
143 96   NOP/0                     ?0        ?0                   ?0                  	;1
144 96   GOTO/253                  ?0        ?171                 ?96                 	;0
145 97   NOP/0                     ?0        ?0                   ?0                  	;1
146 97   GOTO/253                  ?0        ?170                 ?97                 	;0
147 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'date'           	;2
148 99   FETCH_DIM_R/81            $57=      16?6                 100:'date_format'   	;0
149 99   CONCAT/8                  #58=      $57                  101:' H:i'          	;0
150 99   SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
151 99   FETCH_DIM_FUNC_ARG/93     $59=      16?4                 102:'start'         	;2
152 99   SEND_VAR_EX/66            ?96       $59                  ?2                  	;0
153 99   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
154 99   ECHO/40                   ?0        $60                  ?0                  	;0
155 100  ECHO/40                   ?0        103:'</td>
                                        <td class="text-center">' ?0                  	;0
156 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'sprintf'       	;3
157 101  SEND_VAL_EX/116           ?80       106:'%02dh %02dm'    ?1                  	;0
158 101  DIV/4                     #61=      16?5                 107:3600            	;0
159 101  SEND_VAL_EX/116           ?96       #61                  ?2                  	;0
160 101  DIV/4                     #62=      16?5                 108:60              	;0
161 101  MOD/5                     #63=      #62                  109:60              	;0
162 101  SEND_VAL_EX/116           ?112      #63                  ?3                  	;0
163 101  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
164 101  ECHO/40                   ?0        $64                  ?0                  	;0
165 102  ECHO/40                   ?0        110:'</td>
                                        <td>' ?0                  	;0
166 103  FETCH_DIM_R/81            $65=      16?4                 111:'title'         	;0
167 103  ECHO/40                   ?0        $65                  ?0                  	;0
168 104  NOP/0                     ?0        ?0                   ?0                  	;1
169 104  GOTO/253                  ?0        ?133                 ?112                	;0
170 107  ECHO/40                   ?0        113:'                                            <button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>COMPLETE</button>
                                            ' ?0                  	;0
171 109  NOP/0                     ?0        ?0                   ?0                  	;1
172 109  GOTO/253                  ?0        ?85                  ?114                	;0
173 111  NOP/0                     ?0        ?0                   ?0                  	;1
174 111  GOTO/253                  ?0        ?84                  ?115                	;0
175 112  JMP/42                    ?0        ?67                  ?0                  	;0	>>67
176 112  FE_FREE/127               ?0        $35                  ?0                  	;0	<<66
177 114  GOTO/253                  ?0        ?190                 ?116                	;0
178 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'is_null'       	;1
179 116  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
180 116  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
181 116  BOOL_NOT/13               #67=      $66                  ?0                  	;0
182 116  JMPZ/43                   ?0        #67                  ?184                	;0	>>184
183 117  GOTO/253                  ?0        ?38                  ?119                	;0
184 119  ECHO/40                   ?0        120:'                    <h4 class="page-title">' ?0                  	;0	<<182
185 120  FETCH_DIM_R/81            $68=      16?0                 121:'stream_display_name'	;0
186 120  ECHO/40                   ?0        $68                  ?0                  	;0
187 121  ECHO/40                   ?0        122:'<small> - TV Archive</small></h4>
                    ' ?0                  	;0
188 122  GOTO/253                  ?0        ?39                  ?123                	;0
189 123  GOTO/253                  ?0        ?38                  ?124                	;0
190 126  GOTO/253                  ?0        ?1                   ?125                	;0
191 128  FE_RESET_R/77             $69=      16?3                 ?328                	;0
192 128  FE_FETCH_R/78             ?0        $69                  16?4                	;328	>>328	<<327
193 129  NOP/0                     ?0        ?0                   ?0                  	;1
194 129  GOTO/253                  ?0        ?264                 ?126                	;0
195 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'intval'        	;1
196 131  FETCH_DIM_FUNC_ARG/93     $70=      16?4                 129:'created_id'    	;1
197 131  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
198 131  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
199 131  ECHO/40                   ?0        $71                  ?0                  	;0
200 132  ECHO/40                   ?0        130:');"><i class="mdi mdi-play"></i></button></td>
                                        ' ?0                  	;0
201 134  ECHO/40                   ?0        131:'                                        <td class="text-center">
                                            <div class="btn-group">
                                                ' ?0                  	;0
202 135  FETCH_DIM_R/81            $72=      16?4                 132:'created_id'    	;0
203 135  JMPZ/43                   ?0        $72                  ?206                	;0	>>206
204 136  NOP/0                     ?0        ?0                   ?0                  	;1
205 136  GOTO/253                  ?0        ?319                 ?133                	;0
206 138  NOP/0                     ?0        ?0                   ?0                  	;1	<<203
207 138  GOTO/253                  ?0        ?316                 ?134                	;0
208 140  FETCH_DIM_R/81            $73=      16?4                 135:'id'            	;0
209 140  ECHO/40                   ?0        $73                  ?0                  	;0
210 141  ECHO/40                   ?0        136:'</td>
                                        <td class="text-center">' ?0                  	;0
211 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'date'          	;2
212 142  FETCH_DIM_R/81            $74=      16?6                 139:'date_format'   	;0
213 142  CONCAT/8                  #75=      $74                  140:' H:i'          	;0
214 142  SEND_VAL_EX/116           ?80       #75                  ?1                  	;0
215 142  FETCH_DIM_FUNC_ARG/93     $76=      16?4                 141:'start'         	;2
216 142  SEND_VAR_EX/66            ?96       $76                  ?2                  	;0
217 142  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
218 142  ECHO/40                   ?0        $77                  ?0                  	;0
219 143  ECHO/40                   ?0        142:'</td>
                                        <td class="text-center">' ?0                  	;0
220 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'sprintf'       	;3
221 144  SEND_VAL_EX/116           ?80       145:'%02dh %02dm'    ?1                  	;0
222 144  DIV/4                     #78=      16?5                 146:3600            	;0
223 144  SEND_VAL_EX/116           ?96       #78                  ?2                  	;0
224 144  DIV/4                     #79=      16?5                 147:60              	;0
225 144  MOD/5                     #80=      #79                  148:60              	;0
226 144  SEND_VAL_EX/116           ?112      #80                  ?3                  	;0
227 144  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
228 144  ECHO/40                   ?0        $81                  ?0                  	;0
229 145  NOP/0                     ?0        ?0                   ?0                  	;1
230 145  GOTO/253                  ?0        ?246                 ?149                	;0
231 147  FETCH_DIM_R/81            $82=      16?4                 150:'created_id'    	;0
232 147  JMPZ/43                   ?0        $82                  ?235                	;0	>>235
233 148  NOP/0                     ?0        ?0                   ?0                  	;1
234 148  GOTO/253                  ?0        ?238                 ?151                	;0
235 150  ECHO/40                   ?0        152:'                                        <td class="text-center"><button disabled type="button" class="btn btn-info waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button></td>
                                        ' ?0                  	;0	<<232
236 151  NOP/0                     ?0        ?0                   ?0                  	;1
237 151  GOTO/253                  ?0        ?201                 ?153                	;0
238 153  ECHO/40                   ?0        154:'                                        <td class="text-center"><button type="button" class="btn btn-info waves-effect waves-light btn-xs" onclick="player(' ?0                  	;0
239 154  NOP/0                     ?0        ?0                   ?0                  	;1
240 154  GOTO/253                  ?0        ?195                 ?155                	;0
241 157  NOP/0                     ?0        ?0                   ?0                  	;1
242 157  GOTO/253                  ?0        ?244                 ?156                	;0
243 159  ECHO/40                   ?0        157:'                                            <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>RECORDING</button>
                                            ' ?0                  	;0
244 161  NOP/0                     ?0        ?0                   ?0                  	;1
245 161  GOTO/253                  ?0        ?310                 ?158                	;0
246 163  ECHO/40                   ?0        159:'</td>
                                        <td>' ?0                  	;0
247 164  FETCH_DIM_R/81            $83=      16?4                 160:'title'         	;0
248 164  ECHO/40                   ?0        $83                  ?0                  	;0
249 165  ECHO/40                   ?0        161:'</td>
                                        <td class="text-center">
                                            ' ?0                  	;0
250 166  FETCH_DIM_R/81            $84=      16?4                 162:'status'        	;0
251 166  IS_EQUAL/17               #85=      $84                  163:0               	;0
252 166  JMPZ/43                   ?0        #85                  ?255                	;0	>>255
253 167  NOP/0                     ?0        ?0                   ?0                  	;1
254 167  GOTO/253                  ?0        ?312                 ?164                	;0
255 169  FETCH_DIM_R/81            $86=      16?4                 165:'status'        	;0	<<252
256 169  IS_EQUAL/17               #87=      $86                  166:1               	;0
257 169  JMPZ/43                   ?0        #87                  ?260                	;0	>>260
258 170  NOP/0                     ?0        ?0                   ?0                  	;1
259 170  GOTO/253                  ?0        ?243                 ?167                	;0
260 172  NOP/0                     ?0        ?0                   ?0                  	;1	<<257
261 172  GOTO/253                  ?0        ?289                 ?168                	;0
262 175  NOP/0                     ?0        ?0                   ?0                  	;1
263 175  GOTO/253                  ?0        ?327                 ?169                	;0
264 177  FETCH_DIM_R/81            $88=      16?4                 170:'end'           	;0
265 177  FETCH_DIM_R/81            $89=      16?4                 171:'start'         	;0
266 177  SUB/2                     #90=      $88                  $89                 	;0
267 177  ASSIGN/38                 ?83       16?5                 #90                 	;0
268 178  FETCH_DIM_R/81            $92=      16?4                 172:'status'        	;0
269 178  IS_EQUAL/17               #93=      $92                  173:0               	;0
270 178  JMPZ_EX/46                #93=      #93                  ?274                	;0	>>274
271 178  FETCH_DIM_R/81            $94=      16?4                 174:'archive'       	;0
272 178  BOOL_NOT/13               #95=      $94                  ?0                  	;0
273 178  BOOL/52                   #93=      #95                  ?0                  	;0
274 178  JMPZ_EX/46                #93=      #93                  ?280                	;0	>>280	<<270
275 178  FETCH_DIM_R/81            $96=      16?4                 175:'end'           	;0
276 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'time'          	;0
277 178  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
278 178  IS_SMALLER/19             #98=      $96                  $97                 	;0
279 178  BOOL/52                   #93=      #98                  ?0                  	;0
280 178  BOOL_NOT/13               #99=      #93                  ?0                  	;0	<<274
281 178  JMPZ/43                   ?0        #99                  ?284                	;0	>>284
282 179  NOP/0                     ?0        ?0                   ?0                  	;1
283 179  GOTO/253                  ?0        ?286                 ?178                	;0
284 181  ASSIGN_DIM/147            ?92       16?4                 179:'status'        	;0	<<281
285 181  OP_DATA/137               ?0        180:3                ?0                  	;0
286 183  ECHO/40                   ?0        181:'                                    <tr>
                                        <td>' ?0                  	;0
287 184  NOP/0                     ?0        ?0                   ?0                  	;1
288 184  GOTO/253                  ?0        ?208                 ?182                	;0
289 186  FETCH_DIM_R/81            $101=     16?4                 183:'status'        	;0
290 186  IS_EQUAL/17               #102=     $101                 184:2               	;0
291 186  JMPZ/43                   ?0        #102                 ?294                	;0	>>294
292 187  NOP/0                     ?0        ?0                   ?0                  	;1
293 187  GOTO/253                  ?0        ?297                 ?185                	;0
294 189  ECHO/40                   ?0        186:'                                            <button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light\'>FAILED</button>
                                            ' ?0                  	;0	<<291
295 190  NOP/0                     ?0        ?0                   ?0                  	;1
296 190  GOTO/253                  ?0        ?241                 ?187                	;0
297 192  ECHO/40                   ?0        188:'                                            <button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>COMPLETE</button>
                                            ' ?0                  	;0
298 193  NOP/0                     ?0        ?0                   ?0                  	;1
299 193  GOTO/253                  ?0        ?241                 ?189                	;0
300 195  ECHO/40                   ?0        190:'"><button title="View Movie" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-movie-outline"></i></button></a>
                                                ' ?0                  	;0
301 197  ECHO/40                   ?0        191:'                                                <button title="Delete Recording" onClick="deleteRecording(' ?0                  	;0
302 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'intval'        	;1
303 198  FETCH_DIM_FUNC_ARG/93     $103=     16?4                 194:'id'            	;1
304 198  SEND_VAR_EX/66            ?80       $103                 ?1                  	;0
305 198  DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
306 198  ECHO/40                   ?0        $104                 ?0                  	;0
307 199  ECHO/40                   ?0        195:')" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-close"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    ' ?0                  	;0
308 200  NOP/0                     ?0        ?0                   ?0                  	;1
309 200  GOTO/253                  ?0        ?262                 ?196                	;0
310 202  NOP/0                     ?0        ?0                   ?0                  	;1
311 202  GOTO/253                  ?0        ?313                 ?197                	;0
312 204  ECHO/40                   ?0        198:'                                            <button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>WAITING</button>
                                            ' ?0                  	;0
313 206  ECHO/40                   ?0        199:'                                        </td>
                                        ' ?0                  	;0
314 207  NOP/0                     ?0        ?0                   ?0                  	;1
315 207  GOTO/253                  ?0        ?231                 ?200                	;0
316 209  ECHO/40                   ?0        201:'                                                <button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-movie-outline"></i></button>
                                                ' ?0                  	;0
317 210  NOP/0                     ?0        ?0                   ?0                  	;1
318 210  GOTO/253                  ?0        ?301                 ?202                	;0
319 212  ECHO/40                   ?0        203:'                                                <a href="stream_view?id=' ?0                  	;0
320 213  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'intval'        	;1
321 213  FETCH_DIM_FUNC_ARG/93     $105=     16?4                 206:'created_id'    	;1
322 213  SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
323 213  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
324 213  ECHO/40                   ?0        $106                 ?0                  	;0
325 214  NOP/0                     ?0        ?0                   ?0                  	;1
326 214  GOTO/253                  ?0        ?300                 ?207                	;0
327 215  JMP/42                    ?0        ?192                 ?0                  	;0	>>192
328 215  FE_FREE/127               ?0        $69                  ?0                  	;0	<<191
329 218  GOTO/253                  ?0        ?1                   ?208                	;0
330 220  ASSIGN/38                 ?99       16?3                 209:NULL            	;0
331 221  FETCH_STATIC_PROP_IS/176  $108=     210:'rRequest'       211:'XUI'           	;0
332 221  ISSET_ISEMPTY_DIM_OBJ/115 #109=     $108                 213:'id'            	;33554432
333 221  JMPZ/43                   ?0        #109                 ?335                	;0	>>335
334 222  GOTO/253                  ?0        ?339                 ?214                	;0
335 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'getRecordings' 	;0	<<333
336 224  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
337 224  ASSIGN/38                 ?103      16?3                 $110                	;0
338 225  GOTO/253                  ?0        ?340                 ?217                	;0
339 227  GOTO/253                  ?0        ?8                   ?218                	;0
340 230  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'is_null'       	;1
341 230  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
342 230  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
343 230  BOOL_NOT/13               #113=     $112                 ?0                  	;0
344 230  JMPZ/43                   ?0        #113                 ?347                	;0	>>347
345 230  QM_ASSIGN/22              #114=     221:'Recodings'      ?0                  	;0
346 230  JMP/42                    ?0        ?348                 ?0                  	;0	>>348
347 230  QM_ASSIGN/22              #114=     222:'TV Archive'     ?0                  	;0	<<344
348 230  ASSIGN/38                 ?107      16?7                 #114                	;0	<<346
349 231  INCLUDE_OR_EVAL/73        ?108      223:'header.php'     ?0                  	;2
350 232  ECHO/40                   ?0        224:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
351 233  FETCH_IS/89               $117=     225:'_SERVER'        ?0                  	;0
352 233  ISSET_ISEMPTY_DIM_OBJ/115 #118=     $117                 226:'HTTP_X_REQUESTED_WITH'	;16777216
353 233  BOOL_NOT/13               #119=     #118                 ?0                  	;0
354 233  JMPZ_EX/46                #119=     #119                 ?362                	;0	>>362
355 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'strtolower'    	;1
356 233  FETCH_FUNC_ARG/92         $120=     229:'_SERVER'        ?0                  	;1
357 233  FETCH_DIM_FUNC_ARG/93     $121=     $120                 230:'HTTP_X_REQUESTED_WITH'	;1
358 233  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
359 233  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
360 233  IS_EQUAL/17               #123=     $122                 231:'xmlhttprequest'	;0
361 233  BOOL/52                   #119=     #123                 ?0                  	;0
362 233  BOOL_NOT/13               #124=     #119                 ?0                  	;0	<<354
363 233  JMPZ/43                   ?0        #124                 ?365                	;0	>>365
364 234  GOTO/253                  ?0        ?4                   ?232                	;0
365 236  GOTO/253                  ?0        ?3                   ?233                	;0	<<363
366 238  INCLUDE_OR_EVAL/73        ?117      234:'footer.php'     ?0                  	;2
367 239  NOP/0                     ?0        235:1                ?0                  	;4294967295
*/

?>