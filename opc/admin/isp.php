<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?49                  ?0                  	;0	>>49
1   5    FETCH_STATIC_PROP_IS/176  $2=       1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #3=       $2                   4:'id'              	;33554432
3   5    JMPZ_EX/46                #3=       #3                   ?12                 	;0	>>12
4   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'A298662C65177297'	;1
5   5    FETCH_STATIC_PROP_FUNC_ARG/177 $4=       7:'rRequest'         8:'XUI'             	;1
6   5    FETCH_DIM_FUNC_ARG/93     $5=       $4                   10:'id'             	;1
7   5    SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
8   5    DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
9   5    ASSIGN/38                 $7=       16?0                 $6                  	;0
10  5    BOOL_NOT/13               #8=       $7                   ?0                  	;0
11  5    BOOL/52                   #3=       #8                   ?0                  	;0
12  5    BOOL_NOT/13               #9=       #3                   ?0                  	;0	<<3
13  5    JMPZ/43                   ?0        #9                   ?15                 	;0	>>15
14  6    GOTO/253                  ?0        ?17                  ?11                 	;0
15  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'e72F42A93714Ba87'	;0	<<13
16  8    DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
17  10   ASSIGN/38                 ?9        16?1                 14:'Blocked ISP'    	;0
18  11   INCLUDE_OR_EVAL/73        ?10       15:'header.php'      ?0                  	;2
19  12   GOTO/253                  ?0        ?80                  ?16                 	;0
20  14   ECHO/40                   ?0        17:'							<input type="hidden" name="edit" value="' ?0                  	;0
21  15   FETCH_DIM_R/81            $13=      16?0                 18:'id'             	;0
22  15   ECHO/40                   ?0        $13                  ?0                  	;0
23  16   ECHO/40                   ?0        19:'" />
							'   ?0                  	;0
24  18   ECHO/40                   ?0        20:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#isp-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="isp-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="isp">ISP Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="isp" name="isp" value="' ?0                  	;0
25  19   GOTO/253                  ?0        ?65                  ?21                 	;0
26  21   ISSET_ISEMPTY_CV/197      #14=      16?0                 ?0                  	;33554432
27  21   JMPZ/43                   ?0        #14                  ?29                 	;0	>>29
28  22   GOTO/253                  ?0        ?31                  ?22                 	;0
29  24   ECHO/40                   ?0        23:'Block'           ?0                  	;0	<<27
30  25   GOTO/253                  ?0        ?98                  ?24                 	;0
31  27   ECHO/40                   ?0        25:'Edit'            ?0                  	;0
32  28   GOTO/253                  ?0        ?98                  ?26                 	;0
33  30   FETCH_DIM_R/81            $15=      16?0                 27:'blocked'        	;0
34  30   IS_EQUAL/17               #16=      $15                  28:1                	;0
35  30   BOOL_NOT/13               #17=      #16                  ?0                  	;0
36  30   JMPZ/43                   ?0        #17                  ?38                 	;0	>>38
37  31   GOTO/253                  ?0        ?39                  ?29                 	;0
38  33   ECHO/40                   ?0        30:'checked '        ?0                  	;0	<<36
39  36   ECHO/40                   ?0        31:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_isp" type="submit" class="btn btn-primary" value="' ?0                  	;0
40  37   GOTO/253                  ?0        ?26                  ?32                 	;0
41  39   INCLUDE_OR_EVAL/73        ?16       33:'topbar.php'      ?0                  	;2
42  40   ECHO/40                   ?0        34:'					</div>
					<h4 class="page-title">' ?0                  	;0
