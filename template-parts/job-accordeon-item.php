<? extract($template_args); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <img src="<?= $item['icon']; ?>" alt="icon" class="panel-icon">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $item['counter']; ?>" class="collapsed">
                <?= $item['title']; ?></a>
        </h4>
    </div>
    <div id="collapse<?= $item['counter']; ?>" class="panel-collapse collapse">
        <div class="panel-body">
            <ul>
                <? foreach ($item['services'] as $service) : ?>
                    <li><a href="<?= $service['href']; ?>"><?= $service['title']; ?></a></li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>