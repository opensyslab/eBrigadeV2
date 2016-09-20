<div class="row">
    <div class="col-sm-12 col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <h4><?= __('Add User') ?></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <?php
                        echo $this->Form->input('login');
                        echo $this->Form->input('email');
                        echo $this->Form->input('password');
                        echo $this->Form->input('firstname');
                        echo $this->Form->input('lastname');
                        echo $this->Form->input('birthname');
                        echo $this->Form->input('birthday', [
                            'empty' => true,
                            'minYear' => date('Y')-90,
                            'maxYear' => date('Y')-16
                        ]);
                        echo $this->Form->input('birthplace');
                        ?>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <?php
                        echo $this->Form->input('address');
                        echo $this->Form->input('address_complement');
                        echo $this->Form->input('zipcode');
                        echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true]);
                        echo $this->Form->input('phone');
                        echo $this->Form->input('cellphone');
                        echo $this->Form->input('workphone');
                        echo $this->Form->input('skype');
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <?php
                        echo $this->Form->input('personne_referente');
                        ?>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <?php
                        echo $this->Form->input('tuteur_legal');
                        ?>
                    </div>
                </div>

                <!--
                <?php
                // A définir comment les intégrer
                echo $this->Form->input('is_active');
                echo $this->Form->input('external');

                echo $this->Form->input('alerte');
                echo $this->Form->input('is_provider');
                echo $this->Form->input('barracks._ids', ['options' => $barracks]);
                echo $this->Form->input('skills._ids', ['options' => $skills]);
                echo $this->Form->input('teams._ids', ['options' => $teams]);
                echo $this->Form->input('vehicles._ids', ['options' => $vehicles]);
                ?>
                -->
                </fieldset>
            </div>
            <div class="panel-footer text-center">
                <?= $this->Form->button(__('Submit'),[
                    'class'=>'btn btn-success','escape'=>false
                ]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>