43  41   ISSET_ISEMPTY_CV/197      #19=      16?0                 ?0                  	;33554432
44  41   JMPZ/43                   ?0        #19                  ?46                 	;0	>>46
45  42   GOTO/253                  ?0        ?58                  ?35                 	;0
46  44   ECHO/40                   ?0        36:'Block'           ?0                  	;0	<<44
47  45   GOTO/253                  ?0        ?59                  ?37                 	;0
48  46   GOTO/253                  ?0        ?58                  ?38                 	;0
49  48   INCLUDE_OR_EVAL/73        ?18       39:'session.php'     ?0                  	;2	<<0
50  49   INCLUDE_OR_EVAL/73        ?19       40:'functions.php'   ?0                  	;2
51  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'e6d500E19634d513'	;0
52  50   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
53  50   JMPZ/43                   ?0        $22                  ?55                 	;0	>>55
54  51   GOTO/253                  ?0        ?57                  ?43                 	;0
55  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'e72F42A93714bA87'	;0	<<53
56  53   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
57  55   GOTO/253                  ?0        ?1                   ?46                 	;0
58  58   ECHO/40                   ?0        47:'Edit'            ?0                  	;0
59  60   ECHO/40                   ?0        48:' ISP</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
60  61   ISSET_ISEMPTY_CV/197      #24=      16?0                 ?0                  	;33554432
61  61   BOOL_NOT/13               #25=      #24                  ?0                  	;0
62  61   JMPZ/43                   ?0        #25                  ?64                 	;0	>>64
63  62   GOTO/253                  ?0        ?24                  ?49                 	;0
64  64   GOTO/253                  ?0        ?20                  ?50                 	;0	<<62
65  66   ISSET_ISEMPTY_CV/197      #26=      16?0                 ?0                  	;33554432
66  66   BOOL_NOT/13               #27=      #26                  ?0                  	;0
67  66   JMPZ/43                   ?0        #27                  ?69                 	;0	>>69
68  67   GOTO/253                  ?0        ?74                  ?51                 	;0
69  69   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'htmlspecialchars'	;1	<<67
70  69   FETCH_DIM_FUNC_ARG/93     $28=      16?0                 54:'isp'            	;1
71  69   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
72  69   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
73  69   ECHO/40                   ?0        $29                  ?0                  	;0
74  71   ECHO/40                   ?0        55:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_restreamer">Blocked</label>
													<div class="col-md-2">
														<input name="blocked" id="blocked" type="checkbox" ' ?0                  	;0
75  72   ISSET_ISEMPTY_CV/197      #30=      16?0                 ?0                  	;33554432
76  72   BOOL_NOT/13               #31=      #30                  ?0                  	;0
77  72   JMPZ/43                   ?0        #31                  ?79                 	;0	>>79
78  73   GOTO/253                  ?0        ?39                  ?56                 	;0
79  75   GOTO/253                  ?0        ?33                  ?57                 	;0	<<77
80  77   ECHO/40                   ?0        58:'<div class="wrapper boxed-layout"' ?0                  	;0
81  78   FETCH_IS/89               $32=      59:'_SERVER'         ?0                  	;0
82  78   ISSET_ISEMPTY_DIM_OBJ/115 #33=      $32                  60:'HTTP_X_REQUESTED_WITH'	;16777216
83  78   BOOL_NOT/13               #34=      #33                  ?0                  	;0
84  78   JMPZ_EX/46                #34=      #34                  ?92                 	;0	>>92
85  78   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'strtolower'     	;1
86  78   FETCH_FUNC_ARG/92         $35=      63:'_SERVER'         ?0                  	;1
87  78   FETCH_DIM_FUNC_ARG/93     $36=      $35                  64:'HTTP_X_REQUESTED_WITH'	;1
88  78   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
89  78   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
90  78   IS_EQUAL/17               #38=      $37                  65:'xmlhttprequest' 	;0
91  78   BOOL/52                   #34=      #38                  ?0                  	;0
92  78   BOOL_NOT/13               #39=      #34                  ?0                  	;0	<<84
93  78   JMPZ/43                   ?0        #39                  ?95                 	;0	>>95
94  79   GOTO/253                  ?0        ?96                  ?66                 	;0
95  81   ECHO/40                   ?0        67:' style="display: none;"' ?0                  	;0	<<93
96  83   ECHO/40                   ?0        68:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
97  84   GOTO/253                  ?0        ?41                  ?69                 	;0
98  87   ECHO/40                   ?0        70:'" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
99  88   GOTO/253                  ?0        ?100                 ?71                 	;0
100 90   INCLUDE_OR_EVAL/73        ?38       72:'footer.php'      ?0                  	;2
101 91   NOP/0                     ?0        73:1                 ?0                  	;4294967295
*/

?>