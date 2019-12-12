<section class="event-info-container">
    <ul class="stack stack-small event-info event-info-tanzkomplizen">
        <li><span>Uhrzeit: </span><?= $page->time() ?> Uhr</li>
        <li><span>Ort: </span><?= $page->location() ?></li>
        <li><span>Dauer: </span><?= $page->duration() ?></li>
        <li><span>Tickets: </span><a href="mailto:<?= $page->tickets() ?>"><?= $page->tickets() ?></a></li>
        <?php if ($page->age()->isNotEmpty()) : ?>
            <li><span>Alter: </span><?= $page->age() ?>+</li>
        <?php endif ?>
    </ul>
    <p class="event-info-caption"><?= $page->caption() ?></p>
</section>

<section class="stack">
    <?php if ($page->scedule()->isNotEmpty()) : ?>
        <h2>Weitere Termine</h2>
        <div class="cluster cluster-small">
            <div>
            <?php foreach ($page->scedule()->toStructure() as $termin) : ?>
                <p class="event-dates bg-tanzkomplizen">
                <?= $termin->datum()->toDate('D, d.n.Y') ?> / <?= $termin->zeit()->time('g') ?> Uhr
                </p>
            <?php endforeach ?>
            </div>
        </div>

    <?php endif ?>
</section>